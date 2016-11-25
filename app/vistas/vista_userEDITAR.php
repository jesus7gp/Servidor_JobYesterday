<div class="container">
<br>
<?php 
	if ($errores){
		echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo enviar el formulario.</b><br>'.$strErrores.'</div>';
	}
?>
<h1>Editar usuario</h1><br>
<FORM ACTION="" METHOD="POST">

	<fieldset class="form-group">
		<label for="">Nombre de usuario:</label>
		<input type="text" name="nombre" class="form-control" value="<?=VP('nombre',$reg['nombre'])?>"><br>
	</fieldset>
	<fieldset class="form-group">
		<label for="">Clave de usuario:</label>
		<input type="text" name="clave" class="form-control" value="<?=VP('clave',$reg['clave'])?>"><br>
	</fieldset>
	<fieldset class="form-group">
		<label for="">Tipo de usuario:</label><br>
		<?php echo CreaRadio('tipo',array('a'=>'Administrador','p'=>'Psicólogo'),VP('tipo',$reg['tipo'])); ?>
		<br>
	</fieldset>
	
	<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
	<input class="btn btn-primary" name="add" type="submit" value="Guardar cambios">
	<a class="btn btn-secondary" href="<?=veAtras()?>">Cancelar</a>
</FORM>
<br><br>
<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><b>	IMPORTANTE: </b>Todos los campos son obligatorios.</div>
<br><br>
<br><br>
</div>