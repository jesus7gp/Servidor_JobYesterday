<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	$rsProvincias = selectProvincias();
	if (! $_POST){
		$errores = false;
		$reg = eligeUsuario($_GET['id']);
		include_once VIEW_PATH."vista_userEDITAR.php";
		
	}
	else
	{
		$id=$_POST['id'];

		@$datosForm = array(
			"nombre" => $_POST['nombre'],
			"clave" => $_POST['clave'],
			"tipo" => $_POST['tipo'],
			);
		
    	//FILTRADO DE DATOS
		if($datosForm["nombre"] == "" || $datosForm["clave"] == "" ||$datosForm["tipo"] == ""){
			$errores = true;
		}

		if($errores == true){
			include_once VIEW_PATH."vista_userEDITAR.php";
		}
		else{

			modificaUsuario($id, $datosForm);
			header('Location: ?ctrl=ctrl_USUARIOS'); 
		}
		
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>