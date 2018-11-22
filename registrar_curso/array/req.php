<?php
	
	require '../datos.php';
	require 'funcion_horario.php';

	$conn = mysqli_connect($host,$user, $password, $db);

	if (!$conn) {
		
		
		
	} else {

		if (is_array($nombre_req)){

			$nombre_req = array_values($nombre_req);
			$id_array = array();
			$req_array = array();
			//print_r($nombre_req);



			 $req = "SELECT * FROM requerimientos";

			 $res = mysqli_query($conn, $req);
			 
			 foreach ($res as $key ) {
			 	
			 	$id_ = $key['id_req'];
			 	array_push($id_array, $id_);
			 	$req_ = $key['nombre_req'];
			 	array_push($req_array, $req_);
			 }
			 
			 print_r($id_array);
			 print_r($req_array);
		}
		
	}

	

	
	



?>