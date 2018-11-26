<?php

	function seleccionar ($conn,$query,$campo){

		$res = mysqli_query($conn, $query);

		if(mysqli_num_rows($res) === 1 ) {
			while($fila = mysqli_fetch_array($res)) 
				$id = $fila ["$campo"];	
		} else {
			$id = array();

			foreach ($res as $key ) 
				array_push($id, $key["$campo"]);
		}

		return $id;

	}

	function insertar ($conn,$query){

		if(mysqli_query($conn,$query))
			return true;
		else
			return false;

	}
 
	



?>