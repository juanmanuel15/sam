<?php 
	
	function queryHorario($id_horario, $fecha, $hora_inicial, $hora_final, $id_curso){

		
		$id_horario = "NULL";
		

		if (is_array($fecha) AND is_array($hora_inicial) AND is_array($hora_final)){

			$fecha = array_values($fecha);
			$hora_inicial = array_values($hora_inicial);
			$hora_final = array_values($hora_final);
			$consulta = array();



			for ($i=0; $i <count($fecha) ; $i++) {

				array_push($consulta , "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final) VALUES ($id_horario, ' $fecha[$i]', '$hora_inicial[$i]', '$hora_final[$i]', ' $id_curso')");
			 	
			}
			
		

		} else {

			$consulta = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final) VALUES ($id_horario, ' $fecha', '$hora_inicial', '$hora_final', ' $id_curso')";
		}


		return $consulta;

		
	}

	function queryReq(){

	}

	

?>