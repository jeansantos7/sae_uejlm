

<!-- aqui estara el crud de de usuario-->

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}



#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

<h1> Vista de Docente</h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
    
  </ul>
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <!-- Tab panes -->
  <div class="tab-content">
    

  <table class="table table-striped" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Cedula</th>
        <th> Apellidos y Nombres</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarDocente as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Docente; ?>   </td>
          <td> <?php echo $value->cedula_Docente; ?>   </td>
          <td> <?php echo $value->ape_Docente.' '. $value->nom_Docente; ?>   </td>
          
          <td>
            
            <a href=" <?php echo base_url('Docente/delete/')."/".$value->id_Docente; ?>" class="btn btn-outline btn-circle btn-sm purple">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>


            <a href="<?php echo base_url('Docente/edit/')."/".$value->id_Docente; ?>" class="btn btn-outline btn-circle dark btn-sm black">
            
            <i class="fa fa-edit"></i> Editar </a>
          </td>
      <?php  } ?>
      </tr>
      </tbody>

  </table>

    </div>
    
      
<div class="form-group" >
    <label for="exampleInputEmail1">dato </label>
    
    <select name="txtId">

    <?php   foreach ($selDocente as $key => $value) {?>

    <option value="<?php echo $value->cedula_Docente?>" ><?php  echo $value->cedula_Docente.' '. $value->nom_Docente ; ?></option>
    
  <?php }  ?>
      

    </select>




  </div>
<form method="POST" action="<?php echo base_url('Docente/insert'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" id="cedula_Docente" name="cedula_Docente" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Docente" name="ape_Docente" aria-describedby="emailHelp" placeholder="Apellidos">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Docente" name="nom_Docente" aria-describedby="emailHelp" placeholder="Nombres">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Docente" name="telf_Docente" aria-describedby="emailHelp" placeholder="Telefono">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Docente" name="correo_Docente" aria-describedby="emailHelp" placeholder="Correo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Docente" name="direc_Docente" aria-describedby="emailHelp" placeholder="Domicilio">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Docente" name="fech_nac_Docente" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Docente" name="user_Docente" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass_Docente" name="pass_Docente" placeholder="contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
//print_r($selDocente);

 ?>


    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Docente/insert'); ?>">


	