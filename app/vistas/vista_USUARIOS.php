<div class="container">
	<br>
	<h1>Gestión de usuarios</h1><br>

<table class="table table-striped">
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
			<td><div class="btn-toolbar" role="toolbar"><a class="btn btn-success editar" href="?ctrl=ctrl_userEDITAR&id=<?=$registro['id']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="btn btn-danger borrar" href="?ctrl=ctrl_userBORRAR&id=<?=$registro['id']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></td>
		</tr>
	<?php
	}?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="8">
			<a class="btn btn-link" id="botonnuevo" href="?ctrl=ctrl_userGUARDAR" id="botonnuevo">+ Nuevo usuario</a>			
			</th>
		</tr>
	</tfoot>
</table>
	
<?php paginacion("ctrl_USUARIOS",$pagina, $total_paginas); ?>
<br>
<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>
<br>
<br><br>
<br><br>
</div>