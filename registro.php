<?php session_start();

	if(isset($_SESSION['usuario'])){
		header('Location:cursos.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$nombre = $_POST['nombre'];
		$apellidoP = $_POST['apellidoP'];
		$apellidoM = $_POST['apellidoM'];
		$email = $_POST['email'];
		$email2 = $_POST['email1'];
		$usu = filter_var($_POST['usu'],FILTER_SANITIZE_STRING);
		$id =$_POST['nTrabajador'];
		$pass = $_POST['pass'];	
		$pass1 = $_POST['pass1'];	
		$tel = $_POST['telefono'];

		$errores ='';

		if (empty($nombre ) or empty($apellidoP) or empty($apellidoM ) or empty($id) or empty($pass) or empty($pass1) or empty($email2) or empty($email) or empty($usu) or empty($tel)){

			$errores .= "<li>Por favor rellena todos los campos </li>";
		}else {
			try {
			$conexion = new PDO('mysql:host=localhost;dbname=sam', 'root', '');			
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

		$statement = $conexion->prepare('SELECT * FROM usuario WHERE usuario =:usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usu));
		$resultado =$statement->fetch();

		if ($resultado) {
			$errores .= "<li>El nombre de usuario ya existe </li>";
		}
		
		//$pass = hash('sha512',$pass );
		//$pass1 = hash('sha512',$pass1);

		if($pass != $pass1){
			$errores .= "<li>Las contraseñas no son iguales</li>";			
		}

		if ($email != $email2) {
			$errores .= "<li>Los correos no son iguales</li>";
		}


		$statement1 = $conexion->prepare('SELECT * FROM usuario WHERE id_cuenta =:id LIMIT 1');
		$statement1->execute(array(':id' => $id));
		$resultado =$statement1->fetch();

		if ($resultado) {
			$errores .= "<li>El numero cuenta/trabajador ya existe </li>";
		}

		$statement2 = $conexion->prepare('SELECT * FROM usuario WHERE email =:email LIMIT 1');
		$statement2->execute(array(':email' => $email));
		$resultado =$statement2->fetch();

		if ($resultado) {
			$errores .= "<li>El correo ya existe </li>";
		}
		
		}


		if ($errores == '') {


		$statement3 = $conexion->prepare("INSERT INTO usuario(id_cuenta,nombre,apellidoP,apellidoM,telefono,email,usuario,pass) VALUES ('$id','$nombre', '$apellidoP', '$apellidoM', '$tel', '$email','$usu','$pass' )");
		$statement3->execute();
		
		header('location: ingresar.php');

	}

	}

	


	require 'views/registro.view.php';
	

	
?>