<?php
include_once MODEL_PATH.'funciones.php';
include_once HELPERS_PATH.'helpers.php';
include_once CTRL_PATH.'filtrado.php';
	$errores = false;
if (! $_POST){

	include_once VIEW_PATH."vista_BUSCAR.php";
	
}
else
{
	
	if ($_POST['buscar'] == "¡Buscar!"){

		if($errores == true){
			include VIEW_PATH."vista_BUSCAR.php";
		}
		else{
			//Función de buscar pasando los parámetros correspondientes
			include VIEW_PATH."vista_BUSCAR.php";
		}
	}
	else{
		header('Location: ?ctrl_MOSTRAR.php'); 
		
	}
}
?>