
<?php  foreach ($datosRepresentante as $value) {?>

<script language="JavaScript">
var h=false;
</script>
  <form method="POST" action="<?php echo base_url('Representante/update'); ?>">
 
  <input type="hidden" name="id_Representante" value="<?php echo $value->id_Representante; ?>">




  <div class="form-group">
  
   <div class="form-group">

    <label for="exampleInputPassword1">Cedula del Representante </label>
    <input type="text" class="form-control" id="cedula_Representante" name="cedula_Representante" value="<?php echo $value->cedula_Representante; ?>">

  </div>


  <div class="form-group">
  
    <label for="exampleInputPassword1">Apellidos del Representante </label>
    <input type="text" class="form-control" id="ape_Representante" name="ape_Representante" value="<?php echo $value->ape_Representante; ?>">

  </div>
  
   <div class="form-group">
  
    <label for="exampleInputPassword1">Nombres del Representante </label>
    <input type="text" class="form-control" id="nom_Representante" name="nom_Representante" value="<?php echo $value->nom_Representante; ?>">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1">Numero de Contacto del Representante </label>
    <input type="text" class="form-control" id="telf_Representante" name="telf_Representante" value="<?php echo $value->telf_Representante; ?>">

  </div>

 <div class="form-group">
  
    <label for="exampleInputPassword1"> Correo  de Contacto del Representante </label>
    <input type="text" class="form-control" id="correo_Representante" name="correo_Representante" value="<?php echo $value->correo_Representante; ?>">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1"> Direccion del Representante </label>
    <input type="text" class="form-control" id="dir_Representante" name="dir_Representante" value="<?php echo $value->dir_Representante; ?>">

  </div>



<div class="form-group">
  
    <label for="exampleInputPassword1"> Ocupacion  del Representante </label>
    <input type="text" class="form-control" id="ocu_Representante" name="ocu_Representante" value="<?php echo $value->ocu_Representante; ?>">

  </div>

  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>



    </div>
   
  </div>

</div>

  
    



<?php }

?>





