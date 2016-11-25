<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'modelo_ofertas.php';
	include_once MODEL_PATH.'modelo_usuarios.php';
	include_once MODEL_PATH.'modelo_provincias.php';
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
		$strMensaje = "    Se ha borrado con éxito.";
		include_once VIEW_PATH."vista_MENSAJE.php"; 
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>