<?php
	
	require '../datos/datos.php';
	require 'funcion_horario.php';
	//include '../id.php';

	$id_curso;
	$insertar = "INSERT INTO material (id_mat, nombre_material, cantidad, id_curso) VALUES ";


	if(is_array($nombre_material) && is_array($cantidad)) {

		$nombre_material = array_values($nombre_material);
		$cantidad = array_values($cantidad); 

		$i = 0;

			 while ($i < count($cantidad)){

			 	if($i == count($cantidad) - 1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$nombre_material[$i]',";
				 	$insertar .= " $cantidad[$i],";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$nombre_material[$i]',";
				 	$insertar .= " $cantidad[$i],";
				 	$insertar .= " '$id_curso' ),";

			 	}

			 	

			 	$i++;
			 	

			 	
			 }

			 echo $insertar;


		
	}else {

		echo $insertar .= "(NULL, '$nombre_material', '$hora_inicial', '$cantidad', '$id_curso')";

	}

	
	

	 //consultaHorario();



	/**/

?>