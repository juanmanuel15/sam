<?php 

	require 'datos/datos.php';
	require 'funcion_consulta.php';



	$con = mysqli_connect($host,$user,$password, $db);

	if(!$con){
		#echo "Conexión no realizada";
	}else {

				
		#Insertar Datos del Curso
	
		 $insertar_curso = "INSERT INTO curso(id_curso, titulo, tipo_actividad, descripcion, prerrequisitos, dirigido) VALUES ('$id_curso', '$titulo', '$tipoActividad', '$desc', '$pre', '$dirigido')";


		if(insertar($con,$insertar_curso))
			echo "<li>Datos tabla curso insertados";

		else
			echo "<li>Datos tabla curso no insertados";
		
	//-------------------------------------//
		#Seleccionar id_curso 

		$consulta_id_curso = "SELECT id_curso FROM curso WHERE titulo='$titulo' AND tipo_actividad = '$tipoActividad'";

		$id_curso = seleccionar($con, $consulta_id_curso, "id_curso");

	//-------------------------------------//

		#Insertar datos en grupo_invitado 

		
	$insertar_grupo_invitado= "INSERT INTO grupo_invitado (id_grupo, nombre, id_curso) VALUES ('$id_grupo','$nombre_grupo_invitado', '$id_curso' )";

		if(insertar($con,$insertar_grupo_invitado))
			echo "<li>Datos tabla grupo_invitado insertados";
		else
			echo "<li>Datos tabla grupo_invitado no insertados";

	

	//-------------------------------------//
		#Insertar datos en material
	
		$insertar_material = "INSERT INTO material (id_mat, nombre_material, cantidad, id_curso) VALUES ('$id_mat','$nombre_material', $cantidad, '$id_curso' )";

		if(insertar($con,$insertar_material))
			echo "<li>Datos tabla material Insertados";
		else
			echo "<li>Datos tabla material no insertados";
	
		
	//-------------------------------------//
		#Insertar datos en req_curso
	

	$seleccionar_id = "SELECT * FROM requerimientos WHERE nombre_req = '$nombre_req' ";

	$id_req = seleccionar($con,$seleccionar_id,'id_req');

	$insertar_req = "INSERT INTO req_curso (id, id_req, id_curso) VALUES ($id_req_curso, $id_req, '$id_curso')";


	if(insertar($con, $insertar_req))
		echo "<li>Datos tabla req_curso insertados";
	else
		echo "<li>Datos tabla req_curso no insertados";

	//-------------------------------------
		#Insertar datos en horario
	
	$insertar_horario = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final, id_curso) VALUES ($id_horario,'$fecha', '$hora_inicial', '$hora_final', '$id_curso')";

	if(insertar($con,$insertar_horario))
		echo "<li> Datos tabla horario Insertado";
	else
		echo "<li> Datos tabla horario no Insertado";

	$selec_id_hora = "SELECT id_horario FROM horario WHERE fecha= '$fecha' AND hora_inicio = '$hora_inicial' AND hora_final = '$hora_final' AND id_curso = '$id_curso'";

	$id_horario = seleccionar($con,$selec_id_hora, "id_horario");

	

	//-------------------------------------//
		#Insertar datos en horario_lugar
	
	$selec_lugar = "SELECT id_lugar FROM lugar WHERE nombre_lugar = '$lugar'";

	$id_lugar = seleccionar($con, $selec_lugar, "id_lugar");


	$insert_lugar_horario = "INSERT INTO horario_lugar (id, id_horario, id_lugar) VALUES (NULL, '$id_horario', $id_lugar)";

	if (insertar($con,$insert_lugar_horario))
		echo "<li>Datos horario_lugar insertados";
	else 
		echo "<li>Datos horario_lugar no insertados"; 



	//----------//
		#Insertar datos del usuario

	$insertar_usuario = "INSERT INTO usuario(nCuenta,nombre, apellidoP, apellidoM, correo, usuario, pass, telefono) VALUES ($id, '$nombre', '$apellidoP', '$apellidoM', '$email', '$usu', '$pass', $tel)";

	 if(insertar($con,$insertar_usuario))
	 	echo "<li>Usuario insertado";
	 else
	 	echo "<li>Usuario no insertado";

	 $insertar_curso_usu_insc = "INSERT INTO curso_usuario_insc (id, nCuenta,id_curso) VALUES ($id_usu, $id, '$id_curso')";

	 if(insertar($con, $insertar_curso_usu_insc))
	 	echo "<li>datos tabla usuario inscrito";
	 else
	 	echo "<li>datos tabla usuario no inscrito";


	 $insertar_curso_usu_resp = "INSERT INTO curso_usuario_resp (id, nCuenta,id_curso) VALUES ($id_usu, $id, '$id_curso')";

	 if(insertar($con, $insertar_curso_usu_resp))
	 	echo "<li> Responsable inscrito";
	 else
	 	echo "<li>Responsable no inscrito";



	 $insertar_curso_usu_org = "INSERT INTO curso_usuario_org (id, nCuenta,id_curso) VALUES ($id_usu, $id, '$id_curso')";

	 if(insertar($con, $insertar_curso_usu_org))
	 	echo "<li>Organizador inscrito";
	 else
	 	echo "<li>Organizador no inscrito";


	
	}
?>