<?php
	
	require '../datos/datos_uno.php';
	//include '../id.php';

	$insertar = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final,id_curso) VALUES ";


	if(is_array($fecha) && is_array($hora_inicial) && is_array($hora_final)){

		$fecha = array_values($fecha);
		$hora_final = array_values($hora_final);
		$hora_inicial = array_values($hora_inicial);


		

		$i = 0;

			 while ($i < count($fecha)){

			 	if($i == count($fecha)-1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$fecha[$i]',";
				 	$insertar .= " '$hora_inicial[$i]',";
				 	$insertar .= " '$hora_final[$i]', ";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "(NULL, ";
				 	$insertar .= " '$fecha[$i]',";
				 	$insertar .= " '$hora_inicial[$i]',";
				 	$insertar .= " '$hora_final[$i]', ";
				 	$insertar .= " '$id_curso' ". ") ,";

			 	}

			 	

			 	$i++;
			 	

			 	
			 }

			 echo $insertar;


		
	}else {

		echo $insertar .= "(NULL, '$fecha', '$hora_inicial', '$hora_final', '$id_curso')";

	}

?>