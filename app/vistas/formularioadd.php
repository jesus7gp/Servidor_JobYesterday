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
	<?php 
		if ($errores){
			echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo enviar el formulario.</b><br>'.$strErrores.'</div>';
		}
	?>
	<h1>Nueva oferta</h1>
	<FORM ACTION="" METHOD="POST">

		<fieldset class="form-group">
			<label for="">Descripción*:</label>
			<input type="text" name="descripcion" class="form-control" value="<?=VP('descripcion','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Persona de contacto*:</label>
			<input type="text" name="perscont" class="form-control" value="<?=VP('perscont','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Teléfono de contacto*:</label>
			<input type="text" placeholder="XXX-XXX-XXX" name="tlfnocont" class="form-control" value="<?=VP('tlfnocont','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Correo electrónico*:</label>
			<input type="text" name="email" class="form-control" value="<?=VP('email','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Dirección:</label>
			<input type="text" name="direccion" class="form-control" value="<?=VP('direccion','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Población:</label>
			<input type="text" name="poblacion" class="form-control" value="<?=VP('poblacion','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Código postal:</label>
			<input type="text" name="codpostal" class="form-control" value="<?=VP('codpostal','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Provincia:</label>
			<?php echo CreaSelect('provincia',$rsProvincias,VP('provincia','')); ?>
			<br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Estado:</label><br>
			<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado','')); ?>
			<br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Fecha de comunicación*:</label>
			<input type="text" placeholder="AAAA-MM-DD" name="fechacom" class="form-control" value="<?=VP('fechacom','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Psicólogo encargado:</label>
			<input type="text" name="psicologo" class="form-control" value="<?=VP('psicologo','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Candidato seleccionado:</label>
			<input type="text" name="candidato" class="form-control" value="<?=VP('candidato','')?>"><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Otros datos candidato:</label>
			<input type="text" name="datoscandidato" class="form-control" value="<?=VP('datoscandidato','')?>"><br>
		</fieldset>

		<input class="btn btn-primary" name="add" type="submit" value="Inserta oferta">
		<input class="btn btn-default" name="add" type="submit" value="Cancelar">
	</FORM>
	<br><br>
	<div class="alert alert-info" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i><b>	IMPORTANTE: </b>Los campos marcados con un * son obligatorios.</div>
	<br><br>
	<br><br>
	</div>
</body>
</html>