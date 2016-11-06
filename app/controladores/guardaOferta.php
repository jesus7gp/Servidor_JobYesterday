<?php
include_once '../modelos/funciones.php';
include_once '../helpers/helpers.php';
include_once 'filtrado.php';
if (! $_POST){
	$errores = false;
	include_once "../vistas/formularioadd.php";
	
}
else
{
	
	$strErrores="";

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
	
	if ($_POST['add'] == "Inserta oferta"){
    	
		if($datosForm["descripcion"] == ""){
			$strErrores .= "Introduzca una descripción.<br>";
			$errores = true;
		}
		if($datosForm["perscont"] == ""){
			$strErrores .= "Introduzca una persona de contacto.<br>";
			$errores = true;
		}
		if(hayErrorTelefono($datosForm["tlfnocont"])){
			$strErrores .= "Introduzca una número de teléfono válido.<br>";
			$errores = true;
		}
		if(hayErrorEmail($datosForm["email"])){
			$strErrores .= "Introduzca una correo electrónico válido.<br>";
			$errores = true;
		}
		if(hayErrorCodPostal($datosForm["codpostal"])){
			$strErrores .= "Introduzca un código postal válido.<br>";
			$errores = true;
		}
		if(hayErrorFecha($datosForm["fechacom"])){
			$strErrores .= "Introduzca una fecha de comunicación válida.<br>";
			$errores = true;
		}

		if($errores == true){
			include "../vistas/formularioadd.php";
		}
		else{

			insertaOferta($datosForm);
			header('Location: muestraOfertas.php'); 
		}
	}
	else{
		header('Location: muestraOfertas.php'); 
		
	}
}
?>