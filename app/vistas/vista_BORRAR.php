<div class="container">
<br>
<h1>Borrar oferta</h1><br>
<table class="table table-striped">
	<tr><th class="tablaMuestra">Descripción:</th><td> <?php echo $reg['descripcion']?></td></tr>
	<tr><th class="tablaMuestra">Persona de contacto:</th><td> <?php echo $reg['persona_contacto']?></td></tr>
	<tr><th class="tablaMuestra">Teléfono de contacto:</th><td> <?php echo $reg['telefono']?></td></tr>
	<tr><th class="tablaMuestra">Correo electrónico:</th><td> <?php echo $reg['email']?></td></tr>
	<tr><th class="tablaMuestra">Dirección:</th><td> <?php echo $reg['direccion']?></td></tr>
	<tr><th class="tablaMuestra">Población:</th><td> <?php echo $reg['poblacion']?></td></tr>
	<tr><th class="tablaMuestra">Código postal:</th><td> <?php echo $reg['codigo_postal']?></td></tr>
	<tr><th class="tablaMuestra">Provincia:</th><td> <?php echo stringProvincia($reg['provincia'])?></td></tr>
	<tr><th class="tablaMuestra">Estado:</th><td> <?php echo stringEstado($reg['estado'])?></td></tr>
	<tr><th class="tablaMuestra">Fecha de creación:</th><td> <?php echo stringFecha($reg['fecha_crea'])?></td></tr>
	<tr><th class="tablaMuestra">Fecha de comunicación:</th><td> <?php echo $reg['fecha_com']?></td></tr>
	<tr><th class="tablaMuestra">Psicólogo encargado:</th><td> <?php echo $reg['psicologo']?></td></tr>
	<tr><th class="tablaMuestra">Candidato seleccionado:</th><td> <?php echo $reg['candidato']?></td></tr>
	<tr><th class="tablaMuestra">Otros datos candidato:</th><td> <?php echo $reg['otros_datos_candidato']?></td></tr>
</table>
<FORM ACTION="" METHOD="POST">
	<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
	<input class="btn btn-primary" name="borrar" type="submit" value="Borrar">
	<a class="btn btn-secondary" href="<?=veAtras($_SESSION['url'])?>">Cancelar</a>
</FORM>
<br><br>
<br><br>
<br><br>
</div>