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

function paginacion($controlador, $pagina, $total_paginas, $datos=null){
	if (isset($total_paginas) && $total_paginas > 1){
		if(isset($datos)){
			$url = "&descripcion=".$datos['descripcion']."&persona=".$datos['persona']."&fecha=".$datos['fecha']."&combodescripcion=".$datos['combodescripcion']."&combopersona=".$datos['combopersona']."&combofecha=".$datos['combofecha'];
		}
		else{
			$url = "";
		}
		

		if($pagina+1 > $total_paginas){
			$siguiente = $pagina;
		}
		else{
			$siguiente = $pagina + 1;
		}

		if($pagina-1 == 0){
			$anterior = $pagina;
		}
		else{
			$anterior = $pagina - 1;
		}

		echo "<ul class='pagination'>";
		if($pagina != 1){
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=".$controlador."&pagina=1". $url ."'>Primero</a></span></li>";
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=".$controlador."&pagina=" . $anterior . $url."'>Anterior</a></span></li>";
		}
		for ($i=1;$i<=$total_paginas;$i++){
			if ($pagina == $i)
      //si muestro el índice de la página actual, no coloco enlace
				echo "<li class='page-item active'><span aria-hidden='true'><a class='page-link'>" . $pagina . "</a></span></li>";
			else
      //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
				echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=".$controlador."&pagina=" . $i . $url."'>" . $i . "</a></span></li>";
		}
		if($pagina != $total_paginas){
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=".$controlador."&pagina=" . $siguiente . $url."'>Siguiente</a></span></li>";
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=".$controlador."&pagina=" . $total_paginas . $url."'>Último</a></span></li>";
		}
		echo "</ul>";
	}
}

function stringEstado($estado){
	if($estado == "P"){
		return "Pendiente de iniciar selección";
	}
	if($estado == "R"){
		return "Realizando selección";
	}
	if($estado == "S"){
		return "Seleccionado candidato";
	}
	if($estado == "C"){
		return "Cancelada";
	}
}

function stringTipoUsuario($tipo){
	if($tipo == "a"){
		return "Administrador";
	}
	if($tipo == "p"){
		return "Psicólogo";
	}
}
?>