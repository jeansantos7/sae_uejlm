
<!-- aqui estara el crud de de usuario-->

<script language="JavaScript">
var h=false;
</script>

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
<h1> Vista de Representante</h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a>
    
  </ul>
  <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

  <table class="table table-striped" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Cedula</th>
        <th> Apellido</th>
        <th> Ocupacion</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarRepresentante as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Representante; ?>   </td>
          <td> <?php echo $value->cedula_Representante; ?>   </td>
          <td> <?php echo $value->ape_Representante . ' '. $value->nom_Representante; ?>   </td>
          <td> <?php echo $value->ocu_Representante; ?>   </td>
          <td>
            
            <a href=" <?php echo base_url('Representante/delete/')."/".$value->id_Representante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

            <a href="<?php echo base_url('Representante/edit/')."/".$value->id_Representante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
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

    <?php   foreach ($listarRepresentante as $key => $value) {?>

    <option value="<?php echo $value->cedula_Representante?>" ><?php  echo $value->cedula_Representante.' '. $value->nom_Representante ; ?></option>
    
  <?php }  ?>
      

    </select>




  </div>
<form method="POST" action="<?php echo base_url('Representante/insert'); ?>">



  <div class="form-group">

    <label for="exampleInputPassword1">Cedula del Representante </label>
    <input type="text" class="form-control" id="cedula_Representante" name="cedula_Representante" placeholder="Cedula">

  </div>


  <div class="form-group">
  
    <label for="exampleInputPassword1">Apellidos del Representante </label>
    <input type="text" class="form-control" id="ape_Representante" name="ape_Representante" placeholder="Apellidos">

  </div>
  
   <div class="form-group">
  
    <label for="exampleInputPassword1">Nombres del Representante </label>
    <input type="text" class="form-control" id="nom_Representante" name="nom_Representante" placeholder="Nombres">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1">Numero de Contacto del Representante </label>
    <input type="text" class="form-control" id="telf_Representante" name="telf_Representante" placeholder="Telefono o Celular">

  </div>

 <div class="form-group">
  
    <label for="exampleInputPassword1"> Correo  de Contacto del Representante </label>
    <input type="text" class="form-control" id="correo_Representante" name="correo_Representante" placeholder="Cedula">

  </div>

  <div class="form-group">
  
    <label for="exampleInputPassword1"> Direccion del Representante </label>
    <input type="text" class="form-control" id="dir_Representante" name="dir_Representante" placeholder="Direccion">

  </div>



<div class="form-group">
  
    <label for="exampleInputPassword1"> Ocupacion  del Representante </label>
    <input type="text" class="form-control" id="ocu_Representante" name="ocu_Representante" placeholder="Ocupacion">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Representante/insert'); ?>">


   
