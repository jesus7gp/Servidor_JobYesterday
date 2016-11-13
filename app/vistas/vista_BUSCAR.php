<div class="container">
	<br>
	<div class="jumbotron jumbo1">
	<h1>Búsqueda detallada</h1>
	</div>
	<br>
	<?php
	if ($error){
		echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! Debe indicar al menos un campo.</b></div>';
	}?>
	<FORM METHOD="get">
	<!--DE ESTA FORMA ME ASEGURO DE QUE SE ENVÍAN LOS DATOS AL LUGAR ADECUADO-->
	<input type="hidden" name="ctrl" value="ctrl_BUSCAR">
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Descripción:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('combodescripcion',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'),isset($combodescripcion)? $combodescripcion : ''); ?></span>
		<input type="text" name="descripcion" class="form-control inputBuscar" value="<?php echo isset($descripcion)? $descripcion : ''; ?>">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Persona de contacto:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('combopersona',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'), isset($combopersona)? $combopersona : ''); ?></span>
		<input type="text" name="persona" class="form-control inputBuscar" value="<?php echo isset($persona)? $persona : ''; ?>">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Fecha de comunicación:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('combofecha',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'),isset($combofecha)? $combofecha : ''); ?></span>
		<input type="text" name="fecha" placeholder="AAAA-MM-DD" class="form-control inputBuscar" value="<?php echo isset($fecha)? $fecha : ''; ?>">
		</div>
	</fieldset>
	
	<br><br>
	<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>	¡Buscar!</button>
	<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>
</FORM>
<br><br><br><br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Descripción</th>
			<th>Persona de contacto</th>
			<th>Nº teléfono</th>
			<th>E-Mail</th>
			<th>Fecha de creación</th>
			<th colspan="3"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			if(isset($resultado)){
				if($num_total_registros > 0){
					muestraOfertas($resultado);
				}
				else{
					echo "<tr><td colspan='8'>No se encontraron resultados.</td></tr>";
				}
			}
			else{
				echo "<tr><td colspan='8'>No se ha realizado ninguna búsqueda.</td></tr>";
			}
		?>
	</tbody>
</table>
<?php
 
if (isset($total_paginas) && $total_paginas > 1){
//Esto controla que no se avance ni retroceda más de lo conveniente. 
//RECOMENDABLE PASAR ESTA FUNCIONALIDAD A LA CARPETA CONTROLADORES
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
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . 1 . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>Primero</a></span></li>";
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . $anterior . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>Anterior</a></span></li>";
	for ($i=1;$i<=$total_paginas;$i++){
		if ($pagina == $i)
      //si muestro el índice de la página actual, no coloco enlace
			echo "<li class='page-item active'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . $pagina . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>" . $pagina . "</a></span></li>";
		else
      //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . $i . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>" . $i . "</a></span></li>";
	}
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . $siguiente . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>Siguiente</a></span></li>";
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_BUSCAR&pagina=" . $total_paginas . "&descripcion=".$descripcion."&persona=".$persona."&fecha=".$fecha."&combodescripcion=".$combodescripcion."&combopersona=".$combopersona."&combofecha=".$combofecha."'>Último</a></span></li>";
	echo "</ul>";
}
?>
<br><br>
<br><br>
<br><br>
</div>