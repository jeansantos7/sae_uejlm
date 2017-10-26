<?php ?>


<h1> Vista de Pensiones </h1>


<h1>   </h1>
 <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Historial de Pago</a></li>
    
  </ul>

<input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

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
          <td> <?php echo $value->id_Estudiante; ?>   </td>
          <td> <?php echo $value->cedula_Estudiante; ?>   </td>
          <td> <?php echo $value->ape_Estudiante.' '. $value->nom_Estudiante; ?>   </td>
          
          <td>
				<a href=" <?php echo base_url('Pensiones/pago/')."/".$value->cedula_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Pago</a>
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


      
  

</div>




<?php 
//print_r($selPensiones);

 ?>


    </div>
   
  </div>

</div>





<form method="post" action="<?php echo base_url('Docente/insert'); ?>">
