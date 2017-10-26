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


<h1> Registro de Materias	</h1>



 

  <!-- Nav tabs -->
  
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <!-- Tab panes -->
   <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i>Striped Table </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-scrollable">

  <table class="table table-striped table-hover" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Nombre del Curso</th>
        <th> Nombre Corto</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarMaterias as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Materias; ?>   </td>
          <td> <?php echo $value->nom_Materias; ?>   </td>
          <td> <?php echo $value->nom_corto_Materias;?>   </td>
         
          <td>
            
            <a href=" "><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

            <a href=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Editar</a>
          </td>
      <?php  } ?>
      </tr>
      </tbody>


</div>
  </div>
    </div>
  </table>

  
  
    <div role="tabpanel" class="tab-pane" id="profile">
      

<form method="POST" action="<?php echo base_url('Materias/insert'); ?>">
 
    <label for="exampleInputEmail1">Nombre de la Materia </label>
    <input type="text" class="form-control" id="nom_Materias" name="nom_Materias" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  
  
    <label for="exampleInputEmail1">Nombre Corto de la Materia </label>
    <input type="text" class="form-control" id="nom_corto_Materias" name="nom_corto_Materias" aria-describedby="emailHelp" placeholder="Apellidos">
  


<label for="exampleInputEmail1">Seleccione al Curso</label>
</br>
<select id="id_Curso" name="id_Curso">
  <?php foreach ($selCursos as  $value) { ?>
    <option value="<?php echo $value->id_Cursos ?>"> <?php echo $value->nom_Cursos; ?>  </option>
 <?php } ?>

 </select>
</br>


  <button type="submit" class="btn btn-primary">Guardar</button>
</form>









