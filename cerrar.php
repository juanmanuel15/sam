<?php  session_start();

session_destroy();
$_SESSION[]= array();
header('Location:ingresar.php');
die();


?>