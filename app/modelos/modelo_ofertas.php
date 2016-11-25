<?php
include_once MODEL_PATH.'claseBBDD.php';
/*=============================================
=      Funciones de gestión de ofertas        =
=============================================*/

/**
 *
 * Función encargada de insetar ofertas en la base de datos
 *
 */
function insertaOferta($datos){

	$fechacom = date('Y-m-d', strtotime($datos["fechacom"]));
	$sentencia = 'INSERT INTO oferta (descripcion, persona_contacto, telefono, email, direccion, poblacion, codigo_postal, provincia, estado, fecha_com, psicologo, candidato, otros_datos_candidato)
			VALUES ("'.$datos["descripcion"].'", "'.$datos["perscont"].'", "'.$datos["tlfnocont"].'", "'.$datos["email"].'", "'.$datos["direccion"].'", "'.$datos["poblacion"].'", "'.$datos["codpostal"].'", "'.$datos["provincia"].'", "'.$datos["estado"].'", "'.$fechacom.'", "'.$datos["psicologo"].'", "'.$datos["candidato"].'", "'.$datos["datoscandidato"].'");';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Devuelve una oferta de la base de datos a través de un código pasado por parámetro
 *
 */
function eligeOferta($cod){
	$sentencia = 'SELECT * FROM oferta WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Consulta($sentencia);
	$reg = $Db->LeeRegistro();
	return $reg;
}

/**
 *
 * Función encargada de borrar ofertas de la base de datos
 *
 */
function borraOferta($cod){
	$sentencia = 'DELETE FROM oferta WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Función encargada de modificar ofertas de la base de datos
 *
 */
function modificaOferta($id, $datos){
	$fechacom = date('Y-m-d', strtotime($datos["fechacom"]));
	$sentencia = 'UPDATE oferta SET descripcion="'.$datos["descripcion"].'", persona_contacto="'.$datos["perscont"].'", telefono="'.$datos["tlfnocont"].'", email="'.$datos["email"].'", direccion="'.$datos["direccion"].'", poblacion="'.$datos["poblacion"].'", codigo_postal="'.$datos["codpostal"].'", provincia="'.$datos["provincia"].'", estado="'.$datos["estado"].'", fecha_com="'.$fechacom.'", psicologo="'.$datos["psicologo"].'", candidato="'.$datos["candidato"].'", otros_datos_candidato="'.$datos["datoscandidato"].'" WHERE id = "'.$id.'";';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Función encargada de modificar ofertas de la base de datos
 * Solo modifica el estado, el candidato y otros datos, es la función del psicólogo
 */
function cambiaEstado($id, $estado, $candidato, $datos){
	$sentencia = 'UPDATE oferta SET estado="'.$estado.'", candidato="'.$candidato.'", otros_datos_candidato="'.$datos.'" WHERE id = "'.$id.'";';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Realiza una consulta en la base de datos paginada atendiendo a un tamaño
 * y un inicio de página
 */
function ofertasPaginacion($inicio, $tam){
    $sentencia = "SELECT * FROM oferta ORDER BY fecha_crea DESC LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

/**
 *
 * Devuelve el número de ofertas totales almacenadas en la base de datos
 *
 */
function numOfertas(){
    $sentencia = "SELECT * FROM oferta";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}


/*=============================================================
=            Funciones para la búsqueda de ofertas            =
=============================================================*/


/**
 *
 * Función encargada de realizar la consulta de ofertas a través de un filtro indicado como parámetro
 * Además la función devolverá la consulta paginada
 */
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