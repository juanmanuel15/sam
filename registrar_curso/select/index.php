<?php require 'datos.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="enviar.php" method="post">

		<select name="lugar1">
			<?php foreach ($res as $key){
			echo "<option value=". $key['nombre_lugar'] .">" . $key['nombre_lugar']. "</option>";
		}
			?>
		</select>		
	</form>
	
</body>
</html>