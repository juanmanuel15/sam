<?php
	
	
	$host = "192.168.1.130";
	$user = "root";
	$pass= "";
	$db = "sam";


	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn){
		echo "No se pudo conectar a la base";
	}else {
		echo "Se logro la conexion";
	}



?>