<?php require 'datos/formulario_datos.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="enviar.php" method="post">

		Título: <input type="text" name="titulo" id="titulo"><br>
		Tipo de actividad: <input type="text" name="tipo_actividad" id="tipo_actividad"><br>
		Descripción: <input type="text" name="desc" id="desc"><br>
		Prerrequisitos: <input type="text" name="pre" id="pre"><br>
		Dirigido a : <input type="text" name="dirigido" id="dirigido"><br>
		Materiales: <input type="text" name="material" id="material" >
		Cantidad: <input type="number" name="cantidad" id=""><br>
		Grupo Invitado: <input type="text" name="grupo_invitado" id="grupo_invitado"><br>
		Requerimientos : 
		<select name="lugar1">
			<?php foreach ($res_req as $key){
			echo "<option value=". $key['nombre_req'] .">" . $key['nombre_req']. "</option>";
		}
			?>
		</select><br>

		fecha 1: <input type="date"  name="fecha1">  Hora Inicio: <input type="time"  name="horarioI1">  Hora Final: <input type="time"  name="horarioF1"> 
		Lugar: <select name="lugar1">
			<?php foreach ($res_lugar as $key){
			echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";
		}
			?>
		</select><br>

		fecha 2: <input type="date"  name="fecha2">  Hora Inicio: <input type="time"  name="horarioI2">  Hora Final: <input type="time"  name="horarioF2"> 
		Lugar: <select name="lugar2"><?php foreach ($res_lugar as $key){echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";}
			?></select><br>

		fecha 3: <input type="date"  name="fecha3">  Hora Inicio: <input type="time"  name="horarioI3">  Hora Final: <input type="time"  name="horarioF3"> 
		Lugar: <select name="lugar3"><?php foreach ($res_lugar as $key){echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";}
			?></select><br>

		fecha 4: <input type="date"  name="fecha4">  Hora Inicio: <input type="time"  name="horarioI4">  Hora Final: <input type="time"  name="horarioF4"> 
		Lugar: <select name="lugar4"><?php foreach ($res_lugar as $key){echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";}
			?></select><br>

		fecha 5: <input type="date"  name="fecha5">  Hora Inicio: <input type="time"  name="horarioI5">  Hora Final: <input type="time"  name="horarioF5"> Lugar: <select name="lugar5"><?php foreach ($res_lugar as $key){echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";}
			?></select><br>

		Organizador: <input type="text" name="nCuentaOrg"><br>
		Responsable: <input type="text" name="nCuentaRes"><br>


		<input type="submit" value="Enviar">

	</form>
	
</body>
</html>