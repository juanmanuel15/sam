<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$material = "Display 7 segmentos";
	$cantidad = 10;

	$conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	}else {

		$consulta = "SELECT * FROM curso  where titulo ='Java para principiantes'";

		$resultado = mysqli_query($conn,$consulta);
		echo "$consulta";

		while($fila= mysqli_fetch_array($resultado)){

			$id_curso = $fila["id_curso"];
		}

		if(mysqli_num_rows($resultado) == 1){

			if (!empty($material)) {
				$query = "INSERT INTO material (id_mat, nombre_material, cantidad, id_curso) VALUES (NULL,'$material', $cantidad, $id_curso)";
				echo "$query";
				mysqli_query($conn, $query);


				echo "Se insertaron los valores.";
			}
			
		}else {
			echo "<br>" ."No es igual a 1";
		}
		
		
	}


?>