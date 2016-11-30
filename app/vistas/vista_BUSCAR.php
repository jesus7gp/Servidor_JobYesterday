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
		<span class="input-group-addon"><?php echo CreaSelect('combodescripcion',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'),isset($datos['combodescripcion'])? $datos['combodescripcion'] : ''); ?></span>
		<input type="text" name="descripcion" class="form-control inputBuscar" value="<?php echo isset($datos['descripcion'])? $datos['descripcion'] : ''; ?>">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Persona de contacto:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('combopersona',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'), isset($datos['combopersona'])? $datos['combopersona'] : ''); ?></span>
		<input type="text" name="persona" class="form-control inputBuscar" value="<?php echo isset($datos['persona'])? $datos['persona'] : ''; ?>">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Fecha de creación:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('combofecha',array('='=>'Igual','LIKE'=>'Contiene','>'=>'Mayor que','<'=>'Menor que'),isset($datos['combofecha'])? $datos['combofecha'] : ''); ?></span>
		<input type="text" name="fecha" placeholder="DD-MM-AAAA" class="form-control inputBuscar" value="<?php echo isset($datos['fecha'])? $datos['fecha'] : ''; ?>">
		</div>
	</fieldset>
	
	<br><br>
	<button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>	¡Buscar!</button>
	<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>
</FORM>
<br><br><br><br>
		<?php 
			if(isset($resultado)){
				if($num_total_registros > 0){
					foreach($resultado as $registro){?>
						<div class="card">
							<div class="card-header">
								<div class="col-md-10"><h5><?=$registro['descripcion']?></h5></div>
								<div class="col-md-2 acciones">
									<div class="btn-group" role="toolbar">
										<a class="btn btn-info info" href="?ctrl=ctrl_INFO&id=<?=$registro['id']?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
										<a class="btn btn-success editar" href="?ctrl=ctrl_EDITAR&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										<a class="btn btn-danger borrar" href="?ctrl=ctrl_BORRAR&id=<?=$registro['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<div class="card-block">
								<strong>Persona de contacto: </strong><?=$registro['persona_contacto']?><br>
								<strong>Teléfono de contacto: </strong><?=$registro['telefono']?><br>
								<strong>Correo electrónico: </strong><?=$registro['email']?><br>

							</div>
							<div class="card-footer"><strong>Fecha de creación: </strong><?=stringFecha($registro['fecha_crea'])?></div>
						</div>
				<?php
					}
				}
				else{
					echo "No se encontraron resultados.";
				}
			}
			else{
				echo "No se ha realizado ninguna búsqueda.";
			}
		?>
	
<?php
	if (isset($total_paginas) && $total_paginas > 1){
		paginacion("ctrl_BUSCAR",$pagina, $total_paginas, $datos);
	}
?>
<br><br>
<br><br>
<br><br>
</div>