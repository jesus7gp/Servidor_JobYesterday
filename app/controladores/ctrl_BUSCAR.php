<?php
include_once '../modelos/funciones.php';
include_once '../helpers/helpers.php';
include_once 'filtrado.php';
	$errores = false;
if (! $_POST){

	include_once "../vistas/vista_BUSCAR.php";
	
}
else
{
	
	if ($_POST['buscar'] == "¡Buscar!"){

		if($errores == true){
			include "../vistas/vista_BUSCAR.php";
		}
		else{
			//Función de buscar pasando los parámetros correspondientes
			include "../vistas/vista_BUSCAR.php";
		}
	}
	else{
		header('Location: ctrl_MOSTRAR.php'); 
		
	}
}
?>