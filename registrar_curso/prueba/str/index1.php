<?php 

	//Primer ejemplo de cadena con espacios en blanco al comienzo y final



$titulo = "Java para principiantes";

echo $cadena_formateada = substr(strtolower(str_ireplace(" ", "", $titulo)),0,9).date("d").date("m").date("y");


?>