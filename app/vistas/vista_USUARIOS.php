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
		<?php muestraUsuarios($resultado); ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="8">
			<a class="btn btn-link" id="botonnuevo" href="?ctrl=ctrl_userGUARDAR" id="botonnuevo">+ Nuevo usuario</a>			
			</th>
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
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina=" . 1 . "'>Primero</a></span></li>";
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina=" . $anterior . "'>Anterior</a></span></li>";
	for ($i=1;$i<=$total_paginas;$i++){
		if ($pagina == $i)
      //si muestro el índice de la página actual, no coloco enlace
			echo "<li class='page-item active'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina='>" . $pagina . "</a></span></li>";
		else
      //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
			echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina=" . $i . "'>" . $i . "</a></span></li>";
	}
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina=" . $siguiente . "'>Siguiente</a></span></li>";
	echo "<li class='page-item'><span aria-hidden='true'><a class='page-link' href='?ctrl=ctrl_USUARIOS&pagina=" . $total_paginas . "'>Último</a></span></li>";
	echo "</ul>";
}
?>
<br>
<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>
<br>
<br><br>
<br><br>
</div>