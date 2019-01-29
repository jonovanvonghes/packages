<?php 

namespace Jonovanvonghes\Packages;
use Jonovanvonghes\Packages\JvSession;

/**
 * Class JvAlert
 */

/**
 * Toutes les fonctions concernant les alerts (success, warning, error)
 * @author Jonovan <jonovan.vonghes@ac-polynesie.pf>
 * @version 1.2
 */
Class JvAlert {

	protected $jv_success = array();
	protected $jv_info = array();
	protected $jv_warning = array();
	protected $jv_error = array();

	protected $jv_session = null;

	protected $name = FALSE;


	public function __construct( $name = FALSE ){

		if ( $name === FALSE )
			$name = 'JvAlert';

		$this->name = $name;

		$this->jv_session = new JvSession();
		$this->get_from_session();
	}

	public function get_from_session(){

		if (!isset($this->jv_session))
			die('Need Class JV_Session to work properly.');

		$session = $this->jv_session->read($this->name);

		if ($session === FALSE) return TRUE;
		else $session = json_decode($session, TRUE);

		foreach (array('error', 'warning', 'success', 'info') as $type) {
			if (isset($session[$type]))
				$this->{'jv_'.$type} = $session[$type];
		}
		$this->jv_session->remove($this->name);
	}

	public function put_in_session(){

		foreach (array('error', 'warning', 'success', 'info') as $type) {
			if ($this->{'has_'.$type}())
				$session[$type] = $this->{'jv_'.$type};
		}

		$this->jv_session->write($this->name,json_encode($session));
	}

	public function has_success($key = false){
		if ($key){
			if (isset($this->jv_success[$key]))	
				return TRUE;
			return FALSE;
		}
		if (empty($this->jv_success))
			return FALSE;
		return TRUE;
	}

	public function has_info($key = false){
		if ($key){
			if (isset($this->jv_info[$key]))	
				return TRUE;
			return FALSE;
		}
		if (empty($this->jv_info))
			return FALSE;
		return TRUE;
	}

	public function has_warning($key = false){
		if ($key){
			if (isset($this->jv_warning[$key]))	
				return TRUE;
			return FALSE;
		}
		if (empty($this->jv_warning))
			return FALSE;
		return TRUE;
	}

	public function has_error($key = false){
		if ($key){
			if (isset($this->jv_error[$key]))	
				return TRUE;
			return FALSE;
		}
		if (empty($this->jv_error))
			return FALSE;
		return TRUE;
	}

	public function has_any(){
		if ($this->has_error())
			return 'error';
		if ($this->has_warning())
			return 'warning';
		if ($this->has_info())
			return 'info';
		if ($this->has_success())
			return 'success';
		return FALSE;
	}

	public function add($key = '', $msg = '', $type = 'error'){
		
		if (empty($key) || empty($msg))
			return FALSE;

		if (empty($type))
			$type = 'error';

		switch ($type) {
			case 'success':
				$this->jv_success[$key] = $msg;
				break;

			case 'info':
				$this->jv_info[$key] = $msg;
				break;
			
			case 'warning':
				$this->jv_warning[$key] = $msg;
				break;

			case 'error':
			default:
				$this->jv_error[$key] = $msg;
				break;
		}
		return TRUE;
	}

	public function remove($key = '', $type = 'error'){
		if (empty($key))
			return FALSE;

		if (empty($type))
			$type = 'error';

		switch ($type) {
			case 'success':
				if (isset($this->jv_success[$key]))
					unset($this->jv_success[$key]);
				break;

			case 'info':
				if (isset($this->jv_info[$key]))
					unset($this->jv_info[$key]);
				break;

			case 'warning':
				if (isset($this->jv_warning[$key]))
					unset($this->jv_warning[$key]);
				break;
			
			case 'error':
			default:
				if (isset($this->jv_error[$key]))
					unset($this->jv_error[$key]);
				break;
		}
		return TRUE;
	}

	public function remove_all($type = ''){

		if (!empty($type) && in_array($type, array('error','warning','success', 'info'))){
			$this->{'jv_'.$type} = array();
		}
		else{
			foreach (array('error', 'warning', 'success', 'info') as $tmp) {
				if ($this->{'has_'.$tmp}())
					$session[$tmp] = $this->{'jv_'.$tmp};
			}
		}

	}

	public function show($type = ''){
		if (!in_array($type, array('error', 'warning', 'success', 'info'))){
			if (!$type = $this->has_any()) return TRUE;
		}else{
			if (!$this->{'has_'.$type}())
				return TRUE;
		}

		switch ($type) {
			case 'success':
				$alert_type = 'success';
				$alert_msg = '<i class="fa fa-check"></i>';
				break;

			case 'info':
				$alert_type = 'info';
				$alert_msg = '<i class="fa fa-info-circle"></i>';
				break;

			case 'warning':
				$alert_type = 'warning';
				$alert_msg = '<i class="fa fa-exclamation-circle"></i>';
				break;
			
			default:
			case 'error':
				$alert_type = 'danger';
				$alert_msg = '<i class="fa fa-exclamation-triangle"></i>';
				break;
		}
		ob_start();

		?>
			<div class="jv_errors alert alert-<?php echo $alert_type; ?> alert-dismissible" role="alert"> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<?php foreach ($this->{'jv_'.$type} as $key => $msg) {
				echo '<strong>' . $alert_msg . '</strong> ' . $msg . '<br/>';
			} ?>
			</div>
		<?php echo ob_get_clean();
	}

	public function debug(){

		$debug['alert']['success'] = $this->jv_success;
		$debug['alert']['warning'] = $this->jv_warning;
		$debug['alert']['error'] = $this->jv_error;

		return $debug;
	}
}

?>