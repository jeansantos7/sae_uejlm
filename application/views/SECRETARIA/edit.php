<?php  foreach ($datosSecretaria as $value) {?>

  <form method="POST" action="<?php echo base_url('Secretaria/update'); ?>">
 
  <input type="hidden" name="id_Secretaria" value=" <?php echo $value->id_Secretaria; ?>">

  <div class="form-group">
  
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" readonly="readonly" id="cedula_Secretaria" name="cedula_Secretaria" aria-describedby="emailHelp" value=" <?php echo $value->cedula_Secretaria; ?>">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Secretaria" name="ape_Secretaria" aria-describedby="emailHelp"
    value=" <?php echo $value->ape_Secretaria; ?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Secretaria" name="nom_Secretaria" aria-describedby="emailHelp" 
    value=" <?php echo $value->nom_Secretaria; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Secretaria" name="telf_Secretaria" aria-describedby="emailHelp"  
    value=" <?php echo $value->telf_Secretaria; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Secretaria" name="correo_Secretaria" aria-describedby="emailHelp" 
    value=" <?php echo $value->correo_Secretaria; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Secretaria" name="direc_Secretaria" aria-describedby="emailHelp" 
    value=" <?php echo $value->direc_Secretaria; ?>">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Secretaria" name="fech_nac_Secretaria" 
      value=" <?php echo $value->fech_nac_Secretaria; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Secretaria" name="user_Secretaria" 
       value=" <?php echo $value->user_Secretaria; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="pass_Secretaria" name="pass_Secretaria" 
    value=" <?php echo $value->pass_Secretaria; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit-Update</button>

<?php }

?>
