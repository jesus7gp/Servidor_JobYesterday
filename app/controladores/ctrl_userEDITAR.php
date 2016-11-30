<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'modelo_ofertas.php';
	include_once MODEL_PATH.'modelo_usuarios.php';
	include_once MODEL_PATH.'modelo_provincias.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	if($_GET['id']==1){ //Así se evita que se modifique el administrador principal
		header('Location: ?ctrl=logout');
	}
	$reg = eligeUsuario($_GET['id']);
	$nombre = $reg['nombre'];
	$errores = false;
	if (! $_POST){		
		include_once VIEW_PATH."vista_userEDITAR.php";
		
	}
	else
	{
		$strErrores = "";
		$id=$_POST['id'];

		@$datosForm = array(
			"nombre" => $_POST['nombre'],
			"clave" => $_POST['clave'],
			"tipo" => $_POST['tipo'],
			);
		
    	//FILTRADO DE DATOS
		if($datosForm["nombre"] == "" || $datosForm["clave"] == "" ||$datosForm["tipo"] == ""){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Todos los campos son obligatorios.<br>";
			$errores = true;
		}
		if(existeNombreUsuario($datosForm['nombre'])>0 && $datosForm['nombre'] != $nombre){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	El nombre de usuario ya existe.<br>";
			$errores = true;

		}

		if($errores == true){
			include_once VIEW_PATH."vista_userEDITAR.php";
		}
		else{

			modificaUsuario($id, $datosForm);
			$strMensaje = "    Se ha modificado el usuario con éxito.";
			include_once VIEW_PATH."vista_userMENSAJE.php"; 
		}
		
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>