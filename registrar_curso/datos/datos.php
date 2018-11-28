	<?php
	
	date_default_timezone_set('America/Mexico_City');

	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";

		
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		 $titulo = $_POST['titulo'] ;
		 $tipoActividad = $_POST['tipo_actividad'];	 
		 $desc = $_POST['desc'];
		 $pre = $_POST['pre']; 
		 $dirigido = $_POST['dirigido'];
		 $nombre_material = $_POST['material'];
		 $nombre_grupo_invitado = $_POST['grupo_invitado'];
		 $cantidad = $_POST['cantidad'];
		 $nombre_req = $_POST['req'];

		 $horarioI1 = $_POST['horarioI1'];
		 $horarioI2 = $_POST['horarioI2'];
		 $horarioI3 = $_POST['horarioI3'];
		 $horarioI4 = $_POST['horarioI4'];
		 $horarioI5 = $_POST['horarioI5'];

		$hora_inicial = [$horarioI1, $horarioI2, $horarioI3, $horarioI4, $horarioI5];

		 $horarioF1 = $_POST['horarioF1'];
		 $horarioF2 = $_POST['horarioF2'];
		 $horarioF3 = $_POST['horarioF3'];
		 $horarioF4 = $_POST['horarioF4'];
		 $horarioF5 = $_POST['horarioF5'];

		$hora_final = [$horarioF1, $horarioF2, $horarioF3, $horarioF4, $horarioF5];

		$lugar1 = $_POST['lugar1'];
		$lugar2 = $_POST['lugar2'];
		$lugar3 = $_POST['lugar3'];
		$lugar4 = $_POST['lugar4'];
		$lugar5 = $_POST['lugar5'];

		$lugar = [$lugar1, $lugar2, $lugar3, $lugar4, $lugar5];

		$fecha1 = $_POST['fecha1'];
		$fecha2 = $_POST['fecha2'];
		$fecha3 = $_POST['fecha3'];
		$fecha4 = $_POST['fecha4'];
		$fecha5 = $_POST['fecha5'];

		$fecha = [$fecha1, $fecha2, $fecha3, $fecha4, $fecha5];

		$nCuentaOrg = $_POST['nCuentaOrg'];
		$nCuentaResp	 = $_POST['nCuentaRes'];

		 $id_curso = valorID($titulo);
		
	}



	function valorID($cadena){
		$cadena = substr(strtolower(str_ireplace(" ", "", $cadena)),0,9).date("d").date("m").date("y");

		return $cadena;
	}

	







?>