<div class="container-fluid" id="jumboPrincipal">
<div class="jumbotron jumbotron-fluid jumbo1" >
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>	JobYesterday</h1>
		</div>
	</div>
</div></div>
<div class="container" id="login">
	<br><br>
	<?php 
		if ($errores){
			echo '<div class="alert alert-danger" role="alert"><b>¡ERROR! No se pudo iniciar sesión.</b><br>'.$strErrores.'</div>';
		}
	?>
	<form method="POST" action="">
	<div class="row">
	<div class="col-md-4"></div><div class="col-md-4">
	<h2>Iniciar sesión</h2><br>
		<fieldset class="form-group">
			<label for="">Usuario:</label>
			<input type="text" name="nombre" placeholder="Introduzca nombre de usuario" class="form-control" value=""><br>
		</fieldset>
		<fieldset class="form-group">
			<label for="">Clave:</label>
			<input type="password" name="clave" placeholder="Introduzca clave de acceso" class="form-control" value=""><br>
		</fieldset>
		<button class="btn btn-primary sesion" type="submit">Iniciar sesión</button></div>
		<div class="col-md-4"></div>
	</div>
	</form>
	<br><br>
	<br><br>
	<br>
	
	
</div>