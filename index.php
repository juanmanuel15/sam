<?php  session_start();

	if (isset($_SESSION['usuario'])) {
		echo "Bienvenido $usuario";
	}

	else {
		require 'views/index.view.php';
	}
	
?>	

