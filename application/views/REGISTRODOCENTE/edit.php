
<?php  foreach ($datosDocente as $value) {?>

  <form method="POST" action="<?php echo base_url('Docente/update'); ?>">
 
  <input type="hidden" name="id_Docente" value=" <?php echo $value->id_Docente; ?>">

  <div class="form-group">
  
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" readonly="readonly" id="cedula_Docente" name="cedula_Docente" aria-describedby="emailHelp" value=" <?php echo $value->cedula_Docente; ?>"">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Docente" name="ape_Docente" aria-describedby="emailHelp"
    value=" <?php echo $value->ape_Docente; ?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Docente" name="nom_Docente" aria-describedby="emailHelp" 
    value=" <?php echo $value->nom_Docente; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Docente" name="telf_Docente" aria-describedby="emailHelp"  
    value=" <?php echo $value->telf_Docente; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Docente" name="correo_Docente" aria-describedby="emailHelp" 
    value=" <?php echo $value->correo_Docente; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Docente" name="direc_Docente" aria-describedby="emailHelp" 
    value=" <?php echo $value->direc_Docente; ?>">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Docente" name="fech_nac_Docente" 
      value=" <?php echo $value->fech_nac_Docente; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Docente" name="user_Docente" 
       value=" <?php echo $value->user_Docente; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="pass_Docente" name="pass_Docente" 
    value=" <?php echo $value->pass_Docente; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit-Update</button>

<?php }

?>





