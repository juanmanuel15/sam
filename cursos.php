<?php session_start();

	if(isset($_SESSION['usuario'])){
		require 'views/cursos.view.php';

	}

	else{
		header('Location:registro.php');	
	}

?>


