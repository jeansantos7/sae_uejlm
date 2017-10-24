<?php  ?>


<h1>hola</h1>

 <form method="POST" action="<?php echo base_url('Pensiones/cargar'); ?>" id="formulario">

  

       
<table class="table table-striped" id="myTable">
      <thead>
        
        
        <th> Cedula</th>
        <th> Apellidos y Nombres</th>
        
      </thead>

      
		 <tbody>
        <?php foreach ($historialEstudiante as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_estudiante; ?>   </td>
          <td> <?php echo $value->ape_Estudiante.' '.$value->nom_Estudiante; ?>   </td>
          <td> <?php echo $value->id_mes; ?>   </td>
          <td> <?php echo $value->valor_del_pago; ?>   </td>
          <td> <?php echo $value->fecha; ?>   </td>
          <td>
          
          </td>
          <?php } ?>

  </table>

    </div>