<?php 
	include 'base.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta</title>
</head>
<body>
	
	<?php

			$usuario = $_POST['usu'];
			$pass = $_POST['pass'];

			$conexion = mysqli_connect($host, $user, $password, $base)

			if (!$conexion) {
					
					echo("La conexion ha fallado");
			}else{
				$query = "SELECT usu, pass FROM usuarios WHERE usu = '". $usuario ."'";
				$consulta = mysqli_query($query);

				if($consulta){

					$fila = mysqli_fetch_row($consulta);
					$usuario_base = $fila[0];
					$pass_base = $fila[1];

					if($usuario_base == $usuario){
						echo "Bienvenido $usuario_base";

					} else {
						echo "El usuario no es correcto";
					}

				}else {

					echo "El usuario no es correcta";
				}
			}
	?>
	
</body>
</html>