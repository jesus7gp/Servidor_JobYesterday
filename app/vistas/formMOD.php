<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous">
	</script>
	<link rel="stylesheet" href="../../Assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../Assets/css/estilos.css">
</head>
<body>
	<?php
	include_once '../modelos/funciones.php';
	$rsProvincias = selectProvincias();
	?>
	<div class="container">
	<h1>Modificar oferta</h1>
	<FORM ACTION="" METHOD="POST">

		<fieldset class="form-group">
			<label for="">Descripción:</label>
			<input type="text" name="descripcion" class="form-control" value="<?=VP('descripcion',$reg["descripcion"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Persona de contacto</label>
			<input type="text" name="perscont" class="form-control" value="<?=VP('perscont',$reg["persona_contacto"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Teléfono de contacto:</label>
			<input type="text" name="tlfnocont" class="form-control" value="<?=VP('tlfnocont',$reg["telefono"])?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Correo electrónico:</label>
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
			<label for="">Fecha de comunicación:</label>
			<input type="text" name="fechacom" class="form-control" value="<?=VP('fechacom',$reg["fecha_com"])?>"><br>
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
		<input class="btn btn-default" name="mod" type="submit" value="Cancelar">
	</FORM>
	<br><br>
	<br><br>
	<br><br>
	</div>
</body>
</html>
