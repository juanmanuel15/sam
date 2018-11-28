<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";

	$conn = mysqli_connect($host, $user, $password, $db);

	if(!$conn){

	}else {

		$query_lugar = "SELECT * FROM lugar";
		$res_lugar = mysqli_query($conn, $query_lugar);	

		$query_req = "SELECT nombre_req FROM requerimientos";
		$res_req = mysqli_query($conn, $query_req);



		mysqli_close($conn);	
	}


?>