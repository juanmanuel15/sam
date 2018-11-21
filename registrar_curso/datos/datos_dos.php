<?php
	
	require 'id.php';
		
	#Datos de la base	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "sam";	

	#datos para la tabla curso
	
	$titulo = "Arduino básico";
	$id_curso= valorID($titulo);
	$tipoActividad = "Taller";
	$desc = "En este taller aprenderás los principales conceptos de Arduino";
	$pre = "Ninguno ";
	$dirigido ="Estudiantes que estan inquietos por el mundo de la electrónica";

	#datos para tabla grupo_invitado
	$nombre_grupo_invitado = "ICO2";
	$id_grupo= "NULL";

	#datos para tabla material 
	$id_mat="NULL";
	$nombre_material = "Arduino UNO";
	$cantidad = 1;

	#datos para la tabla requerimientos
	$id_req_curso = "NULL";
	$nombre_req = "Equipo de audio";

	#datos para la tabla horario
	$id_horario = "NULL";
	$fecha = "2018-11-25";
	$hora_inicial = "11:00:00";
	$hora_final = "13:00:00";

	#datos para la tabla lugar
	$lugar = "Sala de computo 5";
	

	

	#datos para el tabla usuario
	$id = 1730711;
	$nombre="Alejandro Andrés";
	$apellidoP = "Serapio";
	$apellidoM = "Carmona";
	$email = "andreserapio@hotmail.com";
	$usu = "andres1508";
	$pass = "andydestroyer";
	$tel = 5571438433;

	$id_usu = "NULL";
	







?>