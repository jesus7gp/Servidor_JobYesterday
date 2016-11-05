<?php
include_once '../modelos/funciones.php';
$rsProvincias = selectProvincias();
?>
<h1>Modificar oferta</h1>
<FORM ACTION="" METHOD="POST">
Descripción:<input type="text" name="descripcion" value="<?=VP('descripcion',$reg["descripcion"])?>"><p>
Persona de contacto:<input type="text" name="perscont" value="<?=VP('perscont',$reg["persona_contacto"])?>"><p>
Teléfono de contacto:<input type="text" name="tlfnocont" value="<?=VP('tlfnocont',$reg["telefono"])?>"><p>
Correo electrónico:<input type="text" name="email" value="<?=VP('email',$reg["email"])?>"><p>
Dirección:<input type="text" name="direccion" value="<?=VP('direccion',$reg["direccion"])?>"><p>
Población:<input type="text" name="poblacion" value="<?=VP('poblacion',$reg["poblacion"])?>"><p>
Código postal:<input type="text" name="codpostal" value="<?=VP('codpostal',$reg["codigo_postal"])?>"><p>
Provincia:
<?php echo CreaSelect('provincia',$rsProvincias,VP('provincia',$reg["provincia"])); ?>
<p>
Estado:
<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado',$reg["estado"])); ?>

<p>
Fecha de comunicación:<input type="text" name="fechacom" value="<?=VP('fechacom',$reg["fecha_com"])?>"><p>
Psicólogo encargado:<input type="text" name="psicologo" value="<?=VP('psicologo',$reg["psicologo"])?>"><p>
Candidato seleccionado:<input type="text" name="candidato" value="<?=VP('candidato',$reg["candidato"])?>"><p>
Otros datos candidato:<input type="text" name="datoscandidato" value="<?=VP('datoscandidato',$reg["otros_datos_candidato"])?>"><p>
<input type="hidden" name="id" value="<?= $reg['id'] ?> ">
<input name="mod" type="submit" value="Guardar cambios">
<input name="mod" type="submit" value="Cancelar">
</FORM>