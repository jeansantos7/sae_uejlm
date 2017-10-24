
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


<h1> Vista de Directivo</h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
    
  </ul>
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

  <table class="table table-striped" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Cedula</th>
        <th> Apellidos y Nombres</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarDirectivo as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Directivo; ?>   </td>
          <td> <?php echo $value->cedula_Directivo; ?>   </td>
          <td> <?php echo $value->ape_Directivo.' '.$value->nom_Directivo; ?>   </td>
         
          <td>
            
            <a href=" <?php echo base_url('Directivo/delete/')."/".$value->id_Directivo; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

            <a href="<?php echo base_url('Directivo/edit/')."/".$value->id_Directivo; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
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

    <?php   foreach ($selDirectivo as $key => $value) {?>

    <option value="<?php echo $value->cedula_Directivo?>" ><?php  echo $value->cedula_Directivo.' '. $value->nom_Directivo ; ?></option>
    
  <?php }  ?>
      

    </select>




  </div>
<form method="POST" action="<?php echo base_url('Directivo/insert'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Cedula </label>
    <input type="text" class="form-control" id="cedula_Directivo" name="cedula_Directivo" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Apellidos </label>
    <input type="text" class="form-control" id="ape_Directivo" name="ape_Directivo" aria-describedby="emailHelp" placeholder="Apellidos">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombres </label>
    <input type="text" class="form-control" id="nom_Directivo" name="nom_Directivo" aria-describedby="emailHelp" placeholder="Nombres">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Telefono </label>
    <input type="text" class="form-control" id="telf_Directivo" name="telf_Directivo" aria-describedby="emailHelp" placeholder="Telefono">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Correo </label>
    <input type="email" class="form-control" id="correo_Directivo" name="correo_Directivo" aria-describedby="emailHelp" placeholder="Correo">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Direccion </label>
    <input type="text" class="form-control" id="direc_Directivo" name="direc_Directivo" aria-describedby="emailHelp" placeholder="Domicilio">
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fech_nac_Directivo" name="fech_nac_Directivo" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Usuario </label>
    <input type="text" class="form-control" id="user_Directivo" name="user_Directivo" placeholder="contraseña">
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass_Directivo" name="pass_Directivo" placeholder="contraseña">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
//print_r($selDirectivo);

 ?>


    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Directivo/insert'); ?>">


  
