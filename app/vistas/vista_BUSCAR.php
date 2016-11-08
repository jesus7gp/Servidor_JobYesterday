<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../../Assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../Assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../Assets/css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron jumbo1">
		<h1><i class="fa fa-search fa-2x" aria-hidden="true"></i>	Realizar búsqueda detallada</h1>
		</div>
		<br>
		<FORM ACTION="" METHOD="POST">

		<fieldset class="form-group">
			<div class="row">
			<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 1:</label></div>
			</div>
			<div class="input-group">
			<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene'),''); ?></span>
			<input type="text" name="" class="form-control inputBuscar" value="">
			</div>
		</fieldset>
		<fieldset class="form-group">
			<div class="row">
			<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 2:</label></div>
			</div>
			<div class="input-group">
			<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene'),''); ?></span>
			<input type="text" name="" class="form-control inputBuscar" value="">
			</div>
		</fieldset>
		<fieldset class="form-group">
			<div class="row">
			<div class="col-md-2"></div><div class="col-md-10"><label for="">Campo 3:</label></div>
			</div>
			<div class="input-group">
			<span class="input-group-addon"><?php echo CreaSelect('estado',array('igual'=>'Igual','contiene'=>'Contiene'),''); ?></span>
			<input type="text" name="" class="form-control inputBuscar" value="">
			</div>
		</fieldset>
		
		<br><br>
		<input class="btn btn-primary" name="buscar" type="submit" value="¡Buscar!">
		<input class="btn btn-default" name="buscar" type="submit" value="Cancelar">
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
			<?php //Aquí iría la correspondiente función ?>
		</tbody>
	</table>

	<br><br>
	<br><br>
	<br><br>
	</div>
</body>
</html>