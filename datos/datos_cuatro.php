<?php
	
	require 'id.php';
		
	#Datos de la base	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";	

	#datos para tabla grupo_invitado
	$nombre_grupo_invitado = "";
	$id_grupo= "NULL";

	#datos para tabla material 
	$id_mat="NULL";
	$nombre_material="";
	$cantidad = "";

	#datos para la tabla requerimientos
	$id_req_curso = "NULL";
	$nombre_req = "Presente institucional";

	#datos para la tabla horario
	$id_horario = "NULL";
	$fecha = ["2018-11-26", "2018-11-28" ];
	$hora_inicial = ["07:00:00", "07:00:00"];
	$hora_final = ["09:00:00", "09:00:00"];

	#datos para la tabla lugar
	$lugar = ["Sala de computo 4", "Sala de computo 1" ];
	

	#datos para la tabla curso
	
	$titulo = "Programacion WEB";
	$id_curso= valorID($titulo);
	$tipoActividad = "taller";
	$desc = "En este taller aprenderás los principales conceptos";
	$pre = "Programación estructurada, lineal.";
	$dirigido ="Estudiantes que aún no saben nada de POO";

	#datos para el tabla usuario
	$id = 1730711;
	$nombre="Juan Manuel";
	$apellidoP = "Hernández";
	$apellidoM = "Contreras";
	$email = "juanmanuelhern158@gmail.com";
	$usu = "jmhc1508";
	$pass = "juan.manuel";
	$tel = 5557157932;

	$id_usu = "NULL";

	#datos para el ORG

	$nCuentaOrg = [1730711];

	#datos para el resp

	$nCuentaResp = [1730710];

	#datos para el inscrito

	$nCuentaInsc = 1830710;
	







?>