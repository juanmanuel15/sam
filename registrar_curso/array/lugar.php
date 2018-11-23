<?php
	
	require '../datos/datos_uno.php';
	require 'funcion_horario.php';
	//include '../id.php';

	$id_curso;

	$conn = mysqli_connect($host,$user, $password, $db);

	if (!$conn) {
				
		
	} else {

	$query = "SELECT id_horario FROM horario WHERE id_curso = '$id_curso'";

	$id_horario = mysqli_query($conn, $query);

	$id_horario = mysqli_fetch_array($id_horario);

	if(is_array($id_horario)){


		 if (is_array($lugar)){

			$lugar = array_values($lugar);
			$req_array = array();
			$id_curso;
			//print_r($nombre_req);
			$query ="";	
			$id_lugar = array();
			$consulta = array();		

			for ($i=0; $i <count($lugar) ; $i++) {

				array_push($consulta , "SELECT id_lugar FROM lugar WHERE nombre_lugar = '$lugar[$i]'");
			 	
			}

			
			for ($i=0; $i <count($lugar) ; $i++) {

			//print_r($consulta);

				$result = mysqli_fetch_array(mysqli_query($conn, $consulta[$i]));
				array_push($id_lugar, $result['id_lugar']);

				
			}


			#print_r($id_lugar);*/



			$id_curso = "SELECT id_horario FROM horario WHERE id_curso = '$id_curso'";
			

			$id_horario= mysqli_query($conn, $id_curso);

			$id_horario = array_values(mysqli_fetch_array($id_horario));

			print_r($id_horario);





		/*$id_horario = array_values($id_horario);

		$insertar = "INSERT INTO horario_lugar (id, id_horario, id_lugar) VALUES ";

		$i = 0;

			while ($i < count($id_horario)){

			 	if($i == count($id_horario)-1){
			 		$insertar .= "(NULL, ";
				 	$insertar .= $id_horario[$i] . " , ";
				 	$insertar .= " '$id_lugar[$i]' ". ")";

			 	} else {
			 		$insertar .= "(NULL, ";
			 	$insertar .= $id_horario[$i] . " , ";
			 	$insertar .= " '$id_lugar[$i]' ". ")";

			 	}

			 	

			 	$i++;
			 	

			 	
			 }

			 print_r($id_horario);


			
		


	

	/*if(is_array($lugar)) {

		$lugar = array_values($lugar);
		 

		$i = 0;

			 while ($i < count($lugar)){

			 	if($i == count($lugar) - 1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$lugar[$i]',";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$lugar[$i]',";
				 	$insertar .= " '$id_curso' ),";

			 	}

			 	

			 	$i++;
			 	

			 	
			 }

			 echo $insertar;


		
	}else {

		//echo $insertar .= "(NULL, '$nombre_material', '$hora_inicial', '$cantidad', '$id_curso')";

	}*/

	
	}
}
}

	 //consultaHorario();



	/**/

?>