
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
	<script type="text/javascript" src="../../Assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../../Assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../Assets/css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="jumbotron jumbo1">
			<h1><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
				JobYesterday</h1>
				<p>Ofertas de empleo</p>
		</div>
	<div class="row">
		<div class="col-md-8">
			<?php
			echo "Número de registros encontrados: " . $num_total_registros . "<br>";
			echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
			echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>"; 
			?>
		</div>
		<div class="col-md-4">
			<!--BUSCAR-->
			<FORM ACTION="../controladores/ctrl_BUSCAR.php" METHOD="GET">
				<button class="btn btn-primary btn-lg"><i class="fa fa-search" aria-hidden="true"></i>	Realizar búsqueda detallada</button>			
			</FORM>
		</div>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Descripción</th>
				<th>Persona de contacto</th>
				<th>Nº teléfono</th>
				<th>E-Mail</th>
				<th>Fecha de creación</th>
				<th colspan="3"></th>
			</tr>
		</thead>
		<tbody>
			<?php muestraOfertas($resultado); ?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="8"><a href="../controladores/ctrl_GUARDAR.php">+ Insertar nueva oferta</a></th>
			</tr>
		</tfoot>
	</table>
		
	<?php 
	if ($total_paginas > 1){
	//Esto controla que no se avance ni retroceda más de lo conveniente. 
	//RECOMENDABLE PASAR ESTA FUNCIONALIDAD A LA CARPETA CONTROLADORES
		if($pagina+1 > $total_paginas){
			$siguiente = $pagina;
		}
		else{
			$siguiente = $pagina + 1;
		}

		if($pagina-1 == 0){
			$anterior = $pagina;
		}
		else{
			$anterior = $pagina - 1;
		}
		echo "<ul class='pagination'>";
		echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='http://localhost/Servidor_JobYesterday/app/controladores/ctrl_MOSTRAR.php?pagina=" . 1 . "'>Primero</a></span></li>";
		echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='http://localhost/Servidor_JobYesterday/app/controladores/ctrl_MOSTRAR.php?pagina=" . $anterior . "'>Anterior</a></span></li>";
		for ($i=1;$i<=$total_paginas;$i++){
			if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
				echo "<li class='page-item active'><span aria-hidden='true'><a class='page-link' href=''>" . $pagina . "</a></span></li>";
			else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
				echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='http://localhost/Servidor_JobYesterday/app/controladores/ctrl_MOSTRAR.php?pagina=" . $i . "'>" . $i . "</a></span></li>";
		}
		echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='http://localhost/Servidor_JobYesterday/app/controladores/ctrl_MOSTRAR.php?pagina=" . $siguiente . "'>Siguiente</a></span></li>";
		echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='http://localhost/Servidor_JobYesterday/app/controladores/ctrl_MOSTRAR.php?pagina=" . $total_paginas . "'>Último</a></span></li>";
		echo "</ul>";
	}
	?>
	<br><br>
	<br><br>
	<br><br>
	</div>
</body>
</html>