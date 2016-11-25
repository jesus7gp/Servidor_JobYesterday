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
	<div class="alert alert-success" role="alert">
		<i class="fa fa-check-circle" aria-hidden="true"></i>	<?php echo $strMensaje;?>
	</div>
	<br><br>
	<?php
	if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
		echo '<a class="btn btn-secondary" href="?ctrl=ctrl_MOSTRAR">Volver</a>';
	}
	else if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){
		echo '<a class="btn btn-secondary" href="?ctrl=ctrl_psicoMOSTRAR">Volver</a>';
	}
	?>
	<br><br><br><br>
</div>