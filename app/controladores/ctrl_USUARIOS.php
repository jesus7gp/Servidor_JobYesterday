<?php 
if(isset($_SESSION['tipo']) && $_SESSION['tipo'] == "Administrador"){
    include_once MODEL_PATH.'funciones.php';
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
    
    $num_total_registros = numUsuarios();

    $total_paginas = ceil($num_total_registros / $TAMANO_PAGINA); 
    
    $resultado = usuariosPaginacion($inicio, $TAMANO_PAGINA);

    include VIEW_PATH.'vista_USUARIOS.php';
}
else{
    header('Location: ?ctrl=logout');
}
?>