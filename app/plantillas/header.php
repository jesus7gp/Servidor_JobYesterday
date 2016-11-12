
<nav class="navbar navbar-dark bg-inverse" id="encabezado">

<!-- Brand -->
<h1 class="navbar-brand mb-0"><i class="fa fa-briefcase" aria-hidden="true">	JobYesterday</i></h1>
<ul class="nav navbar-nav float-sm-right">
<li class="nav-item">
<span class="nav-link text-muted">
	<?php
		if(isset($_SESSION['tipo'])){
			
			echo "Conectado como ".$_SESSION['tipo'];
			echo " a las ".$_SESSION['time'];
		}
		else{
			echo "No ha iniciado sesión.";

		}
	?>
</span>
</li>
<li class="nav-item">
<a class="nav-link" href="?ctrl=logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
</li>
</ul>

</nav>
