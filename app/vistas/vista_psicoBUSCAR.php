<div class="container">
	<br>
	<div class="jumbotron jumbo1">
	<h1>Búsqueda detallada</h1>
	</div>
	<br>
	<FORM ACTION="" METHOD="POST">

	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 1:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene','mayor'=>'Mayor que','menor'=>'Menor que'),''); ?></span>
		<input type="text" name="" class="form-control inputBuscar" value="">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 2:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene','mayor'=>'Mayor que','menor'=>'Menor que'),''); ?></span>
		<input type="text" name="" class="form-control inputBuscar" value="">
		</div>
	</fieldset>
	<fieldset class="form-group">
		<div class="row">
		<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 3:</label></div>
		</div>
		<div class="input-group">
		<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene','mayor'=>'Mayor que','menor'=>'Menor que'),''); ?></span>
		<input type="text" name="" class="form-control inputBuscar" value="">
		</div>
	</fieldset>
	
	<br><br>
	<button class="btn btn-primary" name="buscar" type="submit"><i class="fa fa-search" aria-hidden="true"></i>	¡Buscar!</button>
	<a class="btn btn-secondary" href="?ctrl=ctrl_psicoMOSTRAR">Volver</a>
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
			<th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
		<?php //Aquí iría la correspondiente función ?>
	</tbody>
</table>

<br><br>
<br><br>
<br><br>
</div>