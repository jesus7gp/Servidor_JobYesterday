<?php
include_once MODEL_PATH.'funciones.php';
include_once HELPERS_PATH.'helpers.php';
include_once CTRL_PATH.'filtrado.php';
$rsProvincias = selectProvincias();
if (! $_POST){
	$errores = false;
	$reg = eligeOferta($_GET['id']);
	include_once VIEW_PATH."vista_EDITAR.php";
}
else
{
	$strErrores="";
	$id = $_POST['id'];
	@$datosForm = array(
		"descripcion" => $_POST['descripcion'],
		"perscont" => $_POST['perscont'],
		"tlfnocont" => $_POST['tlfnocont'],
		"email" => $_POST['email'],
		"direccion" => $_POST['direccion'],
		"poblacion" => $_POST['poblacion'],
		"codpostal" => $_POST['codpostal'],
		"provincia" => $_POST['provincia'],
		"estado" => $_POST['estado'],
		"fechacom" => $_POST['fechacom'],
		"psicologo" => $_POST['psicologo'],
		"candidato" => $_POST['candidato'],
		"datoscandidato" => $_POST['datoscandidato'],
	);
	
    	//FILTRADO DE CAMPOS	
		if($datosForm["descripcion"] == ""){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>
	Introduzca una descripción.<br>";
			$errores = true;
		}
		if($datosForm["perscont"] == ""){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Introduzca una persona de contacto.<br>";
			$errores = true;
		}
		if(hayErrorTelefono($datosForm["tlfnocont"])){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Introduzca una número de teléfono válido.<br>";
			$errores = true;
		}
		if(hayErrorEmail($datosForm["email"])){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Introduzca una correo electrónico válido.<br>";
			$errores = true;
		}
		if(hayErrorCodPostal($datosForm["codpostal"])){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Introduzca un código postal válido.<br>";
			$errores = true;
		}
		if(hayErrorFecha($datosForm["fechacom"])){
			$strErrores .= "<i class='fa fa-times-circle' aria-hidden='true'></i>	Introduzca una fecha de comunicación válida.<br>";
			$errores = true;
		}





		if($errores == true){
			$reg = eligeOferta($id);
			include_once VIEW_PATH."vista_EDITAR.php";
		}
		else{

			modificaOferta($id, $datosForm);
			header('Location: ?ctrl_MOSTRAR');
		}
	
}
?>