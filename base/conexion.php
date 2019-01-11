<?php

	function consultar($conexion, $query){
		
		$resultado = mysqli_query($conexion, $query);
		
		if(!$resultado)
			 $valor = false;
		else{
			$valor = array();

			$num_filas = mysqli_num_rows($resultado);

			while($row = mysqli_fetch_row($resultado)){
				array_push($valor, $row[1]);
			}
			

			mysqli_free_result($resultado);
		} 
			
		mysqli_close($conexion);

		return $valor;



	}

	function insertar(){

	}


	function eliminar(){

	}

	function modificar(){

	}

?>