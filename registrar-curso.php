<?php session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location:ingresar.php');
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){

		$titulo = $_POST['titulo'] ;
		 $tipoActividad = $_POST['tipo_actividad'];	 #Este es un numero
		 $desc = $_POST['desc'];
		 $pre = $_POST['pre']; 
		 $dirigido = $_POST['dirigido'];
		 $nombre_material = $_POST['material'];
		 $nombre_grupo_invitado = $_POST['grupo_invitado'];
		 $cantidad = $_POST['cantidad']; #Este es un array
		 $nombre_req = $_POST['req'];
		 $lugar = $_POST['lugar'];
		 $fecha = $_POST['fecha'];
		 $hora_inicial = $_POST['horarioI'];
		 $hora_final = $_POST['horarioF'];

		$nCuentaOrg = 1730710; #Este dato debe ser obtenido y además un array
		$nCuentaResp= 1730711; #Este debe ser buscado por numero de cuenta o por responsable

		$errores =  "";

		/*$errores .= "<li>$titulo</li>";
		$errores .= "<li>$tipoActividad</li>";
		$errores .= "<li>$desc</li>";
		$errores .= "<li>$pre</li>";
		$errores .= "<li>$dirigido</li>";
		$errores .= "<li>$nombre_grupo_invitado</li>";*/

		if (is_array($hora_inicial)){

			foreach ($hora_inicial as $key) {
				if($key == '')
					$errores .= "<li>No hay valor </li>";

				else 
					$errores .= "<li>".$key."</li>";


			}

		}
		//$errores .= "<li>$hora_inicial</li>";
		//$errores .= "<li>$lugar</li>";
		






		
	}

	require 'views/registrar_curso.view.php';


?>