<?php 
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Psicólogo"){

    $_SESSION['url'] = $_SERVER['QUERY_STRING'];

    include_once MODEL_PATH.'modelo_ofertas.php';
    include_once MODEL_PATH.'modelo_usuarios.php';
    include_once MODEL_PATH.'modelo_provincias.php';
    include_once HELPERS_PATH.'helpers.php';
    include_once CTRL_PATH.'filtrado.php';

    $TAMANO_PAGINA = 5; 

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

    include VIEW_PATH.'vista_psicoMOSTRAR.php';
}
else{
    header('Location: ?ctrl=logout');
}
?>