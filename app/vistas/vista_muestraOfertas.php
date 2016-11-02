<?php
echo "Número de registros encontrados: " . $num_total_registros . "<br>";
echo "Se muestran páginas de " . $TAMANO_PAGINA . " registros cada una<br>";
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>"; 
?>
<table>
	<?php muestraOfertas($resultado); ?>
</table>
<?php 
if ($total_paginas > 1){
    for ($i=1;$i<=$total_paginas;$i++){
       if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
          echo $pagina . " ";
       else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
          echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . $i . "'>" . $i . "</a> ";
    }
}
?>
<br><br>
<a href="../controladores/guardaOferta.php">+ Insertar nueva oferta</a>