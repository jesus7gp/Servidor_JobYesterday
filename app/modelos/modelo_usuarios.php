<?php
include_once MODEL_PATH.'claseBBDD.php';
/*======================================================================
=            Funciones encargadas de la gestión de usuarios            =
======================================================================*/

/**
 *
 * Función encargada de realizar una consulta paginada de los usuarios
 *
 */
function usuariosPaginacion($inicio, $tam){
    $sentencia = "SELECT * FROM usuario LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

/**
 *
 * Función encargada de realizar una consulta paginada de los usuarios
 *
 */
function numUsuarios(){
    $sentencia = "SELECT * FROM usuario";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}

/**
 *
 * Función encargada de realizar una consulta paginada de los usuarios
 *
 */
function insertaUsuario($datos){
	$sentencia = 'INSERT INTO usuario (nombre, clave, tipo)
			VALUES ("'.$datos["nombre"].'", "'.$datos["clave"].'", "'.$datos["tipo"].'")';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Función encargada de modificar usuarios
 *
 */
function modificaUsuario($id, $datos){
	$sentencia = 'UPDATE usuario SET nombre="'.$datos["nombre"].'", clave="'.$datos["clave"].'", tipo="'.$datos["tipo"].'" WHERE id = "'.$id.'"';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Función encargada de hacer una consulta de un usuario a través del código
 *
 */
function eligeUsuario($cod){
	$sentencia = 'SELECT * FROM usuario WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Consulta($sentencia);
	$reg = $Db->LeeRegistro();
	return $reg;
}

/**
 *
 * Función encargada de borrar un usuario a través del código
 *
 */
function borraUsuario($cod){
	$sentencia = 'DELETE FROM usuario WHERE id = "'.$cod.'"';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
}

/**
 *
 * Función encargada de comprobar si existe el nombre del usuario
 *
 */
function existeNombreUsuario($nombre){
    $sentencia = "SELECT * FROM usuario WHERE nombre = '".$nombre."'";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}

/*========================================================
=    Funciones para la validación de usuarios            =
========================================================*/

/**
 *
 *  Función encargada de realizar una consulta a través de un nombre y una clave
 *	Así determina todos los datos de un usuario indicado en formulario y se confirma
 *  la existencia del mismo
 */
function consultaUsuario($nombre, $clave){
	$sentencia = "SELECT * FROM usuario WHERE nombre = '".$nombre."' AND clave = '".$clave."'";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    
    return mysqli_fetch_array($rs);
}