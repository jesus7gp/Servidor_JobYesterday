<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<script type="text/javascript" src="../Assets/js/jquery-3.1.1.min.js"></script>

	<link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../Assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../Assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../Assets/css/estilos.css">
</head>
<body>
<div class="container" id="login">
	<?php
	
	if(! $_POST){
		formulario();
	}		
	else{
		$errores = false;
		if($_POST['servidor'] != "localhost" || $_POST['usuario'] != "root" || $_POST['password'] != "" || $_POST['base_datos'] == ""){
			$errores = true;
		}
		if($errores){
			formulario($errores);
		}
		else{
			CreaDB();?>
			<br>
			<div class="alert alert-success" role="alert">
				<i class="fa fa-check-circle" aria-hidden="true"></i>	¡Base de datos creada con éxito!
			</div>
			<br><br>
	
			<a class="btn btn-secondary" href="../app/index.php">Ir a inicio</a>
			<br><br><br><br>
		<?php
		}
	}
	?>
</div>
</body>
</html>
<?php
function formulario($errores=null){ 
?>
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<br><h1>Instalador</h1><br>
		<?php 
		if ($errores){
			echo '<div class="alert alert-danger" role="alert"><strong>¡ERROR! Datos incorrectos.</strong></div>';
		}
		?>
		<form method="POST" action="">
			<fieldset class="form-group">
				<label for="">Servidor:</label>
				<input type="text" name="servidor" class="form-control" value="">
			</fieldset>
			<fieldset class="form-group">
				<label for="">Usuario:</label>
				<input type="text" name="usuario" class="form-control" value="">
			</fieldset>
			<fieldset class="form-group">
				<label for="">Contraseña:</label>
				<input type="text" name="password" class="form-control" value="">
			</fieldset>
			<fieldset class="form-group">
				<label for="">Base de datos:</label>
				<input type="text" name="base_datos" class="form-control" value="">
			</fieldset>
			<br><input class="btn btn-primary sesion" name="instalar" type="submit" value="Instalar">		
		</form>
	</div>
<?php 
	} 
	function CreaDB(){
		$config = fopen('../app/config.php','w');
		fwrite($config,'<?php
				$db_conf=array(
					"servidor"=>"localhost",
					"usuario"=>"root",
					"password"=>"",
					"base_datos"=>"'.$_POST["base_datos"].'"
				);'
		);
		fclose($config);

		$texto = "CREATE DATABASE IF NOT EXISTS `".$_POST['base_datos']."` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin; USE `".$_POST['base_datos']."`;".file_get_contents("ofertas.sql");
		$link = mysqli_connect($_POST['servidor'], $_POST['usuario'], $_POST['password']);
		$link->multi_query($texto);
	}
?>