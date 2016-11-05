<?php
include_once '../modelos/funciones.php';
include_once '../helpers/helpers.php';
include_once 'filtrado.php';
if (! $_POST){
	$reg = eligeOferta($_GET['id']);
	include_once "../vistas/formDEL.php";
	
}
else
{
	if ($_POST['borrar'] == "Borrar"){
    	$id = $_POST['id'];
    	borraOferta($id);
    	include_once "muestraOfertas.php";
	}
	else{
		include_once "muestraOfertas.php";
		
	}
	
}
?>