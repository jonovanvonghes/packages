<?php 

namespace Jonovanvonghes\Packages;
use \PDO;
use \DateTime;
use \DateTimeZone;
/**
* JvHelper CLASS
* @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
*/

abstract class JvHelper{

	/**
	 * Contient la base de donnée
	 * @var Db class
	*/
	protected $db = false;
	protected $stmt = false;

	/**
	 * TimeZone
	*/
	protected $timezone = false;
	protected $format_datetime = "%a %e %h %Y à %kh%M";
	protected $format_date = "%a %e %h %Y";
	protected $format_date_simple = "d/m/Y";

	protected $all = array();

	/**
	 * Contient le message d'erreur
	 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
	*/
	protected $error_msg = "";


		/**
		 * Construct
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		function __construct($db = false){
			if ($db != FALSE)
				$this->db = $db;

		}
	

		function __destruct(){
			unset($this->stmt);
			unset($this->db);
		}


	
	/*------------------------------------SQL----------------------------------------*/
	
		public function _beginTransaction()
		{
			$this->db->beginTransaction();
		}

		public function _commit()
		{
			$this->db->commit();
		}

		public function _rollback()
		{
			$this->db->rollBack();
		}

		public function _count($where = FALSE){
			if (!isset($this->table))
				return FALSE;
			$table = $this->table;

			if (!isset($this->id_field))
				return FALSE;
			$id_field = $this->id_field;

			$sql = "SELECT count($id_field) as nb FROM $table";

			if ($where){
				$sql .= " where ";

				$all_w = array();
				$and = "";
				foreach ($where as $key => $val) {
			        $all_w[] = "$and$key=:$val";
			        $and = "AND ";
				}
				$sql .= implode(',', $all_w);
			}
			$sql .= ";";

			$data = $this->db->query($sql);
			if ($data->rowCount() == 1){
				$res = $data->fetch(PDO::FETCH_ASSOC);
				if (isset($res['nb']))
					return $res['nb'];
			}

			return FALSE;

		}

		public function _get_all($where = FALSE, $fields = FALSE, $force = FALSE){
			if (empty($this->all) || $force){
				if (!isset($this->table))
					return FALSE;
				$table = $this->table;

				$id_field = "";
				if (isset($this->id_field))
					$id_field = $this->id_field;

				$_fields = "*";
				if ($fields)
					$_fields = $fields;

				$sql = "SELECT $_fields FROM $table";

				if ($where){
					$sql .= " where ";

					$all_w = array();
					$and = "";
					foreach ($where as $key => $val) {
				        $all_w[] = "$and$key=$val";
				        $and = "AND ";
					}
					$sql .= implode(',', $all_w);
				}
				$sql .= ";";

				$data = $this->db->query($sql);
				if ($data->rowCount()){
					$tmp_res = $data->fetchAll(PDO::FETCH_ASSOC);
					if ( $tmp_res === FALSE || $tmp_res == 0)
						return FALSE;

					$res = array();
					if (!empty($id_field)){
						foreach ($tmp_res as $item) {
							$res[$item[$id_field]] = $item;
						}
					}else{
						$res = $tmp_res;
					}
				}

				$this->all = $res;
			}
			return $this->all;
		}

		public function _get($id = FALSE, $fields = FALSE, $force = FALSE){

			if ($id == FALSE)
				return FALSE;
			
			$all = $this->_get_all(FALSE, $fields, $force);

			if ($all == FALSE)
				return FALSE;

			foreach ($all as $tmp) {
				if (isset($tmp['id']) && $tmp['id'] == $id)
					return $tmp;
			}
			return FALSE;
		}

		public function _create($values = array()){
			$action = 'create';

			if (!isset($this->table))
				return FALSE;
			$table = $this->table;


			if (!isset($this->type))
				return FALSE;
			$type = $this->type;

			if (empty($values) )
			    return FALSE;


			$all_p = array();
			$all_v = array();
			foreach ($type as $k => $p) {

				if (isset($p['allow_function']) && !in_array($action, $p['allow_function']))
					continue;

			    if (isset($values[$k])){
			        $all_p[] = "$k";
			        $all_v[] = ":$k";
			    }else{
			    	if (isset($p['date']) && $p['date']){
				        $all_p[] = "$k";
				        $all_v[] = ":$k";
				        $values[$k] = date("Y-m-d H:i:s");
			    	}
			    }
			}

			if (empty($all_p))
			    return FALSE;

			$sql = "INSERT INTO $table (";
			$sql .= implode(',', $all_p);
			$sql .= ") VALUES (";
			$sql .= implode(',', $all_v);
			$sql .= ");";


			try {

			    $this->stmt = $this->db->prepare($sql);

			    foreach ($type as $k => $p) {
			        if (isset($values[$k])){
			            $this->stmt->bindParam(":$k", $values[$k], $p['pdo_param']);
			        }
			    }

			    return $this->stmt->execute();
			} catch (PDOException $e) {
				debug("INSERT INTO - " . $this->table);
			    debug($e->getMessage());die;
			    return FALSE;
			}
		}

		public function _update($values = array()){
			$action = 'update';
			
			if (!isset($this->table))
				return FALSE;
			$table = $this->table;

			if (!isset($this->type))
				return FALSE;
			$type = $this->type;

			if (isset($this->where_update) || isset($this->id_field)){
				if ( isset($this->where_update) ){
					$where = $this->where_update;
				}else{
					$where[$this->id_field] = $this->type[$this->id_field];
				}
			}else{
				return FALSE;
			}


			if (empty($values) )
			    return FALSE;


			$all_t = array();
			foreach ($type as $k => $p) {

				if (isset($p['allow_function']) && !in_array($action, $p['allow_function']))
					continue;


			    if (isset($values[$k])){
			        $all_t[] = "$k=:$k";
			    }else{
			    	if (isset($p['date']) && $p['date']){
			        	$all_t[] = "$k=:$k";
				        $values[$k] = date("Y-m-d H:i:s");
			    	}
			    }
			}

			if (empty($all_t))
			    return FALSE;

			$sql = "UPDATE $table SET ";
			$sql .= implode(',', $all_t);

			$sql .= " where ";

			$all_w = array();
			$and = "";
			foreach ($where as $k => $p) {
			    if (isset($values[$k])){
			        $all_w[] = "$and$k=:$k";
			        $and = "AND ";
			    }
			}
			$sql .= implode(',', $all_w);
			$sql .= ";";

			try {

			    $this->stmt = $this->db->prepare($sql);

			    foreach ($where as $k => $p) {
			        if (isset($values[$k])){
			        	$this->stmt->bindParam(":$k", $values[$k], $p['pdo_param']);
			        }
			    }

			    foreach ($type as $k => $p) {
			        if (isset($values[$k])){
			            $this->stmt->bindParam(":$k", $values[$k], $p['pdo_param']);
			        }
			    }

			    return $this->stmt->execute();
			} catch (PDOException $e) {
				debug("UPDATE - " . $this->table);
			    debug($e->getMessage());die;
			    return FALSE;
			}
		}

		public function _delete($values = array()){
			$action = 'delete';
			
			if (!isset($this->table))
				return FALSE;
			$table = $this->table;


			if (isset($this->where_update) || isset($this->id_field)){
				if ( isset($this->where_update) ){
					$where = $this->where_update;
				}else{
					$where[$this->id_field] = $this->type[$this->id_field];
				}
			}else{
				return FALSE;
			}


			$sql = "DELETE FROM $table WHERE ";

			$all_w = array();
			$and = "";
			foreach ($where as $k => $p) {
			    if (isset($values[$k])){
			        $all_w[] = "$and$k=:$k";
			        $and = "AND ";
			    }
			}
			$sql .= implode(',', $all_w);
			$sql .= ";";


			try {
			    $this->stmt = $this->db->prepare($sql);

			    foreach ($where as $k => $p) {
			        if (isset($values[$k])){
			        	$this->stmt->bindParam(":$k", $values[$k], $p['pdo_param']);
			        }
			    }

			    return $this->stmt->execute();
			} catch (PDOException $e) {
				debug("DELETE - " . $this->table);
			    debug($e->getMessage());die;
			    return FALSE;
			}

		}

		public function _lastInsertId()
		{
			return $this->db->lastInsertId();
		}

		public function _query($sql = false, $fetchAll = true)
		{
			if ($sql == FALSE)
				return FALSE;
			
			$data = $this->db->query($sql);
			if ($data->rowCount()){
				if ($fetchAll)
					return $data->fetchAll(PDO::FETCH_ASSOC);
				else
					return $data->fetch(PDO::FETCH_ASSOC);
			}
			return array();
		}

		public function _prepare_and_execute($sql = false, $params = array())
		{
			if ($sql == FALSE)
				return FALSE;
			
			$this->stmt = $this->db->prepare($sql);
			foreach ($params as $param) {
		        $this->stmt->bindParam(":" . $param['key'], $param['value'], $param['pdo_param']);
		    }

			return $this->stmt->execute();
		}


	
	/*------------------------------------FORM----------------------------------------*/
	
		public function _get_text_by_form_args($key = false, $value = false, $default = "")
		{
			if ($key == FALSE)
				return FALSE;

			$data = $this->_getter($key);
			if ($data == FALSE)
				return FALSE;
			
			foreach ($data as $d) {
				if ($d['value'] == $value)
					return $d['text'];
			}

			return $default;
		}

		/**
		 * Rempli une liste radio
		 * @var array { 'text' => "", 'value' => "" }
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _fill_radio($data = array()){
			$liste = array();

			 foreach ($data as $id => $tmp){
			 	$default = false;
			 	if (isset($tmp['default']))
			 		$default = $tmp['default'];

			 	$disabled = false;
			 	if (isset($tmp['disabled']))
			 		$disabled = $tmp['disabled'];

			 	$data_attr = array();
			 	if (isset($tmp['data_attr']))
			 		$data_attr = $tmp['data_attr'];

	            $liste[$id] = array(
	                'text_radio' => $tmp['text'],
	                'value' => $tmp['value'],
	                'disabled' => $disabled,
	                'data_attr' => $data_attr,
	                'checked' => $default,
	            );
	        }
	        return $liste;
		}

		public function _fill_radio_key($key = false)
		{
			if ($key == FALSE)
				return FALSE;
			
			$data = $this->_getter($key);
			if ($data == FALSE)
				return FALSE;

			return $this->_fill_radio($data);
		}
		

		/**
		 * Rempli une liste checkbox
		 * @var array { 'text' => "", 'value' => "" }
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _fill_checkbox($data = array()){
			$liste = array();
			 foreach ($data as $id => $tmp){
			 	$default = false;
			 	if (isset($tmp['default']))
			 		$default = $tmp['default'];

			 	$disabled = false;
			 	if (isset($tmp['disabled']))
			 		$disabled = $tmp['disabled'];

			 	$data_attr = array();
			 	if (isset($tmp['data_attr']))
			 		$data_attr = $tmp['data_attr'];

	            $liste[] = array(
	                'text_checkbox' => $tmp['text'],
	                'value' => $tmp['value'],
	                'disabled' => $disabled,
	                'data_attr' => $data_attr,
	                'checked' => $default,
	            );
	        }
	        return $liste;
		}	

		public function _fill_checkbox_key($key = false)
		{
			if ($key == FALSE)
				return FALSE;
			
			$data = $this->_getter($key);
			if ($data == FALSE)
				return FALSE;

			return $this->_fill_checkbox($data);
		}
		

		/**
		 * Rempli une liste select
		 * @var array { 'text' => "", 'value' => "" }
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _fill_select($data = array()){
			$liste = array();
			 foreach ($data as $id => $tmp){

			 	$disabled = false;
			 	if (isset($tmp['disabled']))
			 		$disabled = $tmp['disabled'];

			 	$selected = false;
			 	if (isset($tmp['selected']))
			 		$selected = $tmp['selected'];

			 	$data_attr = array();
			 	if (isset($tmp['data_attr']))
			 		$data_attr = $tmp['data_attr'];

	            $liste[] = array(
	                'text_select' => $tmp['text'],
	                'value' => $tmp['value'],
	                'disabled' => $disabled,
	                'data_attr' => $data_attr,
	                'selected' => $selected,
	            );
	        }
	        return $liste;
		}	

		public function _fill_select_key($key = false)
		{
			if ($key == FALSE)
				return FALSE;
			
			$data = $this->_getter($key);
			if ($data == FALSE)
				return FALSE;

			return $this->_fill_select($data);
		}


		
	/*------------------------------------SET GET----------------------------------------*/
	
		/**
		 * Enregistre la valeur d'une variable
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _setter($key, $value){
			if (!property_exists($this, $key))
				return FALSE;

			$this->{$key} = $value;
		}

		/**
		 * Retourne la valeur d'une variable
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _getter($key){
			if (!property_exists($this, $key))
				return FALSE;

			return $this->{$key};
		}


	/*------------------------------------TABLEAU----------------------------------------*/
	
		public function _only_key($data = array(), $key = false)
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]))
					$tmp[] = $val[$key];
			}
			return $tmp;
		}

		public function _only_keys($data = array(), $keys = array())
		{
			$tmp = array();
			foreach ($data as $val) {
				$tmp_key = array();
				foreach ($val as $key => $value) {
					if (in_array($key, $keys))
						$tmp_key[$key] = $value;
				}
				if (!empty($tmp_key))
					$tmp[] = $tmp_key;
			}
			return $tmp;
		}

		public function _remove_keys($data = array(), $keys = array())
		{
			$tmp = array();
			foreach ($data as $val) {
				$tmp_key = array();
				foreach ($val as $key => $value) {
					if (!in_array($key, $keys))
						$tmp_key[$key] = $value;
				}
				if (!empty($tmp_key))
					$tmp[] = $tmp_key;
			}
			return $tmp;
		}

		public function _key_as($data = array(), $key = false)
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]))
					$tmp[$val[$key]] = $val;
			}
			return $tmp;
		}

		public function _only_key_as($data = array(), $key = array(), $key_as)
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key_as]) && isset($val[$key]))
					$tmp[$val[$key_as]] = $val[$key];
			}
			return $tmp;
		}

		public function _replace_key_by($data = array(), $old = false, $new = false)
		{
			if ($old == FALSE)
				return FALSE;
			
			if ($new == FALSE)
				return FALSE;
			
			$tmp = array();
			foreach ($data as $key => $val) {
				if (isset($val[$old])){
					$val[$new] = $val[$old];
					unset($val[$old]);
				}
				$tmp[$key] = $val;
			}

			return $tmp;
		}

		public function _in_array($data = array(), $key = false, $in_array = array())
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && in_array($val[$key], $in_array))
					$tmp[] = $val;
			}
			return $tmp;
		}

		public function _condition($data = array(), $key = false, $condition = false)
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && $val[$key] == $condition)
					$tmp[] = $val;
			}
			return $tmp;
		}

		public function _condition_in_array($data = array(), $key = false, $condition = array())
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && in_array($val[$key], $condition))
					$tmp[] = $val;
			}
			return $tmp;
		}

		public function _condition_val_in_array($data = array(), $key = false, $condition = false)
		{
			$tmp = array();
			foreach ($data as $val) {

				if (isset($val[$key]) && in_array($condition, $val[$key]))
					$tmp[] = $val;
			}
			return $tmp;
		}

		/**
		 * Recherche une clé/valeur pour chaque item
		 * Si return est spécifié, en retour item[$retrun]
		 * si $return == FALSE, on retroune l'item complet
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _find_only_key_condition($data = array(), $key = false, $value = false, $return = false)
		{
			foreach ($data as $item) {

				if (isset($item[$key]) && $item[$key] == $value){
					if ($return && isset($item[$return]))
						return $item[$return];
					return $item;
				}
			}
			return FALSE;
		}

		public function _is_empty($data = array(), $key = false)
		{
			$tmp = array();

			foreach ($data as $val) {
				if (is_null($val['done']))
					$tmp[] = $val;

				if (isset($val[$key]) && empty($val[$key]))
					$tmp[] = $val;
			}
			return $tmp;
		}

		public function _not_empty($data = array(), $key = false)
		{
			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && !empty($val[$key]))
					$tmp[] = $val;
			}
			return $tmp;
		}

		public function _group_by($data = array(), $key = false)
		{

			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && !empty($val[$key]))
					$tmp[$val[$key]][] = $val;
			}
			return $tmp;

		}

		public function _group_by_and_key_as($data = array(), $key = false, $key_as)
		{

			$tmp = array();
			foreach ($data as $val) {
				if (isset($val[$key]) && !empty($val[$key]))
					if (isset($val[$key_as]))
						$tmp[$val[$key]][$val[$key_as]] = $val;
			}
			return $tmp;

		}

		public function _merge_by_key($a = array(), $b = array(), $key = false, $prefix = "")
		{
			
			$tmp = array();
			foreach ($a as $key_a => $val_a) {
				$tmp_a = $val_a;
				if (isset($val_a[$key])){
					foreach ($b as $key_b => $val_b) {
						if (isset($val_b[$key]) && $val_b[$key] == $val_a[$key]){
							$val_b = $this->_add_prefix($val_b, $prefix);
							$tmp_a = array_merge($val_a, $val_b);
						}
					}
				}
				$tmp[] = $tmp_a;
			}
			return $tmp;
		}

		/**
		 * Merge 2 tableaux sans doublon
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _merge_by_key_without_double($a = array(), $b = array(), $key = false)
		{
			if ($key == FALSE)
				return $a;

			$tmp_in_array = $this->_only_key($a, $key);
			if (empty($tmp_in_array)){

				foreach ($b as $tmp_b) {
					if (isset($tmp_b[$key])){
						$a[] = $tmp_b;
					}
				}

			}else{

				foreach ($b as $tmp_b) {
					if (isset($tmp_b[$key]) && !in_array($tmp_b[$key], $tmp_in_array)){
						$a[] = $tmp_b;
					}
				}
			}
			return $a;
		}

		public function _implode($data = array(), $separator = ",")
		{
			$tmp = array();
			foreach ($data as $d) {
				$tmp[] = "'" . $d . "'";
			}
			return implode($separator, $tmp);
		}

		public function _implode_by_key($data = array(), $key = false, $separator = ",")
		{
			if ($key == FALSE)
				return FALSE;
			
			$tmp = array();
			foreach ($data as $d) {
				if (isset($d[$key]))
					$tmp[] = "'" . $d[$key] . "'";
			}
			return implode($separator, $tmp);
		}

		public function _add_prefix($data = array(), $prefix = "_")
		{
			$new_data = array();
			foreach ($data as $k => $d) {
				$new_key = $prefix . $k;
				$new_data[$new_key] = $d;
			}
			return $new_data;
		}


		public function _get_names($data = array(), $key = 'name')
		{
			foreach ($data as $k => $val) {
				$data[$k]['name'] = $this->get_all_name($val);
			}
			return $data;
		}

	/*------------------------------------ERROR----------------------------------------*/

		/**
		 * Vérifie si il y a un message d'erreur
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _has_message_error(){
			if (empty($this->error_msg))
				return FALSE;
			return TRUE;
		}

		/**
		 * Retourne le message d'erreur
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _get_message_error(){

			return $this->error_msg;
		}

		/**
		 * Préviens l'administrateur d'une erreur importante
		 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		public function _report_error(){}

		public function _show_error($e)
		{
			$info = debug_backtrace();
			debug($info);die;
		}

	
	/*------------------------------------DATE----------------------------------------*/
	
		/**
		 * Retourne la date et heure au format MYSQL en francais
		 * @author        Jonovan <jonovan.vonghes@ac-polynesie.pf>
		 */
		function _get_datetime_fr($date_msql, $timeZone = false)
		{
		    $date = strtotime($date_msql);
		    $format = htmlentities($this->format_datetime, ENT_QUOTES, 'utf-8');

		    if ($timeZone) {
		        $datetime = new DateTime(date('Y-m-d\TH:i:s.u', $date));
		        $datetime->setTimeZone(new DateTimeZone($timeZone));

		        $date = strtotime($datetime->format("Y-m-d\TH:i:s.u"));
		    }
		    return utf8_encode(strftime($format, $date));
		}

		/**
		 * Retourne la date au format MYSQL en francais
		 * @author        Jonovan <jonovan.vonghes@ac-polynesie.pf>
		 */
		function _get_date_fr($date_msql, $timeZone = false)
		{
		    $date = strtotime($date_msql);
		    $format = htmlentities($this->format_date, ENT_QUOTES, 'utf-8');

		    if ($timeZone) {
		        $datetime = new DateTime(date('Y-m-d\TH:i:s.u', $date));
		        $datetime->setTimeZone(new DateTimeZone($timeZone));

		        $date = strtotime($datetime->format("Y-m-d\TH:i:s.u"));
		    }
		    return utf8_encode(strftime($format, $date));
		}

		public function _get_date_simple($date_mysql, $timeZone = false)
		{
		    $date = strtotime($date_mysql);

			if ($timeZone){

		        $datetime = new DateTime($date_mysql);
		        $datetime->setTimeZone(new DateTimeZone($timeZone));

		        $date = strtotime($datetime->format("Y-m-d\TH:i:s.u"));

			}
			
			return date($this->format_date_simple, $date);
		}


	
	/*------------------------------------MISC----------------------------------------*/
	


		/**
		 * Nettoie les nom prénoms 
		 * $names = array(
		 *    'nomp' => 'nomp',
		 *    'nomu' => 'nomu',
		 *    'prenom' => 'prenom',
		 * );
		 * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		function get_all_name($all_names = array()){

		    if (empty($all_names))
		        return '';

		    $res = "";

		    $has_nomp = false;
		    if ($all_names['nomp'] && !empty($all_names['nomp'])){
		        $has_nomp = true;
		        $tmp_np = array();
		        foreach (explode(' ', $all_names['nomp']) as $n) {
		            $tmp_np[] = mb_strtoupper($n);
		        }
		        $res .= implode(' ', $tmp_np);
		    }

		    if ($all_names['nomp'] && !empty($all_names['nomu'])){
		        
		        $tmp_nu = array();

		        if ($has_nomp)
		            $tmp_nu[] = '(';

		        foreach (explode(' ', $all_names['nomu']) as $n) {
		            $tmp_nu[] = mb_strtoupper($n);
		        }

		        if ($has_nomp)
		            $tmp_nu[] = ')';

		        $res .= ' '.implode(' ', $tmp_nu);
		    }

		    if ($all_names['prenom']){

		        $tmp_p = array();
		        foreach (explode(' ', $all_names['prenom']) as $n) {
		            $ucf = mb_strtoupper(substr($n, 0, 1));
		            $last = mb_strtolower(substr($n, 1));
		            $tmp_p[] = $ucf . $last;
		        }
		        $res .= ' '.implode(' ', $tmp_p);
		    }

		    return trim($res);

		}

		/**
		 * Nettoie les nom prénoms 
		 * $names = array(
		 *    'nomp' => 'nomp',
		 *    'nomu' => 'nomu',
		 *    'prenom' => 'prenom',
		 * );
		 * @author         Jonovan <jonovan.vonghes@ac-polynesie.pf>
		*/
		function get_simple_name($all_names = array()){


		    if (empty($all_names))
		        return '';

		    $res = "";

		    $has_nomp = false;
		    if (isset($all_names['nomp']) && !empty($all_names['nomp'])){
		        $has_nomp = true;
		        $tmp_np = array();
		        foreach (explode(' ', $all_names['nomp']) as $n) {
		            $tmp_np[] = mb_strtoupper($n);
		        }
		        $res .= implode(' ', $tmp_np);
		    }

		    if (!$has_nomp && isset($all_names['nomu']) && !empty($all_names['nomu'])){
		        
		        $tmp_nu = array();

		        foreach (explode(' ', $all_names['nomu']) as $n) {
		            $tmp_nu[] = mb_strtoupper($n);
		        }

		        $res .= implode(' ', $tmp_nu);
		    }

		    if (isset($all_names['prenom']) && !empty($all_names['prenom'])){

		        $tmp_p = array();
		        foreach (explode(' ', $all_names['prenom']) as $n) {
		            $ucf = mb_strtoupper(substr($n, 0, 1));
		            $last = mb_strtolower(substr($n, 1));
		            $tmp_p[] = $ucf . $last;
		        }
		        $res .= ' '.implode(' ', $tmp_p);
		    }

		    return trim($res);

		}

}

