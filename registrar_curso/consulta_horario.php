<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$id_curso = 2;
	$fecha = "2018-11-22";
	$hora_inicial = "07:00:00";
	$hora_final = "09:00:00";

	$conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	} else {

		$insertar = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final) VALUES (NULL,'$fecha', '$hora_inicial', '$hora_final')";

		if(mysqli_query($conn, $insertar)){
			echo "Valores Insertados";
		}else {
			echo "Valores no insertados";
		}

		$consulta = "SELECT id_horario FROM horario WHERE fecha= '$fecha' AND hora_inicio = '$hora_inicial' AND hora_final = '$hora_final' ";

		$consulta = mysqli_query($conn, $consulta);

		if (mysqli_num_rows($consulta) == 1) {

			while ($fila = mysqli_fetch_array($consulta)) {
				echo ($id_horario = $fila["id_horario"]);
			}

			$insertar = "INSERT INTO curso_horario(id, id_horario, id_curso) VALUES (NULL, $id_horario, $id_curso)";

			echo($insertar);

			if(mysqli_query($conn, $insertar)) 
				echo "Valores insertados correctamente";
			else
				echo "Valores insertados correctamente";

		}else {
			echo "Existen más datos";
		}
		





	}

?>