<?php
	
	require '../datos/datos.php';
	require 'funcion_horario.php';

	$conn = mysqli_connect($host,$user, $password, $db);

	if (!$conn) {
		
		
		
	} else {

		if (is_array($nombre_req)){

			$nombre_req = array_values($nombre_req);
			$id_array = array();
			$req_array = array();
			$id_curso;
			//print_r($nombre_req);
			$query ="";
			$size_req = count($nombre_req);

			$query = "SELECT id_req FROM requerimientos WHERE ";
			$i = 0;
			while (	$i < count($nombre_req)) {

				if($i == count($nombre_req)-1){
					$query .= " nombre_req = '"; 
					$query .= $nombre_req[$i];
					$query .= "'";
					

				}else {
					$query .= " nombre_req = '";
					$query .= $nombre_req[$i];
					$query .= "'";
					$query .= " OR ";
				}



				$i++;
			}

			$result = mysqli_query($conn,$query);

			foreach ($result as $key ) {
			 	
			 	$id_ = $key['id_req'];
			 	array_push($id_array, $id_);

			 }

			 	$insertar = "INSERT INTO req_curso (id, id_req, id_curso) VALUES ";
			 $i =0;
			 while ($i < count($id_array)){

			 	if($i == count($id_array)-1){
			 		$insertar .= "(NULL, ";
				 	$insertar .= $id_array[$i] . ", ";
				 	$insertar .= " '$id_curso' ". ")";

			 	} else {
			 		$insertar .= "(NULL, ";
			 	$insertar .= $id_array[$i] . ", ";
			 	$insertar .= "'$id_curso '". "),";

			 	}

			 	

			 	$i++;
			 	

			 	
			 }
			 $insertar .= ";";


			 echo $insertar;


			 

			





				
					


			
				

			//echo $query;

			/*$cuenta ="";

			/*for ($i = 0; $i<=5; $i++){
				for($j = 0; $j<=5; $j++){

					$cuenta .= "$i";
					$cuenta .= "+ $j =";
					$cuenta .= $i+ $j;
					$cuenta .= "<br>";
				}
				
			}

			echo $cuenta;


			
			/*for($i=0; $i<$size_req-1; $i++){
				if($i!== 0){
					$query .= "' nombre_req= '";
					$query .= "' AND '";
					$query .= $nombre_req[$i];

				}else {

					$query .= $nombre_req[$i];
					$query .= "' AND '";
					$query .= $nombre_req[$i+1];

				}

				$query .= "'";

				echo $query;




			}
				
			



			 /*

			 $res = mysqli_query($conn, $req);
			 
			 foreach ($res as $key ) {
			 	
			 	$id_ = $key['id_req'];
			 	array_push($id_array, $id_);
			 	$req_ = $key['nombre_req'];
			 	array_push($req_array, $req_);
			 }
			 
			 //print_r($id_array);
			 //print_r($req_array);
			 
			 $requerimientos = array ($id_array, $req_array);

			 print_r(array_intersect($requerimientos, $nombre_req));*/


			 	
			 
		}
		
	}

	

	
	



?>