<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'modelo_ofertas.php';
	include_once MODEL_PATH.'modelo_usuarios.php';
	include_once MODEL_PATH.'modelo_provincias.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	if($_GET['id']==1){ //Así se evita que se borre al administrador principal
		header('Location: ?ctrl=logout');
	}
	if (! $_POST){
		$reg = eligeUsuario($_GET['id']);
		include_once VIEW_PATH."vista_userBORRAR.php";
		
	}
	else
	{
		$id = $_POST['id'];
		borraUsuario($id);
		$strMensaje = "    Se ha borrado el usuario con éxito.";
		include_once VIEW_PATH."vista_userMENSAJE.php"; 
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>