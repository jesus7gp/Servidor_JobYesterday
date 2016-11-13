<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	if (! $_POST){
		$reg = eligeUsuario($_GET['id']);
		include_once VIEW_PATH."vista_userBORRAR.php";
		
	}
	else
	{
		$id = $_POST['id'];
		borraUsuario($id);
		header('Location: ?ctrl=ctrl_USUARIOS'); 
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>