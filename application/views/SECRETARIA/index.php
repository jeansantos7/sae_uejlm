<!-- aqui estara el crud de de usuario-->



<h1> Vista de Secretaria</h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
   

  <table class="table table-striped">
      <thead>
        
        <th> ID</th>
        <th> Cedula</th>
        <th> Apellido</th>
        <th> Nombre</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarSecretaria as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Secretaria; ?>   </td>
          <td> <?php echo $value->cedula_Secretaria; ?>   </td>
          <td> <?php echo $value->ape_Secretaria; ?>   </td>
          <td> <?php echo $value->nom_Secretaria; ?>   </td>
          <td>
            
            <a href=" <?php echo base_url('Secretaria/delete/')."/".$value->id_Secretaria; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

            <a href="<?php echo base_url('Secretaria/edit/')."/".$value->id_Secretaria; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
          </td>
      <?php  } ?>
      </tr>
      </tbody>

  </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      
<div class="form-group" >
    <label for="exampleInputEmail1">dato </label>
    
    <select name="txtId">

    <?php   foreach ($selSecretaria as $key => $value) {?>

    <option value="<?php echo $value->cedula_Secretaria?>" ><?php  echo $value->cedula_Secretaria.' '. $value->nom_Secretaria ; ?></option>
    
  <?php }  ?>
      

    </select>




  </div>
<form method="POST" action="<?php echo base_url('Secretaria/insert'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" id="cedula_Secretaria" name="cedula_Secretaria" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  <div role="tabpanel" class="tab-pane" id="">
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Secretaria" name="ape_Secretaria" aria-describedby="emailHelp" placeholder="Apellidos">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Secretaria" name="nom_Secretaria" aria-describedby="emailHelp" placeholder="Nombres">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Secretaria" name="telf_Secretaria" aria-describedby="emailHelp" placeholder="Telefono">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Secretaria" name="correo_Secretaria" aria-describedby="emailHelp" placeholder="Correo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Secretaria" name="direc_Secretaria" aria-describedby="emailHelp" placeholder="Domicilio">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Secretaria" name="fech_nac_Secretaria" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Secretaria" name="user_Secretaria" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass_Secretaria" name="pass_Secretaria" placeholder="contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
//print_r($selSecretaria);

 ?>


    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Secretaria/insert'); ?>">
