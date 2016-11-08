<?php

function CreaSelect($name, $opciones, $valorDefecto='')
{
	$html="\n".'<select name="'.$name.'" class="custom-select">';
	
	foreach($opciones as $value=>$text)
	{
		if ($value==$valorDefecto)
			$select='selected="selected"';
		else
			$select="";
		$html.= "\n\t<option value=\"$value\" $select>$text</option>";
	}
	$html.="\n</select>";

	return $html;
}

function CreaRadio($name, $opciones, $valorDefecto='')
{
	$html="";
	foreach($opciones as $value=>$text)
	{
		if ($value==$valorDefecto)
			$checked="checked=\"checked\"";
		else
			$checked="";
		$html.= "\n\t<input type=\"radio\" name=\"$name\" value=\"$value\" $checked>$text<br>";
	}


	return $html;
}

function stringFecha($cadena){
	$fecha = new DateTime($cadena);
	return date_format($fecha, 'Y-m-d');
}

function muestraOfertas($result){
	while ($registro = mysqli_fetch_assoc($result)){
		echo '<tr>';
			echo '<td>'.$registro['descripcion'].'</td>';
			echo '<td>'.$registro['persona_contacto'].'</td>';
			echo '<td>'.$registro['telefono'].'</td>';
			echo '<td>'.$registro['email'].'</td>';
			echo '<td>'.stringFecha($registro['fecha_crea']).'</td>';
			echo '<td><FORM ACTION="../controladores/ctrl_EDITAR.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button class="btn btn-primary" name="modificar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</button></FORM></td>';
			echo '<td><FORM ACTION="../controladores/ctrl_BORRAR.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button class="btn btn-primary" name="eliminar"><i class="fa fa-trash-o" aria-hidden="true"></i>
</button></FORM></td>';
			echo '<td><FORM ACTION="../controladores/ctrl_INFO.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button class="btn btn-primary" name="info"><i class="fa fa-info-circle" aria-hidden="true"></i>
</button></FORM></td>';
		echo '</tr>';
	}
}

?>