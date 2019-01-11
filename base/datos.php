<?php
	include "conexion.php";
	include "datos_base.php";
	//header('Content-type: application/json; charset=utf-8');

	$conexion = mysqli_connect($host, $user, $password, $db);

	if(!$conexion)
		echo $error = "No se pudo conectar";
	else {

		$query = "SELECT * FROM requerimientos";
		print_r(consultar($conexion, $query));
	
	}


		

?>	