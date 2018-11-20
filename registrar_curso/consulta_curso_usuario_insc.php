<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";

	$id_curso = 2;
	$nCuenta = 1730711;

	 $conn = mysqli_connect($host,$user, $pass, $db);

	if (!$conn) {
		
		#colocar los errores en la base de datos.
		
	}else {

		$insertar = "INSERT INTO curso_usuario_insc (id, nCuenta, id_curso) VALUES (NULL, $nCuenta, $id_curso )";

		#echo "$insertar";
		
		
		if (mysqli_query($conn,$insertar)) 
			echo "Valores Insertados";
		else
			echo "Valores no insertados";
	}

?>