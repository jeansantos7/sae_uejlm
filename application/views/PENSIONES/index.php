<?php ?>

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
    td = tr[i].getElementsByTagName("td")[1];
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
<h1> Vista de Pensiones </h1>



 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Historial de Pago</a></li>
    
  </ul>


  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <table class="table table-striped" id="myTable">
      <thead>
        
        
        <th> Cedula</th>
        <th> Apellidos y Nombres</th>
        <th>Valor de la pension</th>
        <th> Opciones</th>
      </thead>

      
    <tbody>
        <?php foreach ($listarEstudiante_P as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->cedula_Estudiante; ?>   </td>
          <td> <?php echo $value->ape_Estudiante.' '. $value->nom_Estudiante; ?>   </td>
          <td> <?php echo $value->pension_Estudiante; ?>   </td>
          <td>
        <a href="<?php echo base_url('Pensiones/pago/')."/".$value->cedula_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Pago</a>
        <a href="<?php echo base_url('Pensiones/historial/')."/".$value->cedula_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>-Historial de Pago</a>
      </td>
      
    <?php } ?>      
      </tr>
    </tbody>      

  </table>

    </div>

    <div role="tabpanel" class="tab-pane" id="profile">
      <table class="table table-striped" id="myTable">
      <thead>
        
        
        <th> Cedula Estudiante</th>
        <th> Estudiante
        <th> Mes</th>
        <th>Valor de Pago</th>
        <th> fecha</th>
      </thead>

      
    <tbody>
        <?php foreach ($listarHistorial as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_estudiante; ?>   </td>
          <td> <?php echo $value->ape_Estudiante.' '.$value->nom_Estudiante; ?>   </td>
          <td> <?php echo $value->id_mes; ?>   </td>
          <td> <?php echo $value->valor_del_pago; ?>   </td>
          <td> <?php echo $value->fecha; ?>   </td>
          <td>
          
          </td>
          <?php } ?>

  </div>




<?php 
//print_r($selPensiones);

 ?>


    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Docente/insert'); ?>">
