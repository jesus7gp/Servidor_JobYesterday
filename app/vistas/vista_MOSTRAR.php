<div class="container-fluid" id="jumboPrincipal">
<div class="jumbotron jumbotron-fluid jumbo1" >
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h1><i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>	JobYesterday</h1>
			<p>Ofertas de empleo</p>
		</div>
	</div>
</div></div>

<div class="container">
	<br>	
<div class="row">
	<div class="col-md-4">
		<?php
		echo "Número de registros encontrados: " . $num_total_registros . "<br>";
		echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
		echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>"; 
		?>
	</div>
	<div class="col-md-4">
		<!--BUSCAR-->
		
				
		
	</div>
	<div class="col-md-4 acciones">
		<div class="btn-group">
			<a href="?ctrl=ctrl_GUARDAR" class="btn btn-primary botonIr" title="Insertar nueva oferta"><i class="fa fa-plus" aria-hidden="true"></i></a>
			<a href="?ctrl=ctrl_BUSCAR" class="btn btn-primary botonIr" title="Realizar búsqueda detallada"><i class="fa fa-search" aria-hidden="true"></i></a>	
			<a href="?ctrl=ctrl_USUARIOS" class="btn btn-primary botonIr" title="Gestión de usuarios"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
<?php foreach($resultado as $registro){
		?>
		<div class="card">
			<div class="card-header">
				<div class="col-md-10"><h5><?=$registro['descripcion']?></h5></div>
				<div class="col-md-2 acciones">
					<div class="btn-group" role="toolbar">
						<a class="btn btn-info info" href="?ctrl=ctrl_INFO&id=<?=$registro['id']?>"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
						<a class="btn btn-success editar" href="?ctrl=ctrl_EDITAR&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
						<a class="btn btn-danger borrar" href="?ctrl=ctrl_BORRAR&id=<?=$registro['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="card-block">
				<strong>Persona de contacto: </strong><?=$registro['persona_contacto']?><br>
				<strong>Teléfono de contacto: </strong><?=$registro['telefono']?><br>
				<strong>Correo electrónico: </strong><?=$registro['email']?><br>
				
			</div>
			<div class="card-footer"><strong>Fecha de creación: </strong><?=stringFecha($registro['fecha_crea'])?></div>
		</div>
	<?php
	}?>
<?php paginacion("ctrl_MOSTRAR",$pagina, $total_paginas); ?>
<br><br>
<br><br>
<br><br>
</div>
