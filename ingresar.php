<?php session_start();
	
	if (isset($_SESSION['usuario'])) {
		header( 'Location: cursos.php');
	}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usu']), FILTER_SANITIZE_STRING);
	$password = $_POST['pass'];
	//$password = hash('sha512',$password);

	if(empty($usuario) && (empty($password))){
		$errores = "<li>Los campos estan vacios<li>";
	}else {

	try {
			$conexion = new PDO('mysql:host=localhost;dbname=sam', 'root', '');			
		} catch (PDOException $e) {
			echo "Error:" . $e->getMessage();
		}

	$statement = $conexion->prepare("SELECT * FROM usuario WHERE usuario = :usuario AND pass = :password");
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));

	$resultado = $statement->fetch();

	if (!$resultado) {
		$errores = "<li>Los datos son incorrectos</li>";
	}
	else{
		$_SESSION['usuario'] = $usuario;
		header('Location:cursos.php');
	}
}
}

	require 'views/login.view.php';
?>