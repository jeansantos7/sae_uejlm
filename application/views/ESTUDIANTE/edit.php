
<?php  foreach ($datosEstudiante as $value) {?>

<script language="JavaScript">
var h=false;
</script>
  <form method="POST" action="<?php echo base_url('Estudiante/update'); ?>">
 
  <input type="hidden" name="id_Estudiante" value="<?php echo $value->id_Estudiante; ?>">

  <div class="form-group">
  
   
  </div>
  <div class="form-group">
    <div class="form-group">
    <label for="exampleInputEmail1">Numero de Matricula </label>
    <input type="text" class="form-control" id="matricula_Estudiante" name="matricula_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->matricula_Estudiante; ?>">
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">Fecha de matricula</label>
    <input type="date" class="form-control" id="fech_matricula_Estudiante" name="fech_matricula_Estudiante" value="<?php echo $value->fech_matricula_Estudiante; ?>" >
  </div>



  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" id="cedula_Estudiante" name="cedula_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->cedula_Estudiante; ?>">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Estudiante" name="ape_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->ape_Estudiante; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante" aria-describedby="emailHelp" 
    value="<?php echo $value->nom_Estudiante; ?>">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="dir_Estudiante" name="dir_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->dir_Estudiante; ?>">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Estudiante" name="fech_nac_Estudiante" 
    value="<?php echo $value->fech_nac_Estudiante; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Discapacitado </label>
    <input type="Checkbox" onClick="javascript:h=!h;" class="form-control" id="disc_Estudiante" name="disc_Estudiante" value="<?php echo $value->disc_Estudiante; ?>">
  

    <label for="exampleInputPassword1">Carnet de Discapacidad </label>
    <input type="text" class="form-control" onFocus="javascript:if(!h) {this.blur();}" id="carnet_Estudiante" name="carnet_Estudiante" value="<?php echo $value->carnet_Estudiante; ?>">
  </div>

  <div class="form-group">

    <label for="exampleInputPassword1">Cedula del Representante </label>
    <input type="text" class="form-control" id="cedula_Representante_Estudiante" name="cedula_Representante_Estudiante" value="<?php echo $value->cedula_Representante_Estudiante; ?>">

  </div>


  <div class="form-group">
  
    <label for="exampleInputPassword1">Apellidos del Representante </label>
    <input type="text" class="form-control" id="ape_Representante_Estudiante" name="ape_Representante_Estudiante" value="<?php echo $value->ape_Representante_Estudiante; ?>">

  </div>
  
   <div class="form-group">
  
    <label for="exampleInputPassword1">Nombres del Representante </label>
    <input type="text" class="form-control" id="nom_Representante_Estudiante" name="nom_Representante_Estudiante" value="<?php echo $value->nom_Representante_Estudiante; ?>">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1">Numero de Contacto del Representante </label>
    <input type="text" class="form-control" id="telf_Representante_Estudiante" name="telf_Representante_Estudiante" value="<?php echo $value->telf_Representante_Estudiante; ?>">

  </div>

 <div class="form-group">
  
    <label for="exampleInputPassword1"> Correo  de Contacto del Representante </label>
    <input type="text" class="form-control" id="correo_Representante_Estudiante" name="correo_Representante_Estudiante" value="<?php echo $value->correo_Representante_Estudiante; ?>">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1"> Direccion del Representante </label>
    <input type="text" class="form-control" id="dir_Representante_Estudiante" name="dir_Representante_Estudiante" value="<?php echo $value->dir_Representante_Estudiante; ?>">

  </div>


  <div class="form-group">
  
    <label for="exampleInputPassword1"> Parentesco familiar del Representante </label>
     
     <select id="parentesco_Representante_Estudiante" name="parentesco_Representante_Estudiante" value="<?php echo $value->parentesco_Representante_Estudiante; ?>">
       <option> Padre o Madre</option>
        <option>Tio (a)</option>
         <option> Abuelo (a)</option>
     </select>
  </div>

<div class="form-group">
  
    <label for="exampleInputPassword1"> Ocupacion  del Representante </label>
    <input type="text" class="form-control" id="ocup_Representante_Estudiante" name="ocup_Representante_Estudiante" value="<?php echo $value->ocup_Representante_Estudiante; ?>">

  </div>


<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Estudiante" name="user_Estudiante" value="<?php echo $value->user_Estudiante; ?>">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass_Estudiante" name="pass_Estudiante" value="<?php echo $value->pass_Estudiante; ?>">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"> Valor de la Pension</label>
    <input type="text" class="form-control" id="pension_Estudiante" name="pension_Estudiante" placeholder="valor de la pension" value="<?php echo $value->pension_Estudiante ?> ">
  </div>


  <button type="submit" class="btn btn-primary">Submit-Update</button>

<?php }

?>





