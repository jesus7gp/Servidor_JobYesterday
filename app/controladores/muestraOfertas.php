<?php 
include_once '../modelos/funciones.php';
include_once 'filtrado.php';
 
    $TAMANO_PAGINA = 3; 

    @$pagina = $_GET['pagina']; 
    if (!$pagina) { 
            $inicio = 0; 
            $pagina=1; 
    } 
    else { 
            $inicio = ($pagina - 1) * $TAMANO_PAGINA; 
    }
    
    $num_total_registros = numOfertas();

    $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 
        
    $resultado = ofertasPaginacion($inicio, $TAMANO_PAGINA);

    require '../vistas/vista_muestraOfertas.php';
?>
