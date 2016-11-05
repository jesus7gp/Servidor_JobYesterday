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
	echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . 1 . "'>Primero</a> ";
	echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . $anterior . "'>Anterior</a> ";
    for ($i=1;$i<=$total_paginas;$i++){
       if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
          echo $pagina . " ";
       else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
          echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . $i . "'>" . $i . "</a> ";
    }
    echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . $siguiente . "'>Siguiente</a> ";
    echo "<a href='http://localhost/Servidor_JobYesterday/app/controladores/muestraOfertas.php?pagina=" . $total_paginas . "'>Último</a> ";
}
?>
<br><br>
<a href="../controladores/guardaOferta.php">+ Insertar nueva oferta</a>