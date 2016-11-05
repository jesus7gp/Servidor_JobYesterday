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

function muestraOfertas($result){
	while ($registro = mysqli_fetch_assoc($result)){
		echo '<tr>';
			echo '<td>'.$registro['persona_contacto'].'</td>';
			echo '<td>'.$registro['email'].'</td>';
			echo '<td>'.$registro['fecha_crea'].'</td>';
		echo '</tr>';
	}
}

?>