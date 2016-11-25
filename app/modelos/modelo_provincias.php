<?php
include_once MODEL_PATH.'claseBBDD.php';
/**
 *
 * Función que devuelve un array con todas las provincias y su código
 *
 */
function selectProvincias(){
	$Db = db::getInstance();
	$Db -> Consulta("SELECT id, nombre FROM tbl_provincias");
	$listado = [];
	while($reg = $Db->LeeRegistro()){
		$listado[$reg['id']]=$reg['nombre']; 
	}
	return $listado;
}

/**
 *
 * Función que devuelve el nombre de provincia a través de un código pasado por parámetro
 *
 */
function stringProvincia($cod){
	$Db = db::getInstance();
	$Db -> Consulta("SELECT nombre FROM tbl_provincias WHERE id = '".$cod."'");
	$nombre = "";
	$reg = $Db->LeeRegistro();
	$nombre = $reg['nombre'];
	
	return $nombre;
}