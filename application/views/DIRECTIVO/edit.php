
<?php  foreach ($datosDirectivo as $value) {?>

  <form method="POST" action="<?php echo base_url('Directivo/update'); ?>">
 
  <input type="hidden" name="id_Directivo" value=" <?php echo $value->id_Directivo; ?>">

  <div class="form-group">
  
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula</label>
    <input type="text" class="form-control" readonly="readonly" id="cedula_Directivo" name="cedula_Directivo" aria-describedby="emailHelp" value="<?php echo $value->cedula_Directivo; ?>"">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Directivo" name="ape_Directivo" aria-describedby="emailHelp"
    value=" <?php echo $value->ape_Directivo; ?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Directivo" name="nom_Directivo" aria-describedby="emailHelp" 
    value="<?php echo $value->nom_Directivo; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Directivo" name="telf_Directivo" aria-describedby="emailHelp"  
    value="<?php echo $value->telf_Directivo; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Directivo" name="correo_Directivo" aria-describedby="emailHelp" 
    value="<?php echo $value->correo_Directivo; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Directivo" name="direc_Directivo" aria-describedby="emailHelp" 
    value="<?php echo $value->direc_Directivo; ?>">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Directivo" name="fech_nac_Directivo" 
      value="<?php echo $value->fech_nac_Directivo; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Directivo" name="user_Directivo" 
       value="<?php echo $value->user_Directivo; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="pass_Directivo" name="pass_Directivo" 
    value="<?php echo $value->pass_Directivo; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit-Update</button>

<?php }

?>





