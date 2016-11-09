
	<div class="container">
	<br>
	<?php 
		if ($errores){
			echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo enviar el formulario.</b><br>'.$strErrores.'</div>';
		}
	?>
	<h1>Modificar oferta</h1><br>
	<FORM ACTION="" METHOD="POST">

		<fieldset class="form-group">
			<label for="">Descripción*:</label>
			<input type="text" name="descripcion" class="form-control" value="<?=VP('descripcion',$reg["descripcion"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Persona de contacto*:</label>
			<input type="text" name="perscont" class="form-control" value="<?=VP('perscont',$reg["persona_contacto"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Teléfono de contacto*:</label>
			<input type="text" placeholder="XXX-XXX-XXX" name="tlfnocont" class="form-control" value="<?=VP('tlfnocont',$reg["telefono"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Correo electrónico*:</label>
			<input type="text" name="email" class="form-control" value="<?=VP('email',$reg["email"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Dirección:</label>
			<input type="text" name="direccion" class="form-control" value="<?=VP('direccion',$reg["direccion"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Población:</label>
			<input type="text" name="poblacion" class="form-control" value="<?=VP('poblacion',$reg["poblacion"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Código postal:</label>
			<input type="text" name="codpostal" class="form-control" value="<?=VP('codpostal',$reg["codigo_postal"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Provincia:</label>
			<?php echo CreaSelect('provincia',$rsProvincias,VP('provincia',$reg["provincia"])); ?>
			<br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Estado:</label><br>
			<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado',$reg["estado"])); ?>
			<br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Fecha de comunicación*:</label>
			<input type="text" placeholder="AAAA-MM-DD" name="fechacom" class="form-control" value="<?=VP('fechacom',$reg["fecha_com"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Psicólogo encargado:</label>
			<input type="text" name="psicologo" class="form-control" value="<?=VP('psicologo',$reg["psicologo"])?>"><br>
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
		<a class="btn btn-secondary" href="?ctrl_MOSTRAR">Cancelar</a>
	</FORM>
	<br><br>
	<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><b>	IMPORTANTE: </b>Los campos marcados con un * son obligatorios.</div>
	<br><br>
	<br><br>
	</div>

