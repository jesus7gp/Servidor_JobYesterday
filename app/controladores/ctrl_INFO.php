<?php
include_once '../modelos/funciones.php';
include_once '../helpers/helpers.php';
include_once 'filtrado.php';
if (! $_POST){
	$reg = eligeOferta($_GET['id']);
	include_once "../vistas/vista_INFO.php";
	
}
else
{	
	header('Location: ctrl_MOSTRAR.php'); 	
}
?>