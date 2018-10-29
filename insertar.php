<?php
	include 'base.php';
	include 'datos_registro.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos</title>
</head>
<body>

	<?php

		

		$conexion = mysqli_connect($host,$user,$password, $base);

		if(!$conexion){
				echo "Conexión No exitosa";
		}else {
			$insertar = "INSERT INTO usuario(id_cuenta,nombre,apellidoP,apellidoM,telefono,email,usuario,pass) VALUES ('$id','$nombre', '$apellidoP', '$apellidoM', '$tel', '$email','$usu','$pass' )";

			$insertar_tabla_usuarios = "INSERT INTO usuarios(usu, pass) VALUES ('$usu', '$pass')";

			mysqli_query($conexion,$insertar);
			mysqli_query($conexion,$insertar_tabla_usuarios);
			mysqli_close($conexion);
		}
		/*echo "$nombre". "<br>" ;
		echo "$apellidoP" . "<br>";
		echo "$apellidoM" . "<br>";
		echo "$email" . "<br>";
		echo  "$usu" . "<br>";
		echo  "$id". "<br>";
		echo  "$pass". "<br>";
		echo  "$tel" . "<br>";*/


	?>
	
</body>
</html>