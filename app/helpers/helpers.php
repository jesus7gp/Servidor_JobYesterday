<?php

function CreaSelect($name, $opciones, $valorDefecto='')
{
	$html="\n".'<select name="'.$name.'">';
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
		$html.= "\n\t<input type=\"radio\" name=\"$name\" value=\"$value\" $checked>$text";
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
			echo '<td>'.$registro['persona_contacto'].'</td>';
			echo '<td>'.$registro['email'].'</td>';
			echo '<td>'.stringFecha($registro['fecha_crea']).'</td>';
			echo '<td><FORM ACTION="../controladores/modOferta.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button name="modificar">Modificar</button></FORM></td>';
			echo '<td><FORM ACTION="../controladores/borraOferta.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button name="eliminar">Borrar</button></FORM></td>';
			echo '<td><FORM ACTION="../controladores/infoOferta.php" METHOD="GET"><input type="hidden" name="id" value="'.$registro['id'].'"><button name="info">+Info</button></FORM></td>';
		echo '</tr>';
	}
}

?>