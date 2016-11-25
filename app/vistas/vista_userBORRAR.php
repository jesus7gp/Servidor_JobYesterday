<div class="container">
<br>
<h1>Borrar usuario</h1><br>
<table class="table table-striped">
	<tr><th class="tablaMuestra">Nombre:</th><td> <?php echo $reg['nombre']?></td></tr>
	<tr><th class="tablaMuestra">Clave:</th><td> <?php echo $reg['clave']?></td></tr>
	<tr><th class="tablaMuestra">Tipo:</th><td> <?php echo stringTipoUsuario($reg['tipo'])?></td></tr>
</table>
<FORM ACTION="" METHOD="POST">
	<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
	<input class="btn btn-primary" name="borrar" type="submit" value="Borrar">
	<a class="btn btn-secondary" href="?ctrl=ctrl_USUARIOS">Cancelar</a>
</FORM>
<br><br>
<br><br>
<br><br>
</div>