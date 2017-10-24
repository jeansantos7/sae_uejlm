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


<h1> Registro de Cursos	</h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Lista de Cursos </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registrar Cursos</a></li>
    
  </ul>
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

  <table class="table table-striped" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Nombre del Curso</th>
        <th> Nombre Corto</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarCursos as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Cursos; ?>   </td>
          <td> <?php echo $value->nom_Cursos; ?>   </td>
          <td> <?php echo $value->nom_corto_Cursos;?>   </td>
         
          <td>
            
            <a href=" "><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

            <a href=""><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
          </td>
      <?php  } ?>
      </tr>
      </tbody>

  </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      
<div class="form-group" >
 
  </div>
<form method="POST" action="<?php echo base_url('Cursos/insert'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Curso </label>
    <input type="text" class="form-control" id="nom_Cursos" name="nom_Cursos" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre Corto del Curso </label>
    <input type="text" class="form-control" id="nom_corto_Cursos" name="nom_corto_Cursos" aria-describedby="emailHelp" placeholder="Apellidos">
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>




    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Cursos/inser'); ?>">
