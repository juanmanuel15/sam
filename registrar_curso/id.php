<?php 

date_default_timezone_set('America/Mexico_City');

	function valorID($cadena){
		$cadena = substr(strtolower(str_ireplace(" ", "", $cadena)),0,9).date("d").date("m").date("y");

		return $cadena;
	}

	function lugar_id($cadena){
		$cadena = substr(substr(strtolower(str_ireplace(" ", "", $cadena)),0,9));

		return $cadena;
	}
?>