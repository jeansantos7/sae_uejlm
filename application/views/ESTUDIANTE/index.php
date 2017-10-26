
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
<h1> Vista de Estudiante</h1>





  <!-- Nav tabs -->
 <div class="col-md-6">
                  
     

        <div role="tabpanel" class="tab-pane active" id="home">                  
        <input type="text" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">

        <!-- Tab panes -->
        

        <table class="tab-pane active" id="myTable">
            <thead>
              
              <th> ID</th>
              <th> Cedula</th>
              <th> Apellido</th>
              <th> Nombre</th>
              <th> Opciones</th>
            </thead>

            <tbody>
              <?php foreach ($listarEstudiante as $key => $value) { ?>
               <tr>
                <td> <?php echo $value->id_Estudiante; ?>   </td>
                <td> <?php echo $value->cedula_Estudiante; ?>   </td>
                <td> <?php echo $value->ape_Estudiante; ?>   </td>
                <td> <?php echo $value->nom_Estudiante; ?>   </td>
                <td>
                  
                  <a href=" <?php echo base_url('Estudiante/delete/')."/".$value->id_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

                  <a href="<?php echo base_url('Estudiante/edit/')."/".$value->id_Estudiante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
                </td>
            <?php  } ?>
            </tr>
            </tbody>

        </table>

        </div>
</div>
          
            
 <div class="col-md-6">
      <div role="tabpanel" class="tab-pane active" id="profile">

      <table class="tab-pane active" id="myTable2">
        
      <form method="POST" action="<?php echo base_url('Estudiante/insert'); ?>">

      <div class="form-group">
          <label for="exampleInputEmail1">Numero de Matricula </label>
          <input type="text" class="form-control" id="matricula_Estudiante" name="matricula_Estudiante" aria-describedby="emailHelp" placeholder="000">
        </div>

       <div class="form-group">
          
          <input type="hidden" class="form-control" id="fech_matricula_Estudiante" name="fech_matricula_Estudiante" >
        </div>



        <div class="form-group">
          <label for="exampleInputEmail1">Cedula </label>
          <input type="text" class="form-control" id="cedula_Estudiante" name="cedula_Estudiante" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
        </div>


        
        <div class="form-group">
          <label for="exampleInputEmail1">Apellidos </label>
          <input type="text" class="form-control" id="ape_Estudiante" name="ape_Estudiante" aria-describedby="emailHelp" placeholder="Apellidos">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nombres </label>
          <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante" aria-describedby="emailHelp" placeholder="Nombres">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Direccion </label>
          <input type="text" class="form-control" id="dir_Estudiante" name="dir_Estudiante" aria-describedby="emailHelp" placeholder="Domicilio">
        </div>
        
        
        <div class="form-group">
          <label for="exampleInputPassword1">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="fech_nac_Estudiante" name="fech_nac_Estudiante" placeholder="contraseña">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Discapacitado </label>
          <input type="Checkbox" onClick="javascript:h=!h;" class="form-control" id="disc_Estudiante" name="disc_Estudiante" >
        

          <label for="exampleInputPassword1">Carnet de Discapacidad </label>
          <input type="text" class="form-control" onFocus="javascript:if(!h) {this.blur();}" id="carnet_Estudiante" name="carnet_Estudiante" placeholder="carnet de Discapacidad">
        </div>
        
         <div class="form-group form-md-line-input">
          <label class="col-md-3 control-label" for="form_control_1">Email
              <span class="required">*</span>
          </label>
          <div class="col-md-9">
              <input type="text" class="form-control" placeholder="" name="email">
              <div class="form-control-focus"> </div>
          </div>
        </div>


        <div class="form-group">
        
          <label for="exampleInputPassword1"> Parentesco familiar del Representante </label>
           
           <select id="parentesco_Estudiante" name="parentesco_Estudiante" >
             <option> Padre o Madre</option>
              <option>Tio (a)</option>
               <option> Abuelo (a)</option>
           </select>
        </div>

      <div class="form-group">

      <label for="exampleInputEmail1">Seleccione el representante</label>
      <select id="id_Representantes" name="id_Representantes">
        <?php foreach ($selRepresentante as  $value) { ?>
          <option value="<?php echo $value->id_Representante ?>"> <?php echo $value->ape_Representante.' '.$value->nom_Representante; ?>  </option>
       <?php } ?>

       </select>
      </div>


      <div class="form-group">
          <label for="exampleInputPassword1">Usuario </label>
          <input type="text" class="form-control" id="user_Estudiante" name="user_Estudiante" placeholder="contraseña">
        </div>

      <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="pass_Estudiante" name="pass_Estudiante" placeholder="contraseña">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1"> Valor de la Pension</label>
          <input type="text" class="form-control" id="pension_Estudiante" name="pension_Estudiante" placeholder="valor de la pension">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <?php 
      //print_r($selEstudiante);

       ?>

      </table>
      </div>

          </div>
         
        </div>

      </div>
</div>




<form method="post" action="<?php echo base_url('Estudiante/insert'); ?>">


   
