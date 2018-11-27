<?php

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";

	$conn = mysqli_connect($host, $user, $password, $db);

	if(!$conn){



	}else {

		$query = "SELECT nombre_lugar FROM lugar";

		$res = mysqli_query($conn, $query);


		
	}


?>