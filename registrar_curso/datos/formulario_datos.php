<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";

	$conn = mysqli_connect($host, $user, $password, $db);
	mysqli_query($conn, "SET NAMES 'utf8'");
	if(!$conn){

	}else {

		$query_lugar = "SELECT * FROM lugar";
		$res_lugar = mysqli_query($conn, $query_lugar);	

		$query_req = "SELECT nombre_req FROM requerimientos";
		$res_req = mysqli_query($conn, $query_req);

		$query_tipoActividad = "SELECT * FROM tipo_actividad";
		$tipo_Actividad = mysqli_query($conn, $query_tipoActividad);


		mysqli_close($conn);	
	}


?>