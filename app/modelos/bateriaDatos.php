<?php
function bateriaDatos(){
	$Db = db::getInstance();
	for($n = 1; $n <=50; $n++){
		$sentencia = 'INSERT INTO oferta (id, descripcion, persona_contacto, telefono, email)
			VALUES (null, "Descripción '.$n.'", "Persona '.$n.'","555-333-'.$n.'","EMail '.$n.'");';
		$Db -> Ejecutar($sentencia);
	}
}