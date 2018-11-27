<?php
	
	require 'funcion_consulta.php'; 


	function curso($conn, $id_curso, $titulo, $tipoActividad, $desc, $pre, $dirigido){

		$query = "INSERT INTO curso(id_curso, titulo, tipo_actividad, descripcion, prerrequisitos, dirigido) VALUES ('$id_curso', '$titulo', '$tipoActividad', '$desc', '$pre', '$dirigido')";


		return insertar($conn, $query);
	}

	function material ($nombre_material, $cantidad, $id_curso, $conn){


	$insertar = "INSERT INTO material (id_mat, nombre_material, cantidad, id_curso) VALUES ";

		if (is_array($nombre_material) && is_array($cantidad)) {

			$i = 0;

			 while ($i < count($cantidad)){

			 	if($i == count($cantidad) - 1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= "'$nombre_material[$i]',";
				 	$insertar .= " $cantidad[$i],";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$nombre_material[$i]',";
				 	$insertar .= " $cantidad[$i],";
				 	$insertar .= " '$id_curso' ),";
			 	}			 	

			 	$i++;

			 }
			
		} else {

			$insertar .= "(NULL, '$nombre_material', '$cantidad', '$id_curso')";


		}

		
		return mysqli_query($conn, $insertar);
			


	}


	function grupoInvitado($grupo_invitado,$id_curso, $conn){

		if (is_array($grupo_invitado)){ 

			$insertar = "INSERT INTO grupo_invitado (id_grupo, nombre, id_curso) VALUES ";

			$i = 0;

			 while ($i < count($grupo_invitado)){

			 	if($i == count($grupo_invitado) - 1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$grupo_invitado[$i]',";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "( NULL, ";
				 	$insertar .= "( NULL, ";
				 	$insertar .= " '$grupo_invitado[$i]',";
				 	$insertar .= " '$id_curso' ),";
			 	}			 	

			 	$i++;

			 }

			 ;


			
		} else {

			$insertar = "INSERT INTO grupo_invitado (id_grupo, nombre, id_curso) VALUES (NULL,'$grupo_invitado', '$id_curso')";
		}

		return mysqli_query($conn, $insertar);
		
	}


	function reqCurso($nombre_req, $id_curso, $conn){

		if (is_array($nombre_req)){

			$id_array = array();
			$req_array = array();	

			$query = "SELECT id_req FROM requerimientos WHERE ";

			$i = 0;

			while (	$i < count($nombre_req)) {

				if($i == count($nombre_req)-1){
					$query .= " nombre_req = '"; 
					$query .= $nombre_req[$i];
					$query .= "'";
					

				}else {
					$query .= " nombre_req = '";
					$query .= $nombre_req[$i];
					$query .= "'";
					$query .= " OR ";
				}

				$i++;
			}


			$id_array = seleccionar($conn, $query, 'id_req');
			#$result = mysqli_query($conn,$query);

			$insertar = "INSERT INTO req_curso (id, id_req, id_curso) VALUES ";

			 $i = 0;

			 while ($i < count($id_array)){

			 	if($i == count($id_array)-1){
			 		$insertar .= "(NULL, ";
				 	$insertar .= $id_array[$i] . " , ";
				 	$insertar .= " '$id_curso' ". ")";

			 	} else {
			 		$insertar .= "(NULL, ";
			 		$insertar .= $id_array[$i] . " , ";
			 		$insertar .= "'$id_curso'". ") , ";

			 	}

			 	$i++;
			 	
			 }


			 


	} else {

		$query = "SELECT id_req FROM requerimientos WHERE nombre_req =  '$nombre_req'";


		$id_req = seleccionar($conn, $query, "id_req");

		

		$insertar = "INSERT INTO req_curso (id, id_req, id_curso) VALUES (NULL, $id_req, '$id_curso' )" ;

	}

	

	return mysqli_query($conn, $insertar);
}


	function requerimientos(){

		

		if (is_array($nombre_req)){

			$query = "SELECT id_req FROM requerimientos WHERE ";

			$id_array = array();
			$req_array = array();
			
			$i = 0;

			while (	$i < count($nombre_req)) {

				if($i == count($nombre_req)-1){
					$query .= " nombre_req = '"; 
					$query .= $nombre_req[$i];
					$query .= "'";
					

				}else {
					$query .= " nombre_req = '";
					$query .= $nombre_req[$i];
					$query .= "'";
					$query .= " OR ";
				}

				$i++;
			}

			$id_array = seleccionar($conn, $query, 'id_req');
			
			 $insertar = "INSERT INTO req_curso (id, id_req, id_curso) VALUES ";

			 $i = 0;

			 while ($i < count($id_array)){

			 	if($i == count($id_array)-1){
			 		$insertar .= "(NULL, ";
				 	$insertar .= $id_array[$i] . " , ";
				 	$insertar .= " '$id_curso' ". ")";

			 	} else {
			 		$insertar .= "(NULL, ";
			 	$insertar .= $id_array[$i] . " , ";
			 	$insertar .= "'$id_curso'". ") , ";

			 	}

			 	$i++;
			 	
			 }


		}else {

			$query = "SELECT id_req FROM requerimientos WHERE nombre_req = '$nombre_req'";

			$id_req = seleccionar($conn, $query, 'id_req');

			$insertar = "INSERT INTO req_curso (id, id_req, id_curso) VALUES (NULL, $id_req, '$id_curso";


		}

		return mysqli_query($conn, $insertar);

	}


	function horario ($fecha, $hora_inicial, $hora_final, $id_curso,$conn){

		$insertar = "INSERT INTO horario (id_horario, fecha, hora_inicio, hora_final,id_curso) VALUES ";

		if(is_array($fecha) && is_array($hora_inicial) && is_array($hora_final)){

		$i = 0;

			 while ($i < count($fecha)){

			 	if($i == count($fecha)-1){
			 		$insertar .= "( NULL, ";
				 	$insertar .= " '$fecha[$i]',";
				 	$insertar .= " '$hora_inicial[$i]',";
				 	$insertar .= " '$hora_final[$i]', ";
				 	$insertar .= " '$id_curso' );";

			 	} else {
			 		$insertar .= "(NULL, ";
				 	$insertar .= " '$fecha[$i]',";
				 	$insertar .= " '$hora_inicial[$i]',";
				 	$insertar .= " '$hora_final[$i]', ";
				 	$insertar .= " '$id_curso' ". ") ,";

			 	}			 	

			 	$i++;	
			 }
		
		}else {

			$insertar .= "(NULL, '$fecha', '$hora_inicial', '$hora_final', '$id_curso')";

		}

		return insertar($conn, $insertar);

	}


	function horarioLugar($id_curso, $lugar, $conn){


		if(is_array($lugar)){


			$query = "SELECT id_horario FROM horario WHERE id_curso = '$id_curso'";

			$id_horario = seleccionar($conn, $query, 'id_horario');

			$consulta = [];
			$id_lugar = [];

			for ($i=0; $i <count($lugar) ; $i++) 
				array_push($consulta , "SELECT id_lugar FROM lugar WHERE nombre_lugar = '$lugar[$i]'");			 		

			for($i=0; $i<count($lugar); $i++) 
				array_push($id_lugar,seleccionar($conn, $consulta[$i], 'id_lugar'));



			if(count($id_lugar) === count($id_horario)){

				$insertar = "INSERT INTO horario_lugar (id, id_lugar, id_horario) VALUES ";

				 $i = 0;

				 while ($i < count($id_lugar) && $i <count($id_horario)){

				 	if($i == count($id_lugar)-1){
				 		$insertar .= "(NULL, ";
					 	$insertar .= $id_lugar[$i] . " , ";
					 	$insertar .= $id_horario[$i]. ")";


				 	} else {
				 		$insertar .= "(NULL, ";
				 	$insertar .= $id_lugar[$i] . " , ";
					 	$insertar .= $id_horario[$i]. ") ,";

				 	}

				 	$i++;
				 	
				 }

		} 

		} else {

			$query = "SELECT id_horario FROM horario WHERE id_curso = '$id_curso'";

			$id_horario = seleccionar($conn, $query, 'id_horario');

			$query = "SELECT id_lugar FROM lugar WHERE nombre_lugar = '$lugar'";

			$id_lugar = seleccionar($conn, $query, 'id_lugar');

			
			$insertar = "INSERT INTO horario_lugar (id, id_lugar, id_horario) VALUES (NULL, $id_lugar, $id_horario)";

			
		}



		return insertar($conn, $insertar);
		

	}


	function usuarioOrg($nCuentaOrg, $id_curso, $conn){

		if(is_array($nCuentaOrg)){

			$query = "SELECT nCuenta FROM usuario WHERE";
			
			$i = 0;

			while (	$i < count($nCuentaOrg)) {

				if($i == count($nCuentaOrg)-1){
					$query .= " nCuenta = "; 
					$query .= $nCuentaOrg[$i];
					

				}else {
					$query .= " nCuenta = "; 
					$query .= $nCuentaOrg[$i];
					$query .= " OR ";
				}

				$i++;
			}

			$nCuenta = seleccionar($conn, $query, 'nCuenta');

			if(is_array($nCuenta)){

				$insertar =  "INSERT INTO curso_usuario_org (id, nCuenta, id_curso) VALUES ";

				$i = 0;

			
			 	while ($i < count($nCuenta)){


			 		if($i == count($nCuenta)-1){

				 		$insertar .= "(NULL, ";
					 	$insertar .= $nCuenta[$i] . " , ";
					 	$insertar .= "'$id_curso'". ")";


			 		} else {

				 		$insertar .= "(NULL, ";
				 		$insertar .= $nCuenta[$i] . " , ";
					 	$insertar .= "'$id_curso'". ") ,";

				 	}

				 	$i++;			 	
			 }				

		} else {

			$insertar = "INSERT INTO curso_usuario_org(id, nCuenta, id_curso) VALUES (NULL, $nCuenta, '$id_curso' )";
		}

			} else {

				$insertar = "INSERT INTO curso_usuario_org(id, nCuenta, id_curso) VALUES (NULL, $nCuenta, '$id_curso' )";

			}


		return  insertar($conn, $insertar);

	}


	function usuarioResp($nCuentaResp, $id_curso, $conn){


		if(is_array($nCuentaResp)){

			$query = "SELECT nCuenta FROM usuario WHERE";
			
			$i = 0;

			while (	$i < count($nCuentaResp)) {

				if($i == count($nCuentaResp)-1){
					$query .= " nCuenta = "; 
					$query .= $nCuentaResp[$i];
					

				}else {
					$query .= " nCuenta = "; 
					$query .= $nCuentaResp[$i];
					$query .= " OR ";
				}

				$i++;
			}

			$nCuenta = seleccionar($conn, $query, 'nCuenta');

			if(is_array($nCuenta)){

				$insertar =  "INSERT INTO curso_usuario_resp (id, nCuenta, id_curso) VALUES ";

				$i = 0;

			
			 	while ($i < count($nCuenta)){


			 		if($i == count($nCuenta)-1){

				 		$insertar .= "(NULL, ";
					 	$insertar .= $nCuenta[$i] . " , ";
					 	$insertar .= "'$id_curso'". ")";


			 		} else {

				 		$insertar .= "(NULL, ";
				 		$insertar .= $nCuenta[$i] . " , ";
					 	$insertar .= "'$id_curso'". ") ,";

				 	}

				 	$i++;			 	
			 }					 	

		} else {

			$insertar = "INSERT INTO curso_usuario_resp(id, nCuenta, id_curso) VALUES (NULL, $nCuenta, '$id_curso' )";
		}

			} else {

				$insertar = "INSERT INTO curso_usuario_resp(id, nCuenta, id_curso) VALUES (NULL, $nCuenta, '$id_curso' )";

			}


		return  insertar($conn, $insertar);

	}


	function usuarioInsc($nCuentaInsc, $id_curso, $conn){


		$query = "SELECT nCuenta FROM usuario WHERE nCuenta = $nCuentaInsc";

		$nCuenta = seleccionar($conn, $query, 'nCuenta');

		$insertar = "INSERT INTO curso_usuario_insc(id, nCuenta, id_curso) VALUES (NULL, $nCuenta, '$id_curso')";



		return  insertar($conn, $insertar);

	}

	
?>