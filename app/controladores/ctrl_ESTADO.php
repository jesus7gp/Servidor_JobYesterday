<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	$rsProvincias = selectProvincias();
	if (! $_POST){
		$errores = false;
		$reg = eligeOferta($_GET['id']);
		include_once VIEW_PATH."vista_ESTADO.php";
	}
	else
	{
		$strErrores="";
		$id = $_POST['id'];
		@$estado = $_POST['estado'];
			
		
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

			cambiaEstado($id, $estado);
			header('Location: ?ctrl=ctrl_psicoMOSTRAR');
		}
		
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>