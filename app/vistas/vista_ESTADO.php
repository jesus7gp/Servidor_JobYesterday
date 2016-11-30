<div class="container">
<br>
<?php 
	if ($errores){
		echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo enviar el formulario.</b><br>'.$strErrores.'</div>';
	}
?>

<h1>Cambiar estado de la oferta</h1><br>
<div class="row">
<div class="col-md-6">
<h1>Datos</h1>
<table class="table table-striped">
	<tr><th class="tablaMuestra">Descripción:</th><td> <?php echo $reg['descripcion']?></td></tr>
	<tr><th class="tablaMuestra">Persona de contacto:</th><td> <?php echo $reg['persona_contacto']?></td></tr>
	<tr><th class="tablaMuestra">Teléfono de contacto:</th><td> <?php echo $reg['telefono']?></td></tr>
	<tr><th class="tablaMuestra">Correo electrónico:</th><td> <?php echo $reg['email']?></td></tr>
	<tr><th class="tablaMuestra">Dirección:</th><td> <?php echo $reg['direccion']?></td></tr>
	<tr><th class="tablaMuestra">Población:</th><td> <?php echo $reg['poblacion']?></td></tr>
	<tr><th class="tablaMuestra">Código postal:</th><td> <?php echo $reg['codigo_postal']?></td></tr>
	<tr><th class="tablaMuestra">Provincia:</th><td> <?php echo stringProvincia($reg['provincia'])?></td></tr>
	<tr><th class="tablaMuestra">Fecha de creación:</th><td> <?php echo stringFecha($reg['fecha_crea'])?></td></tr>
	<tr><th class="tablaMuestra">Fecha de comunicación:</th><td> <?php echo stringFecha($reg['fecha_com'])?></td></tr>
	<tr><th class="tablaMuestra">Psicólogo encargado:</th><td> <?php echo $reg['psicologo']?></td></tr>
</table></div>
<div class="col-md-6">
<FORM ACTION="" METHOD="POST">

	<h1>Modificar</h1>
	<fieldset class="form-group">
		<label for="">Estado:</label><br>
		<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado',$reg["estado"])); ?>
		<br>
	</fieldset>
	<fieldset class="form-group">
		<label for="">Candidato seleccionado:</label>
		<input type="text" name="candidato" class="form-control" value="<?=VP('candidato',$reg["candidato"])?>"><br>
	</fieldset>
	<fieldset class="form-group">
		<label for="">Otros datos candidato:</label>
		<input type="text" name="datoscandidato" class="form-control" value="<?=VP('datoscandidato',$reg["otros_datos_candidato"])?>"><br>
	</fieldset>

	<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
	<input class="btn btn-primary" name="mod" type="submit" value="Guardar cambios">
	<a class="btn btn-secondary" href="<?=veAtras($_SESSION['url'])?>">Cancelar</a>
</FORM>
<br><br>
<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><b>	IMPORTANTE: </b>Los campos marcados con un * son obligatorios.</div>
</div></div>
<br><br>
<br><br>
</div>