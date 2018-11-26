<?php
	
	require 'id.php';
		
	

	#datos para tabla grupo_invitado
	$nombre_grupo_invitado = "LIA2";
	$id_grupo= "NULL";

	#datos para tabla material 
	$id_mat="NULL";
	$nombre_material = ["Display 7 segmenetos", "LED", "Laptop"];
	$cantidad = [1,10,1];

	#datos para la tabla requerimientos
	$id_req_curso = "NULL";
	$nombre_req = ["Presente institucional", "Equipo de audio", "Sillas"];

	#datos para la tabla horario
	$id_horario = "NULL";
	$fecha = ["2018-11-22", "2018-11-23", "2018-11-24", "2018-11-25"];
	$hora_inicial = ["07:00:00","07:00:00","07:00:00","07:00:00"];
	$hora_final = ["09:00:00","09:00:00", "09:00:00", "09:00:00"];

	#datos para la tabla lugar
	$lugar = ["Sala de computo 4", "Sala de computo 2", "Sala de computo 1", "Sala de computo 1"];
	

	#datos para la tabla curso
	
	$titulo = "Java para principiantes";
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

	$nCuentaOrg = [1730709, 1730707,1730708];



	#datos para el resp

	$nCuentaResp = [1830711, 1830710];


	#datos para el inscrito

	$nCuentaInsc = 1830712;

	

?>