<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";

	$conn = mysqli_connect($host, $user, $password, $db);
	mysqli_query($conn, "SET NAMES 'utf8'");
	if(!$conn){

	}else {

		$query_lugar = "SELECT * FROM lugar ORDER BY nombre_lugar ASC";
		$res_lugar = mysqli_query($conn, $query_lugar);	

		$query_req = "SELECT * FROM requerimientos ORDER BY nombre_req ASC";
		$res_req = mysqli_query($conn, $query_req);

		$query_tipoActividad = "SELECT * FROM tipo_actividad ORDER BY nombre_tipo_actividad ASC";
		$tipo_Actividad = mysqli_query($conn, $query_tipoActividad);


		mysqli_close($conn);	
	}


?>