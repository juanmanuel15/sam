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
		 $lugar = $_POST['lugar'];
		 $fecha = $_POST['fecha'];
		 $hora_inicial = $_POST['horarioI'];
		 $hora_final = $_POST['horarioF'];

		$nCuentaOrg = $_POST['nCuentaOrg'];
		$nCuentaResp	 = $_POST['nCuentaRes'];

		 $id_curso = valorID($titulo);
		
	}



	function valorID($cadena){
		$cadena = substr(strtolower(str_ireplace(" ", "", $cadena)),0,9).date("d").date("m").date("y");

		return $cadena;
	}

	







?>