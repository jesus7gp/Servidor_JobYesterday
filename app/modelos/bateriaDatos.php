<?php
function bateriaDatos(){
	$Db = db::getInstance();
	for($n = 1; $n <=50; $n++){
		$sentencia = 'INSERT INTO oferta (id, persona_contacto, email)
			VALUES (null, "Persona '.$n.'", "EMail '.$n.'");';
		$Db -> Ejecutar($sentencia);
	}
}