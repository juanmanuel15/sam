<?php require 'datos.php';

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="consulta"><br>
		<li><?php echo $host ?></li>
 
		<input type="submit" name="submit" value="Submit Form"><b
	</form>
	
</body>
</html>