<?php

define('CTRL_PATH', __DIR__.'/controladores/');
define('MODEL_PATH', __DIR__.'/modelos/');
define('VIEW_PATH', __DIR__.'/vistas/');
define('TEMPLATE_PATH', __DIR__.'/plantillas/');
define('HELPERS_PATH', __DIR__.'/helpers/');

// Usamos constantes por comodidad


session_start();
?>

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
<?php
include (TEMPLATE_PATH.'header.php');
// Nombre del fichero a incluir
$accion = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'ctrl_LOGIN';
$ctrl=CTRL_PATH.$accion.'.php';
if (file_exists($ctrl))
{
    include($ctrl);
}
else
{   // Error 404
    include(VIEW_PATH.'eror404.php');
}
include (TEMPLATE_PATH.'footer.php');
?>

</body>
</html>