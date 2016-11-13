<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
	include_once MODEL_PATH.'funciones.php';
	include_once HELPERS_PATH.'helpers.php';
	include_once CTRL_PATH.'filtrado.php';
	$error = false;
	
	if (!isset($_GET['descripcion']) || !isset($_GET['persona']) || !isset($_GET['fecha']))
    {
		require VIEW_PATH.'vista_BUSCAR.php';
	}
	else{
		$consultas = array();
		$errores = false;


		$descripcion = $_GET['descripcion'];
		$persona = $_GET['persona'];
		$fecha = $_GET['fecha'];
		$combodescripcion = $_GET['combodescripcion'];
		$combopersona = $_GET['combopersona'];
		$combofecha = $_GET['combofecha'];

		if($descripcion==""&&$persona==""&&$fecha==""){
			$error = true;
			require VIEW_PATH.'vista_BUSCAR.php';
		}
		else{
			if($descripcion!=""){
				if($combodescripcion=="LIKE"){
					$consulta1 = "descripcion ".$combodescripcion." '%".$descripcion."%'";
				}
				else{
					$consulta1 = "descripcion ".$combodescripcion." '".$descripcion."'";
				}

				array_push($consultas, $consulta1);
			}
			if($persona!=""){
				if($combopersona=="LIKE"){
					$consulta2 = "persona_contacto ".$combopersona." '%".$persona."%'";
				}
				else{
					$consulta2 = "persona_contacto ".$combopersona." '".$persona."'";
				}

				array_push($consultas, $consulta2);
			}
			if($fecha!=""){
				if($combofecha=="LIKE"){
					$consulta3 = "CAST(fecha_crea AS DATE) ".$combofecha." '%".$fecha."%'";
				}
				else{
					$consulta3 = "CAST(fecha_crea AS DATE) ".$combofecha." '".$fecha."'";
				}

				array_push($consultas, $consulta3);
			}
			$filtro = implode(' AND ', $consultas);

			$TAMANO_PAGINA = 10; 

			@$pagina = $_GET['pagina'];

			if (!$pagina) { 
				$inicio = 0; 
				$pagina=1; 
			} 
			else { 
				$inicio = ($pagina - 1) * $TAMANO_PAGINA; 
			}

			@$num_total_registros = numeroRegistros($filtro);

			$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 

			@$resultado = ofertasBusqueda($inicio, $TAMANO_PAGINA, $filtro);

			require VIEW_PATH.'vista_BUSCAR.php';
		}
	}
}
else{
	header('Location: ?ctrl=logout');
}
?>