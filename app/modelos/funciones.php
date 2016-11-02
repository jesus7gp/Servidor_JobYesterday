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

function ofertasPaginacion($inicio, $tam){
    $sentencia = "SELECT persona_contacto, email, fecha_crea FROM oferta LIMIT ".$inicio.",".$tam;

	$Db = db::getInstance();
    return $Db->Consulta($sentencia);
}

function numOfertas(){
    $sentencia = "SELECT * FROM oferta";
    
    $Db = db::getInstance();
    $rs = $Db->Consulta($sentencia);
    return mysqli_num_rows($rs);
}

function muestraOfertas($result){
	while ($registro = mysqli_fetch_assoc($result)){
		echo '<tr>';
			echo '<td>'.$registro['persona_contacto'].'</td>';
			echo '<td>'.$registro['email'].'</td>';
			echo '<td>'.$registro['fecha_crea'].'</td>';
		echo '</tr>';
	}
}