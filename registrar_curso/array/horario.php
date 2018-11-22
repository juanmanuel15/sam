<?php
	
	require '../datos.php';
	require 'funcion_horario.php';
	//include '../id.php';



	 $consulta = queryHorario( $id_horario, $fecha, $hora_inicial, $hora_final, $id_curso);

	if(is_array($consulta)) {

		$consulta = array_values($consulta);

		for($i=0; $i<count($consulta); $i++)
			echo $consulta [$i] . "<br>";

	} else {

		echo $consulta;

	}
	

	 //consultaHorario();



	/**/

?>