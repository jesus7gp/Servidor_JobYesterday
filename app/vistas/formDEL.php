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
	<div class="container">
	<h1>Borrar oferta</h1>
	<table class="table table-striped">
		<tr><th class="tablaMuestra">Descripción:</th><td> <?php echo $reg['descripcion']?></td></tr>
		<tr><th class="tablaMuestra">Persona de contacto:</th><td> <?php echo $reg['persona_contacto']?></td></tr>
		<tr><th class="tablaMuestra">Teléfono de contacto:</th><td> <?php echo $reg['telefono']?></td></tr>
		<tr><th class="tablaMuestra">Correo electrónico:</th><td> <?php echo $reg['email']?></td></tr>
		<tr><th class="tablaMuestra">Dirección:</th><td> <?php echo $reg['direccion']?></td></tr>
		<tr><th class="tablaMuestra">Población:</th><td> <?php echo $reg['poblacion']?></td></tr>
		<tr><th class="tablaMuestra">Código postal:</th><td> <?php echo $reg['codigo_postal']?></td></tr>
		<tr><th class="tablaMuestra">Provincia:</th><td> <?php echo $reg['provincia']?></td></tr>
		<tr><th class="tablaMuestra">Estado:</th><td> <?php echo $reg['estado']?></td></tr>
		<tr><th class="tablaMuestra">Fecha de creación:</th><td> <?php echo stringFecha($reg['fecha_crea'])?></td></tr>
		<tr><th class="tablaMuestra">Fecha de comunicación:</th><td> <?php echo $reg['fecha_com']?></td></tr>
		<tr><th class="tablaMuestra">Psicólogo encargado:</th><td> <?php echo $reg['psicologo']?></td></tr>
		<tr><th class="tablaMuestra">Candidato seleccionado:</th><td> <?php echo $reg['candidato']?></td></tr>
		<tr><th class="tablaMuestra">Otros datos candidato:</th><td> <?php echo $reg['otros_datos_candidato']?></td></tr>
	</table>
	<FORM ACTION="" METHOD="POST">
		<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
		<input class="btn btn-primary" name="borrar" type="submit" value="Borrar">
		<input class="btn btn-default" name="borrar" type="submit" value="Cancelar">
	</FORM>
	<br><br>
	<br><br>
	<br><br>
	</div>
</body>
</html>
