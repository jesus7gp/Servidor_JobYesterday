<div class="container">
<br>
<?php 
	if ($errores){
		echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo enviar el formulario.</b><br>'.$strErrores.'</div>';
	}
?>
<h1>Cambiar estado de la oferta</h1><br>
<table class="table table-striped">
	<tr><th class="tablaMuestra">Descripción:</th><td> <?php echo $reg['descripcion']?></td></tr>
	<tr><th class="tablaMuestra">Persona de contacto:</th><td> <?php echo $reg['persona_contacto']?></td></tr>
	<tr><th class="tablaMuestra">Teléfono de contacto:</th><td> <?php echo $reg['telefono']?></td></tr>
	<tr><th class="tablaMuestra">Correo electrónico:</th><td> <?php echo $reg['email']?></td></tr>
	<tr><th class="tablaMuestra">Dirección:</th><td> <?php echo $reg['direccion']?></td></tr>
	<tr><th class="tablaMuestra">Población:</th><td> <?php echo $reg['poblacion']?></td></tr>
	<tr><th class="tablaMuestra">Código postal:</th><td> <?php echo $reg['codigo_postal']?></td></tr>
	<tr><th class="tablaMuestra">Provincia:</th><td> <?php echo $reg['provincia']?></td></tr>
	<tr><th class="tablaMuestra">Fecha de creación:</th><td> <?php echo stringFecha($reg['fecha_crea'])?></td></tr>
	<tr><th class="tablaMuestra">Fecha de comunicación:</th><td> <?php echo $reg['fecha_com']?></td></tr>
	<tr><th class="tablaMuestra">Psicólogo encargado:</th><td> <?php echo $reg['psicologo']?></td></tr>
	<tr><th class="tablaMuestra">Candidato seleccionado:</th><td> <?php echo $reg['candidato']?></td></tr>
	<tr><th class="tablaMuestra">Otros datos candidato:</th><td> <?php echo $reg['otros_datos_candidato']?></td></tr>
</table>
<FORM ACTION="" METHOD="POST">

	
	<fieldset class="form-group">
		<label for=""><h2>Estado:</h2></label><br>
		<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado',$reg["estado"])); ?>
		<br>
	</fieldset>	

	<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
	<input class="btn btn-primary" name="mod" type="submit" value="Guardar cambios">
	<a class="btn btn-secondary" href="?ctrl=ctrl_psicoMOSTRAR">Cancelar</a>
</FORM>
<br><br>
<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><b>	IMPORTANTE: </b>Los campos marcados con un * son obligatorios.</div>
<br><br>
<br><br>
</div>