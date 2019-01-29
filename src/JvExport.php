<?php 

namespace Jonovanvonghes\Packages;

/**
* JvExport
*/
class JvExport
{
	
	function __construct(){
		
	}

	/**
	 * Prépare les lignes du fichier CSV (Titre + donnée)
	 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
	*/
	public function prepare($data, $utf8 = true){


		$text_title = array();
		$tmp_text_title = array();
		// $tmp_text_title[] = 'Etat du dossier';

		foreach ($data as $id_pers => $val) {
			foreach ($val as $key => $tmp) {
				if (!in_array($key, $text_title)){
					$text_title[] = $key;
					if ($utf8)
						$tmp_text_title[] = utf8_decode($key);
					else
						$tmp_text_title[] = mb_convert_encoding( $key, 'UTF-16LE', 'UTF-8');
				}
			}
		}

		$export_data = array();
		$export_data[] = $tmp_text_title;
		foreach ($data as $id_pers => $val) {
			$tmp = array();
			foreach ($text_title as $title) {
				// if (isset($val[$title])){
				if ($utf8){
					$tmp[] = utf8_decode(html_entity_decode($val[$title], ENT_QUOTES, 'UTF-8'));
					// $tmp[] = $val[$title];
					// $tmp[] = utf8_encode($val[$title]);
				}else{
					$enc = html_entity_decode($val[$title], ENT_QUOTES, 'UTF-8');
					$tmp[] = mb_convert_encoding( $enc, 'UTF-16LE', 'UTF-8');
				}
				// }
			}
			$export_data[] = $tmp;
		}
		// debug($text_title);
		// debug($export_data);die;

		return $export_data;
	}

	/**
	 * EXPORT
	 * @author 		Jonovan <jonovan.vonghes@ac-polynesie.pf>
	*/
	function export($data, $filename = "export.csv", $delimiter=";"){
		header("Content-type: application/vnd.ms-excel; charset=UTF-8");
	    header('Content-Disposition: attachment; filename="'.$filename.'";');

	    $f = fopen('php://output', 'w');
	    foreach ($data as $line) {
	        fputcsv($f, $line, $delimiter);
	    }
	}
}