<?php
function VP($nombre_campo, $valor_defecto){
	if(isset($_POST[$nombre_campo])){
		return $_POST[$nombre_campo];
	}
	else{
		return $valor_defecto;
	}
}


//FUNCIONES DE VALIDACIÓN DE DATOS
function hayErrorFecha($fecha){
	$fecha1 = $fecha;
	$fecha = date_parse_from_format('d-m-Y', $fecha);
	$ahora = date('Y-m-d');
	if (checkdate($fecha["month"], $fecha["day"], $fecha["year"])){
		if (strtotime($fecha1)<=strtotime($ahora)){
			return true;
		}
		else{
			return false;
		}
	}
	else{
		return true;
	}
}

function hayErrorCodPostal($codpostal){
	
	if($codpostal != "" && strlen($codpostal) != 5){
		return true;
	}
	else{
		return false;
	}
}

function hayErrorTelefono($telefono){
	if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $telefono)) {
  		return false;
	}
	else{
		return true;
	}
}

function hayErrorEmail($email){
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == "") {
    	return true;
	}
	else{
		return false;
	}
}