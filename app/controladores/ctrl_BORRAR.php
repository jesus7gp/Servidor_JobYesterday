<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	if (! $_POST){
		$reg = eligeOferta($_GET['id']);
		include_once VIEW_PATH."vista_BORRAR.php";
		
	}
	else
	{
		$id = $_POST['id'];
		borraOferta($id);
		header('Location: ?ctrl=ctrl_MOSTRAR.php'); 
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>