<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$id_curso = 2;
	$id_horario = 20;
	$lugar = "Sala de computo 1";	

	$conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	} else {

		$query = "SELECT id_lugar FROM lugar WHERE nombre_lugar = '$lugar'";
		$consulta = mysqli_query($conn,$query);

		while($fila = mysqli_fetch_array($consulta)){
			echo ($id_lugar = $fila["id_lugar"]);
		}

		if (mysqli_num_rows($consulta)>1) {
			$query = "INSERT INTO horario_lugar (id, id_horario, id_lugar) VALUES (NULL, '$id_horario', $id_lugar)";

			if (mysqli_query($conn,$query)) 
				echo "Valores insertados";
			else 
				echo "Valores no insertados";
		} else {
			echo "Valores no insertados";
		}

		
	}

?>