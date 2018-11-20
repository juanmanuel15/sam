<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$material = "Display 7 segmentos";
	$cantidad = 10;
	$nombre_req = "Presente institucional";
	$id_curso = 2;

	$conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	}else {


		$query = "SELECT * FROM requerimientos WHERE nombre_req = '$nombre_req' ";
		#echo "$query";

		$consulta = mysqli_query($conn,$query);

		while ($fila = mysqli_fetch_array($consulta)) {
				echo ($id_req = $fila["id_req"]);
		}

		$query = "INSERT INTO req_curso (id, id_req, id_curso) VALUES (NULL, $id_req, $id_curso)";
		echo ($query);
		mysqli_query($conn,$query);

		

	}

?>