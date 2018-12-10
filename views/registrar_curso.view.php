<?php require 'registrar_curso/datos/formulario_datos.php';
header("Content-Type: text/html;charset=utf-8");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/formulario.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<title>Registro de Cursos</title>

	<style>
	.row_inicial {
		height: 50px;
	}

	img {
		display:block;
		margin:auto;
	}
</style>
	<script src="jquery-3.3.1.min.js" type="text/javascript"></script>
	<script>
			
		$(document).ready(function(){
			var i=1, j=1, k=1;

   			 $("#agregarHorario").click(function(){
   			 	if(i<10){   			 		
   			 		$("#tablaHorario").clone().appendTo("#horario");
   			 		i++;
   			 	}
        		
		    });

   			 $("#agregarMaterial").click(function(){
   			 	if(j<5){
   			 		$("#tablaMaterial").clone().appendTo("#material");
   			 		j++;	
   			 	}
        		
		    });

   			 $("#agregarRequerimientos").click(function(){
        		if(k<5){
        			$("#tablaReq").clone().appendTo("#requerimientos");
        			k++;
        		}
        		
		    });

   			 $("#eliminarHorario").click(function(){
   			 	if(i>1){
   			 		$("#tablaHorario").remove();
   			 		i--;	
   			 	}
				
			});

   			 $("#eliminarMaterial").click(function(){
   			 	if(j>1){
   			 		$("#tablaMaterial").remove();
   			 		j--;
   			 	}
				
			});

   			 $("#eliminarRequerimientos").click(function(){
				if(k>1){
					$("#tablaReq").remove();
					k--;

				}
			});
			
		});


	</script>
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">SAM</a>
		
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="" id="navbarNav">
		    <ul class="navbar-nav">
			      <li class="nav-item ">
			        <a class="nav-link" href="index.php">Inicio</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="cursos.php">Cursos</a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="registro.php">Registro</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="ingresar.php">Ingresar</a>
			      </li>
		    </ul>
	 	 </div>
	</nav>
	
	



	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="entrar">

		<div class="form-group">
			<div class="row_inicial"></div>
			<div class="row">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Título: </label>
				</div>
				<div class="col-2 block-right">
					<input type="text" name="titulo" id="titulo" class="form-control">
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Tipo de actividad: </label>
				</div>
				<div class="col-2 block-center">
					<select name="tipo_actividad"><?php foreach ($tipo_Actividad as $key){echo "<option value=". $key['id_tipo_actividad'] .">" . $key['nombre_tipo_actividad']. "</option>";}?></select>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Dirigido a : </label>
				</div>
				<div class="col-2 block-center">
					<input type="text" name="dirigido" id="dirigido">
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Descripción: </label>
				</div>
				<div class="col-2 block-center">
					<textarea name="desc" id="desc"  rows="2"></textarea>
				</div>
				<div class="col-4"></div>
			</div>


			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Prerrequisitos: </label>
				</div>
				<div class="col-2 block-center">
					<textarea name="pre" id="pre"  rows="2"></textarea>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Grupo Invitado: </label>				</div>
				<div class="col-2 block-center">
					<input type="text" name="grupo_invitado" id="grupo_invitado">
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Organizador: </label>				</div>
				<div class="col-2 block-center">
					<input type="text" name="nCuentaOrg">
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-3"></div>
				<div class="col-2 text-right ">
					<label class="col-form-label align-top">Requerimientos:  </label> <i class="far fa-plus-square " id ="agregarRequerimientos"></i><i class="far fa-minus-square" id ="eliminarRequerimientos"></i>				</div>
				<div class="col-2 block-center">
					<table border="1px" id="requerimientos" class="table-bordered table-sm">
						<tr>
							<td><label>Nombre</label></td>
							
						</tr>
						<tr id="tablaReq">
							<td><select name="req[]"><?php foreach ($res_req as $key){echo "<option value=". $key['nombre_req'] .">" . $key['nombre_req']. "</option>";}?></select></td>
							
						</tr>

					</table>
				</div>
				<div class="col-4"></div>
			</div>


			<div class="row mt-2">
				<div class="col-4"></div>
				<div class="col-4 text-center ">
					<label class="col-form-label align-top">Material </label> <i class="far fa-plus-square " id ="agregarMaterial"></i><i class="far fa-minus-square" id ="eliminarMaterial"></i>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-5"></div>
				<div class="col-4 text-center ">
					<table  id="material" class="table-sm table-bordered">
						
						<tr>
							<td><label>Nombre</label></td>
							<td><label>Cantidad</label></td>
							
						</tr>
						<tr id="tablaMaterial">
							<td><input type="text"  name="material[]"></td>
							<td><input type="number"  name="cantidad[]"></td>
							
						</tr>

					</table>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row mt-2">
				<div class="col-4"></div>
				<div class="col-4 text-center">	
					<label class="col-form-label align-top">Horario </label> <i class="far fa-plus-square " id ="agregarHorario"></i><i class="far fa-minus-square" id ="eliminarHorario"></i>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					
					<table  id="horario" class="table-sm table-bordered">		
			
			
						<tr>
							<td><label>Fecha</label></td>
							<td><label>Hora Inicio</label></td>
							<td><label>Hora Final</label></td>
							<td><label>Lugar</label></td>
						</tr>
						<tr id="tablaHorario">
							<td><input type="date"  name="fecha[]"></td>
							<td><input type="time"  name="horarioI[]"></td>
							<td><input type="time"  name="horarioF[]"></td>
							<td><select name="lugar[]"><?php foreach ($res_lugar as $key){echo "<option value=". $key['id_lugar'] .">" . $key['nombre_lugar']. "</option>";}?></select>
							
						</tr>
					</table>
					

				</div>
				<div class="col-4"></div>	
			</div>

			
			<div class="row mt-2">
					<div class="col-5"></div>
					<div class="col-2">
						<input type="submit" value="Enviar">
						<input type="reset" value="Limpiar">
					</div>
					<div class="col-5"></div>
			</div>


			<div class="row mt-3">
				<div class="col-4"></div>
				<div class="col-4">
					
					<?php if(!empty($errores)):?>
							<ul class="	alert-danger">
								<?php echo $errores; ?>
							</ul>

					<?php endif; ?>


				</div>
				<div class="col-4"></div>				 <!--Mensajes de error-->
			</div>
			

			
			

		</div>
	
	
	</form>

	
</body>
</html>