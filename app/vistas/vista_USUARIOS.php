<div class="container"><div class="row>"><div class="col-md-3"></div><div class="col-md-9">
	<br>
	<h1>Gestión de usuarios</h1><br>
	<a href="?ctrl=ctrl_userGUARDAR" class="btn btn-primary botonIr" title="Realizar búsqueda detallada"><i class="fa fa-plus" aria-hidden="true"></i>	Nuevo usuario</a><br><br>
<table class="table table-responsive">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Clave</th>
			<th>Tipo</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($resultado as $registro){ ?>
		<tr>
			<td><?=$registro['nombre']?></td>
			<td><?=$registro['clave']?></td>
			<td><?=stringTipoUsuario($registro['tipo'])?></td>
			<td><div class="btn-group" role="toolbar"><a class="btn btn-success editar" href="?ctrl=ctrl_userEDITAR&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="btn btn-danger borrar" href="?ctrl=ctrl_userBORRAR&id=<?=$registro['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></td>
		</tr>
	<?php
	}?>
	</tbody>
</table>
	
<?php paginacion("ctrl_USUARIOS",$pagina, $total_paginas); ?>
<br>
<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>
<br>
<br><br>
<br><br>
</div></div></div>