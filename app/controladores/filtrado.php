<?php
function VP($nombre_campo, $valor_defecto){
	if(isset($_POST[$nombre_campo])){
		return $_POST[$nombre_campo];
	}
	else{
		return $valor_defecto;
	}
}

function hayErrorFecha($fecha){
	if (checkdate($month, $day, $year)){
		return false;
	}
	else{
		return true;
	}
}

