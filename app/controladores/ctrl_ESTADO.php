<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){
	include_once MODEL_PATH.'modelo_ofertas.php';
	include_once MODEL_PATH.'modelo_usuarios.php';
	include_once MODEL_PATH.'modelo_provincias.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	$rsProvincias = selectProvincias();
	$errores = false;
	if (! $_POST){
		$reg = eligeOferta($_GET['id']);
		include_once VIEW_PATH."vista_ESTADO.php";
	}
	else
	{
		$strErrores="";
		$id = $_POST['id'];
		@$estado = $_POST['estado'];
		$candidato = $_POST['candidato'];
		$datos = $_POST['datoscandidato'];
			
		
    	//FILTRADO DE CAMPOS	
		if($estado == ""){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>
			El estado no puede quedar sin seleccionar.<br>";
			$errores = true;
		}

		if($errores == true){
			$reg = eligeOferta($id);
			include_once VIEW_PATH."vista_ESTADO.php";
		}
		else{

			cambiaEstado($id, $estado, $candidato, $datos);
			$strMensaje = "    Se ha modificado con éxito.";
			include_once VIEW_PATH."vista_MENSAJE.php";
		}
		
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>