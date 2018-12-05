<?php require 'datos/formulario_datos.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="../jquery-3.3.1.min.js" type="text/javascript"></script>
	
	<script>
			
		$(document).ready(function(){
		
   			 $("#agregarHorario").click(function(){
        		$("#tablaHorario").clone().appendTo("#horario");
		    });

   			 $("#agregarMaterial").click(function(){
        		$("#tablaMaterial").clone().appendTo("#material");
		    });

   			 $("#agregarRequerimientos").click(function(){
        		$("#tablaReq").clone().appendTo("#requerimientos");
		    });
   			 $("#eliminarHorario").click(function(){
				$("#tablaHorario").remove();
			});

   			 $("#eliminarMaterial").click(function(){
				$("#tablaMaterial").remove();
			});

   			 $("#eliminarRequerimientos").click(function(){
				$("#tablaReq").remove();
			});
			
		});


	</script>


</head>
<body>

	<form action="enviar.php" method="post">

		Título: <input type="text" name="titulo" id="titulo"><br>
		Tipo de actividad: <input type="text" name="tipo_actividad" id="tipo_actividad"><br>
		Descripción: <input type="text" name="desc" id="desc"><br>
		Prerrequisitos: <input type="text" name="pre" id="pre"><br>
		Dirigido a : <input type="text" name="dirigido" id="dirigido"><br>
		
		Material: 

		<table border="2px" id="material">
			
			<label id="agregarMaterial">Agregar(+) </label>
			<label id="eliminarMaterial">Eliminar(-) </label>
			
			<tr>
				<td><label>Nombre</label></td>
				<td><label>Cantidad</label></td>
				
			</tr>
			<tr id="tablaMaterial">
				<td><input type="text"  name="material[]"></td>
				<td><input type="number"  name="cantidad[]"></td>
				
			</tr>


		</table>

		
		Grupo Invitado: <input type="text" name="grupo_invitado" id="grupo_invitado"><br>
		
		Requerimientos : 

		<table border="2px" id="requerimientos">
			
			<label id="agregarRequerimientos">Agregar(+) </label>
<
			<label id="eliminarRequerimientos">Eliminar(-) </label>

			
			<tr>
				<td><label>Nombre</label></td>
				
			</tr>
			<tr id="tablaReq">
				<td><select name="req"><?php foreach ($res_req as $key){echo "<option value=". $key['nombre_req'] .">" . $key['nombre_req']. "</option>";}?></select></td>
				
			</tr>


		
		

		<table border="2px" id="horario">
			
			<label id="agregarHorario">Agregar(+) </label>
			<label id="eliminarHorario">Eliminar(-) </label>
			
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

		

		Organizador: <input type="text" name="nCuentaOrg"><br>
		Responsable: <input type="text" name="nCuentaRes"><br>


		<input type="submit" value="Enviar">

	</form>
	
</body>
</html>