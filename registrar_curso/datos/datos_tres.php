<?php
	
	require 'id.php';
		
	#datos para tabla grupo_invitado
	$nombre_grupo_invitado = "ICO5";
	$id_grupo= "NULL";

	#datos para tabla material 
	$id_mat="NULL";
	$nombre_material = ["Display 7 segmenetos", 'LED', 'programador'];
	$cantidad = [4,10,1];

	#datos para la tabla requerimientos
	$id_req_curso = "NULL";
	$nombre_req = array ("Presente institucional", "Equipo de audio", "Computadora");

	#datos para la tabla horario
	$id_horario = "NULL";
	$fecha = array ("2018-11-19", "2018-11-20", "2018-11-21", "2018-11-22", "2018-11-23");
	$hora_inicial = array("07:00:00", "07:00:00", "07:00:00", "07:00:00", "07:00:00");
	$hora_final = array("09:00:00", "09:00:00", "09:00:00", "09:00:00", "09:00:00"); 

	#datos para la tabla lugar
	$lugar = array ("Sala de computo 4", "Sala de computo 4", "Sala de computo 4", "Sala de computo 4", "Sala de computo 4");
	

	#datos para la tabla curso
	
	$titulo = "PHP para principantes";
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

	$nCuentaResp = [1730709];

	#datos para el inscrito

	$nCuentaInsc = 1730707;






?>