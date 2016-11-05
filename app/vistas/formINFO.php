<h1>Información completa</h1>
<FORM ACTION="" METHOD="POST">
Descripción: <?php echo $reg['descripcion']?><p>
Persona de contacto: <?php echo $reg['persona_contacto']?><p>
Teléfono de contacto: <?php echo $reg['telefono']?><p>
Correo electrónico: <?php echo $reg['email']?><p>
Dirección: <?php echo $reg['direccion']?><p>
Población: <?php echo $reg['poblacion']?><p>
Código postal: <?php echo $reg['codigo_postal']?><p>
Provincia: <?php echo $reg['provincia']?><p>
Estado: <?php echo $reg['estado']?><p>
Fecha de creación: <?php echo stringFecha($reg['fecha_crea'])?><p>
Fecha de comunicación: <?php echo $reg['fecha_com']?><p>
Psicólogo encargado: <?php echo $reg['psicologo']?><p>
Candidato seleccionado: <?php echo $reg['candidato']?><p>
Otros datos candidato: <?php echo $reg['otros_datos_candidato']?><p>
<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
<input name="volver" type="submit" value="Volver">
</FORM>