<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$id_curso = 2;
	$nombre_material = "Display 7 segmenetos";
	$cantidad = 4;

	
	#Cambiar por la variable post correspondiente
	$nombre_grupo_invitado = "LIA2";

	 $conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	}else {

		$insertar = "INSERT INTO material (id_mat, nombre_material, cantidad, id_curso) VALUES (NULL,'$nombre_material', $cantidad,$id_curso )";
		
		if (mysqli_query($conn,$insertar)) 
			echo "Valores Insertados";
		else
			echo "Valores no insertados";
		
	}	


?>