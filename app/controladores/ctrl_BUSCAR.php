<?php
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){

	$_SESSION['url'] = $_SERVER['QUERY_STRING'];
	
	include_once MODEL_PATH.'modelo_ofertas.php';
	include_once MODEL_PATH.'modelo_usuarios.php';
	include_once MODEL_PATH.'modelo_provincias.php';
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

		$datos = array(
		"descripcion" => $_GET['descripcion'],
		"persona" => $_GET['persona'],
		"fecha" => $_GET['fecha'],
		"combodescripcion" => $_GET['combodescripcion'],
		"combopersona" => $_GET['combopersona'],
		"combofecha" => $_GET['combofecha'],
		);
		if($datos['descripcion']=="" &&$datos['persona']=="" &&$datos['fecha']==""){
			$error = true;
			require VIEW_PATH.'vista_BUSCAR.php';
		}
		else{
			if($datos['descripcion']!=""){
				if($datos['combodescripcion']=="LIKE"){
					$consulta1 = "descripcion ".$datos['combodescripcion']." '%".$datos['descripcion']."%'";
				}
				else{
					$consulta1 = "descripcion ".$datos['combodescripcion']." '".$datos['descripcion']."'";
				}

				array_push($consultas, $consulta1);
			}
			if($datos['persona']!=""){
				if($datos['combopersona']=="LIKE"){
					$consulta2 = "persona_contacto ".$datos['combopersona']." '%".$datos['persona']."%'";
				}
				else{
					$consulta2 = "persona_contacto ".$datos['combopersona']." '".$datos['persona']."'";
				}

				array_push($consultas, $consulta2);
			}
			if($datos['fecha']!=""){
				$fecha = date('Y-m-d', strtotime($datos["fecha"]));
				if($datos['combofecha']=="LIKE"){
					$consulta3 = "CAST(fecha_crea AS DATE) ".$datos['combofecha']." '%".$datos['fecha']."%'";
				}
				else{
					$consulta3 = "CAST(fecha_crea AS DATE) ".$datos['combofecha']." '".$fecha."'";
				}

				array_push($consultas, $consulta3);
			}
			$filtro = implode(' AND ', $consultas);

			$TAMANO_PAGINA = 5; 

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