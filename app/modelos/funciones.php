<?php
include 'claseBBDD.php';
function selectProvincias(){
	$Db = db::getInstance();
	$rsProvincias = $Db -> Consulta("SELECT * FROM tbl_provincias");
	return $rsProvincias;
}

function insertaOferta($descripcion, $persona_contacto, $telefono, $email, $direccion, $poblacion, $codigo_postal, $provincia, $estado, $fecha_com, $psicologo, $candidato, $otros_datos_candidato){
	$sentencia = 'INSERT INTO oferta (id, descripcion, persona_contacto, telefono, email, direccion, poblacion, codigo_postal, provincia, estado, fecha_com, psicologo, candidato, otros_datos_candidato)
			VALUES (null, "'.$descripcion.'", "'.$persona_contacto.'", "'.$telefono.'", "'.$email.'", "'.$direccion.'", "'.$poblacion.'", "'.$codigo_postal.'", "'.$provincia.'", "'.$estado.'", "'.$fecha_com.'", "'.$psicologo.'", "'.$candidato.'", "'.$otros_datos_candidato.'");';
	$Db = db::getInstance();
	$Db -> Ejecutar($sentencia);
	echo "Insertado";
}