<?php
include MODEL_PATH.'claseBBDD.php';
function selectProvincias(){
	$Db = db::getInstance();
	$Db -> Consulta("SELECT id, nombre FROM tbl_provincias");
	$listado = [];
	while($reg = $Db->LeeRegistro()){
		$listado[$reg['id']]=$reg['nombre']; 
	}
	return $listado;
}

function insertaOferta($datos){
	$sentencia = 'INSERT INTO oferta (descripcion, persona_contacto, telefono, email, direccion, poblacion, codigo_postal, provincia, estado, fecha_com, psicologo, candidato, otros_datos_candidato)
			VALUES ("'.$datos["descripcion"].'", "'.$datos["perscont"].'", "'.$datos["tlfnocont"].'", "'.$datos["email"].'", "'.$datos["direccion"].'", "'.$datos["poblacion"].'", "'.$datos["codpostal"].'", "'.$datos["provincia"].'", "'.$datos["estado"].'", "'.$datos["fechacom"].'", "'.$datos["psicologo"].'", "'.$datos["candidato"].'", "'.$datos["datoscandidato"].'");';
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

function modificaOferta($id, $datos){
	$sentencia = 'UPDATE oferta SET descripcion="'.$datos["descripcion"].'", persona_contacto="'.$datos["perscont"].'", telefono="'.$datos["tlfnocont"].'", email="'.$datos["email"].'", direccion="'.$datos["direccion"].'", poblacion="'.$datos["poblacion"].'", codigo_postal="'.$datos["codpostal"].'", provincia="'.$datos["provincia"].'", estado="'.$datos["estado"].'", fecha_com="'.$datos["fechacom"].'", psicologo="'.$datos["psicologo"].'", candidato="'.$datos["candidato"].'", otros_datos_candidato="'.$datos["datoscandidato"].'" WHERE id = "'.$id.'";';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

function cambiaEstado($id, $estado){
	$sentencia = 'UPDATE oferta SET estado="'.$estado.'" WHERE id = "'.$id.'";';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

function ofertasPaginacion($inicio, $tam){
    $sentencia = "SELECT * FROM oferta ORDER BY fecha_crea DESC LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

function numOfertas(){
    $sentencia = "SELECT * FROM oferta";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}

function consultaUsuario($nombre, $clave){
	$sentencia = "SELECT * FROM usuario WHERE nombre = '".$nombre."' AND clave = '".$clave."'";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    
    return mysqli_fetch_array($rs);
}

function ofertasBusqueda($inicio, $tam, $filtro){
	$sentencia = "SELECT * FROM oferta WHERE ".$filtro." ORDER BY fecha_crea DESC LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

function numeroRegistros($filtro){
	$sentencia = "SELECT * FROM oferta WHERE ".$filtro;

	$Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);

	return mysqli_num_rows($rs);
}