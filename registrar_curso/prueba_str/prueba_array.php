<?php
	
		#require '../datos.php';
		


		
		$fechas = array ("2018-11-19", "2018-11-20", "2018-11-21", "2018-11-22" , "2018-11-23");
		$hora_inicial  = array ("11:00:00", "11:00:00", "11:00:00", "11:00:00", "11:00:00"); 

		$hora_final  = array ("13:00:00", "13:00:00", "13:00:00", "13:00:00", "13:00:00"); 

		$fechas = array_values($fechas);
		$hora_inicial = array_values($hora_inicial);
		$hora_final = array_values($hora_final);

		

		for ($i = 0; $i<5; $i++ ) { 

			echo $fechas[$i] . " => " . $hora_inicial[$i] . " => " . $hora_final[$i] . "<br>";		
		}
		

		/*foreach($fechas as &$fecha) {

			echo $consulta = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final) VALUES ($id_horario, '$fecha', '$hora_inicial', '$hora_final')". "<br>";

		}*/



		/*$array = array(1, 2, 3, 4);
		foreach ($array as $valor) {
		   print_r( $valor = $valor * 2);
		}
		// $array ahora es array(2, 4, 6, 8)
		unset($valor); // rompe la referencia con el último elemento*/


?>