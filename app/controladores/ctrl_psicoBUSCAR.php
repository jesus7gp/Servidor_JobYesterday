<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	$errores = false;
	if (! $_POST){

		include_once VIEW_PATH."vista_psicoBUSCAR.php";

	}
	else{
		if($errores == true){
			include VIEW_PATH."vista_psicoBUSCAR.php";
		}
		else{
		//Función de buscar pasando los parámetros correspondientes
			include VIEW_PATH."vista_psicoBUSCAR.php";
		}
		
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>