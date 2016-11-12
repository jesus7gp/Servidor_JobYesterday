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
	foreach($result as $registro){
		?><tr>
			<td><?=$registro['descripcion']?></td>
			<td><?=$registro['persona_contacto']?></td>
			<td><?=$registro['telefono']?></td>
			<td><?=$registro['email']?></td>
			<td><?=stringFecha($registro['fecha_crea'])?></td>
			<td><a class="btn btn-success editar" href="?ctrl=ctrl_EDITAR&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
			<td><a class="btn btn-danger borrar" href="?ctrl=ctrl_BORRAR&id=<?=$registro['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></td>
			<td><a class="btn btn-info info" href="?ctrl=ctrl_INFO&id=<?=$registro['id']?>"><i class="fa fa-info-circle" aria-hidden="true"></i></td>
		</tr>
	<?php
	}
}

function muestraOfertasPsico($result){
	foreach($result as $registro){
		?><tr>
			<td><?=$registro['descripcion']?></td>
			<td><?=$registro['persona_contacto']?></td>
			<td><?=$registro['telefono']?></td>
			<td><?=$registro['email']?></td>
			<td><?=stringFecha($registro['fecha_crea'])?></td>
			<td><a class="btn btn-success editar" href="?ctrl=ctrl_ESTADO&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
			<td><a class="btn btn-info info" href="?ctrl=ctrl_psicoINFO&id=<?=$registro['id']?>"><i class="fa fa-info-circle" aria-hidden="true"></i></td>
		</tr>
	<?php
	}
}

?>