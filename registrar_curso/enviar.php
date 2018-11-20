<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sam";


	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$titulo = $_POST['titulo'];	 
		$tipoActividad = $_POST['tipo_actividad'];	 
		$desc = $_POST['desc'];	 
		$pre = $_POST['pre'];	 
		$dirigido = $_POST['dirigido'];	 
		$material = $_POST['material'];	 
		$grupo_invitado = $_POST['grupo_invitado'];
		$cantidad = $_POST['cantidad'];

		$errores ="";
	}
	

		if(empty($titulo) or empty($tipoActividad) or empty($desc) or empty($pre) or empty($dirigido)){

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

			$conn->close();


		


?>	