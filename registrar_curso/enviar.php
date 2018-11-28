<?php

	require "datos/datos.php";
	require "funciones/funciones_tablas.php";
	
	$conn = mysqli_connect($host,$user,$password, $db);

	if (!$conn) 
		echo "Base no conectada";

	else {
		

		if(!empty($titulo) OR !empty($tipoActividad) OR !empty($desc) OR !empty($pre) OR !empty($dirigido)){

			if(curso($conn, $id_curso, $titulo, $tipoActividad, $desc, $pre, $dirigido))
				echo "<li>Curso insertado</li>";
			else 
				echo "<li>Curso no insertado </li>";

		}


		if (!empty($nombre_material)){

			if (material($nombre_material, $cantidad, $id_curso, $conn))
		 		echo "<li>Material insertado</li>";
			else
		 		echo "<li>Material no insertado</li>";

		}

		

		if (!empty($nombre_grupo_invitado)){

			if (grupoInvitado($nombre_grupo_invitado, $id_curso, $conn))
		 		echo "<li>Grupo insertado </li>";
			else
				echo " <li>Grupo invitado no insertado </li>";

		}
		 

		
		if(!empty($nombre_req)){

			if(reqCurso($nombre_req, $id_curso, $conn))
				echo "<li>Nombre_req Insertados</li>";
			else
				echo "<li>Nombre_req  no Insertados </li>";
		} 
		
		

		
		if(horario($fecha, $hora_inicial, $hora_final, $id_curso,$conn))
			echo "<li>Horario Insertado </li>";
		else
			echo "<li>Horario no Insertado </li>";

		
		

		if(horarioLugar($id_curso,$lugar, $conn))
			echo "<li>Horario_lugar Insertado";
		else 
			echo "<li>Horario _lugar no Insertado </li>";

		

		if(usuarioOrg($nCuentaOrg, $id_curso, $conn))
			echo "<li>Usuario_Org Insertado </li>";
		else
			echo "<li>Usuario_Org no Insertado </li>";

		if(usuarioResp($nCuentaResp, $id_curso, $conn))
			echo "<li>Usuario_Resp Insertado </li>";
		else
			echo "<li>Usuario_Resp no Insertado </li>";

		/*
		if(usuarioInsc($nCuentaInsc, $id_curso, $conn))
			echo "<li>Usuario_Insc Insertado </li>";
		else
			echo "<li>Usuario_Insc no Insertado </li>";


	*/
	}

		/*if(empty($titulo) or empty($tipoActividad) or empty($desc) or empty($pre) or empty($dirigido)){

			$errores = "<li>Por favor rellena todos los campos marcados </li>";

		}else {
			
			$conn = new mysqli($host, $user, $pass, $db);
			if($conn->connect_error){
				die("Conection failed:" . $conn->connect_error);				
			}

			$sql = "INSERT INTO curso (id_curso, titulo,tipo_actividad, descripcion, prerrequisitos, dirigido) VALUES (NULL, '$titulo', '$tipoActividad', '$desc', ' $pre',  '$dirigido' )";

			$res = $conn->query($sql);

			if (!empty($material)){

				$consultaID = "SELECT id_curso FROM curso WHERE titulo = '$titulo' AND descripcion = '$desc' ";

				$id_material_res = $conn->query($consultaID);

				$id_material= mysqli_fetch_array($id_material_res);

				echo($id_material = ["id"]);

					$insertMaterial = "INSERT INTO material (id_material, nombre_material, cantidad, id_curso) VALUES (NULL, '$material', $cantidad, '$id_material')";

					$conn->query($insertMaterial);

				}

			}

			if ($res ===  TRUE) {
				echo "Nueva fila creada";
			}else {
				echo "Error: ". $sql . "<br>" . $conn->error;
			}

			$conn->close();*/


		


?>	