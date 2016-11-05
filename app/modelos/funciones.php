<?php
include 'claseBBDD.php';
function selectProvincias(){
	$Db = db::getInstance();
	$Db -> Consulta("SELECT id, nombre FROM tbl_provincias");
	$listado = [];
	while($reg = $Db->LeeRegistro()){
		$listado[$reg['id']]=$reg['nombre']; 
	}
	return $listado;
}

function insertaOferta($descripcion, $persona_contacto, $telefono, $email, $direccion, $poblacion, $codigo_postal, $provincia, $estado, $fecha_com, $psicologo, $candidato, $otros_datos_candidato){
	$sentencia = 'INSERT INTO oferta (id, descripcion, persona_contacto, telefono, email, direccion, poblacion, codigo_postal, provincia, estado, fecha_com, psicologo, candidato, otros_datos_candidato)
			VALUES (null, "'.$descripcion.'", "'.$persona_contacto.'", "'.$telefono.'", "'.$email.'", "'.$direccion.'", "'.$poblacion.'", "'.$codigo_postal.'", "'.$provincia.'", "'.$estado.'", "'.$fecha_com.'", "'.$psicologo.'", "'.$candidato.'", "'.$otros_datos_candidato.'");';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

function eligeOferta($cod){
	$sentencia = 'SELECT * FROM oferta WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Consulta($sentencia);
	$reg = $Db->LeeRegistro();
	return $reg;
}

function borraOferta($cod){
	$sentencia = 'DELETE FROM oferta WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

function ofertasPaginacion($inicio, $tam){
    $sentencia = "SELECT * FROM oferta LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

function numOfertas(){
    $sentencia = "SELECT * FROM oferta";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}
