
<nav class="navbar navbar-dark bg-inverse" id="encabezado">

<!-- Brand -->
<h1 class="navbar-brand mb-0"><i class="fa fa-briefcase" aria-hidden="true">	JobYesterday</i></h1>
<ul class="nav navbar-nav float-sm-right">
<li class="nav-item">
<span class="nav-link text-muted">
	<?php
		if(isset($_SESSION['tipo'])){
			echo "<b>Bienvenido, </b>".$_SESSION['user'];
			echo " | Conectado como ".$_SESSION['tipo'];
			echo " a las ".$_SESSION['time'];
			?>
			</span>
			</li>
			<li class="nav-item">
			<a class="btn nav-link" data-toggle="modal" data-target="#flipFlop"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
			</li>
			<?php

		}
		else{
			echo "No ha iniciado sesión.";

		}
	?>

</ul>
<!-- The modal -->
<div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="modalLabel">Cerrar sesión</h4>
			</div>
			<div class="modal-body">
				¿Está seguro?
			</div>
			<div class="modal-footer">
				<a href="?ctrl=logout" class="btn btn-secondary respLogout">Sí</a>
				<button type="button" class="btn btn-secondary respLogout" data-dismiss="modal" aria-label="Close">No</button>
			</div>
		</div>
	</div>
</div>
</nav>
