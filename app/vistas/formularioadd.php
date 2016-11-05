<?php
include_once '../modelos/funciones.php';
$rsProvincias = selectProvincias();
?>
<h1>Añadir oferta</h1>
<FORM ACTION="" METHOD="POST">
Descripción:<input type="text" name="descripcion" value="<?=VP('descripcion','')?>"><p>
Persona de contacto:<input type="text" name="perscont" value="<?=VP('perscont','')?>"><p>
Teléfono de contacto:<input type="text" name="tlfnocont" value="<?=VP('tlfnocont','')?>"><p>
Correo electrónico:<input type="text" name="email" value="<?=VP('email','')?>"><p>
Dirección:<input type="text" name="direccion" value="<?=VP('direccion','')?>"><p>
Población:<input type="text" name="poblacion" value="<?=VP('poblacion','')?>"><p>
Código postal:<input type="text" name="codpostal" value="<?=VP('codpostal','')?>"><p>
Provincia:
<?php echo CreaSelect('provincia',$rsProvincias,VP('provincia','')); ?>
<p>
Estado:
<?php echo CreaRadio('estado',array('P'=>'Pendiente de iniciar selección','R'=>'Realizando selección','S'=>'Seleccionado candidato','C'=>'Cancelada'),VP('estado','')); ?>

<p>
Fecha de comunicación:<input type="text" name="fechacom" value="<?=VP('fechacom','')?>"><p>
Psicólogo encargado:<input type="text" name="psicologo" value="<?=VP('psicologo','')?>"><p>
Candidato seleccionado:<input type="text" name="candidato" value="<?=VP('candidato','')?>"><p>
Otros datos candidato:<input type="text" name="datoscandidato" value="<?=VP('datoscandidato','')?>"><p>
<input name="add" type="submit" value="Inserta oferta">
</FORM>