<?php
include_once '../modelos/funciones.php';
include_once '../helpers/helpers.php';
include_once 'filtrado.php';
if (! $_POST){
	$reg = eligeOferta($_GET['id']);
	include_once "../vistas/formMOD.php";
	
}
else
{
	$errores = false;
	$id = $_POST['id'];
	$descripcion = $_POST['descripcion'];
	$perscont = $_POST['perscont'];
	$tlfnocont = $_POST['tlfnocont'];
	$email = $_POST['email'];
	$direccion = $_POST['direccion'];
	$poblacion = $_POST['poblacion'];
	$codpostal = $_POST['codpostal'];
	$provincia = $_POST['provincia']; 
	$estado = $_POST['estado'];
	$fechacom = $_POST['fechacom'];
	$psicologo = $_POST['psicologo'];
	$candidato = $_POST['candidato'];
	$datoscandidato = $_POST['datoscandidato'];

	
	


	if ($_POST['mod'] == "Guardar cambios"){
    	if($perscont == ""){
			$errores = true;
		}

		if($errores == true){
			include_once "../vistas/formMOD.php";
		}
		else{

			modificaOferta($id, $descripcion, $perscont, $tlfnocont, $email, $direccion, $poblacion, $codpostal, $provincia, $estado, $fechacom, $psicologo, $candidato, $datoscandidato);
			header('Location: muestraOfertas.php'); 
			
		}
	}
	else{
		header('Location: muestraOfertas.php'); 
		
	}
}
?>