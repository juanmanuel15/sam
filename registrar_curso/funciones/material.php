<?php
	
	function material ($nombre_material, $cantidad){

		if (is_array($nombre_material) && is_array($cantidad)) {

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


			
		} else {

			$insertar .= "(NULL, '$nombre_material', '$hora_inicial', '$cantidad', '$id_curso')";
		}

		return $insertar;
			


	}
	
?>