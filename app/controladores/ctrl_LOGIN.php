<?php
include_once MODEL_PATH.'modelo_ofertas.php';
include_once MODEL_PATH.'modelo_usuarios.php';
include_once MODEL_PATH.'modelo_provincias.php';
include_once HELPERS_PATH.'helpers.php';
include_once CTRL_PATH.'filtrado.php';
$errores = false;
$strErrores = "";
if (! $_POST){
	include_once VIEW_PATH."vista_LOGIN.php";
	
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
		header('Location: ?ctrl=ctrl_MOSTRAR');
	}
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){
		header('Location: ?ctrl=ctrl_psicoMOSTRAR');
	}

	
}
else
{
	$reg = consultaUsuario($_POST['nombre'], $_POST['clave']);

	if(consultaUsuario($_POST['nombre'], $_POST['clave']) && $reg['tipo']=='a'){
		session_start();
		$_SESSION['user'] = $_POST['nombre'];
		$_SESSION['pass'] = $_POST['clave'];
		$_SESSION['tipo'] = "Administrador";
		$_SESSION['buscar'] = false;
		$time = time();
		$_SESSION['time'] = date('H:i',$time);

		header('Location: ?ctrl=ctrl_MOSTRAR'); 
	}
	else if(consultaUsuario($_POST['nombre'], $_POST['clave']) && $reg['tipo']=='p'){
		session_start();
		$_SESSION['user'] = $_POST['nombre'];
		$_SESSION['pass'] = $_POST['clave'];
		$_SESSION['tipo'] = "Psicólogo";
		$_SESSION['buscar'] = false;
		$time = time();
		$_SESSION['time'] = date('H:i',$time);
		
		header('Location: ?ctrl=ctrl_psicoMOSTRAR'); 
	}
	else if($_POST['nombre']=="" || $_POST['clave']==""){
		$errores = true;
		$strErrores .= '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
	Todos los campos son obligatorios.';
		include_once VIEW_PATH."vista_LOGIN.php";
	}
	else if(!consultaUsuario($_POST['nombre'], $_POST['clave'])){
		$errores = true;
		$strErrores .= '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
	Usuario y/o clave erróneos.';
		include_once VIEW_PATH."vista_LOGIN.php";
	}
	
	
}
?>