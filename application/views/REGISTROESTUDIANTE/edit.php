
<?php  foreach ($datosEstudiante as $value) {?>

  
 
  
  
  

<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-face zmdi-hc-fw"> </i> Registro de Estudiantes <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 22px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
       
        <li class="active"><a href="#list" data-toggle="tab">Registro de Estudiante</a></li>
    </ul>
    <div class="row">
        <div class="col-lg-12">
            <div id="myTabContent" class="tab-content">
                
                

                    <div class="container-fluid">
                        <div class="row">
                            <form method="POST" action="<?php echo base_url('RegistroEstudiante/update'); ?>">
             <input type="hidden" name="id_Estudiante" value=" <?php echo $value->id_Estudiante; ?>">



              <div class="container-fluid">
                <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-1">
                      <form action="">
                      <div class="form-group label-floating">
                        <label >Cédula</label>
                        <input class="form-control" type="text"
                        id="cedula_Estudiante" name="cedula_Estudiante"
                        value="<?php echo $value->cedula_Estudiante; ?>"
                        onkeypress="return soloNumeros(event)">
                      </div>
                      <div class="form-group label-floating">
                        <label class="">Apellidos</label>
                        <input class="form-control" type="text"
                        id="ape_Estudiante" name="ape_Estudiante"
                         value="<?php echo $value->ape_Estudiante; ?>"
                         onkeypress="return soloLetras(event)" style="text-transform:uppercase;">
                      </div>
                      <div class="form-group label-floating">
                        <label class="">Nombres</label>
                        <input class="form-control" type="text"
                        id="nom_Estudiante" name="nom_Estudiante"
                         value="<?php echo $value->nom_Estudiante; ?>"
                         onkeypress="return soloLetras(event)" style="text-transform:uppercase;">
                      </div>
                      <div class="form-group">
                        <label class="">Fecha de nacimiento</label>
                        <input class="form-control" type="date"
                        id="fech_nac_Estudiante" name="fech_nac_Estudiante"
                         value=" <?php echo $value->fech_nac_Estudiante; ?>" style="text-transform:uppercase;">
                      </div>
                      <label class=""> Sexo</label>
                       <select onchange="Valor(this.value)" name="sexo" id="seo"  class="form-control" >
                                        <option ><?php echo $value->sexo; ?></option>
                                        <option value="Mujer" >Mujer</option>
                                        <option  value="Hombre">Hombre</option>
                                        
                                    </select>
                      <div class="form-group label-floating">
                        <label class="">Dirección</label>
                        <input class="form-control" type="text"
                        id="dir_Estudiante" name="dir_Estudiante"
                         value="<?php echo $value->dir_Estudiante; ?>" style="text-transform:uppercase;">
                      </div>
                      <div class="form-group">
                        <label class="">Discapacitado</label>
                        <input  type="checkbox" onClick="javascript:h = !h;"
                        id="disc_Estudiante" name="disc_Estudiante">
                      </div>


                      
                      <div class="form-group label-floating">
                        <label class="">Carnet de Discapacidad</label>
                        <input class="form-control" type="text"
                        id="carnet_Estudiante" name="carnet_Estudiante"
                        onFocus="javascript:if (!h) {
                                                    this.blur();
                                                }" 
                            value="<?php echo $value->carnet_Estudiante; ?>"
                            onkeypress="return soloNumeros(event)">
                      </div>

    
                      
                        
                      
                  </div>
                  <div class="col-xs-12 col-md-4 col-md-offset-1">

                  <label for="exampleInputEmail1">Representante </label>
                           
                    
                    
                     <?php 
                      $lista1 = array();
                     foreach ($selRepresentante as $key => $valueq) {
                                    $lista1 [$valueq->cedula_Representante] = $valueq->ape_Representante.' '.$valueq->nom_Representante;
                                    
                                } 
                                echo form_dropdown('idRepresentante',$lista1,$value->idRepresentante, 'class="form-control"');

                                ?>



                  <label for="exampleInputEmail1">Madre Familia </label>
                           
                    
                    
                     <?php 
                      $lista1 = array();
                     foreach ($selPadresFamilia as $key => $valueq1) {
                                    $lista2 [$valueq1->ced_Madre] = $valueq1->ape_Madre.' '.$valueq1->nom_Madre;
                                    
                                } 
                                echo form_dropdown('idMadre',$lista2,$value->idMadre, 'class="form-control"');

                                ?>
                            
                             <label for="exampleInputEmail1">Padre Familia </label>
                           
                    
                    
                     <?php 
                      $lista1 = array();
                     foreach ($selPadresFamilia as $key => $valueq2) {
                                    $lista3 [$valueq2->ced_Padre] = $valueq2->ape_Padre.' '.$valueq2->nom_Padre;
                                    
                                } 
                                echo form_dropdown('idPadre',$lista3,$value->idPadre, 'class="form-control"');

                                ?>

                      
                      <div class="form-group label-floating">
                        <label class="">Usuario</label>
                        <input class="form-control" type="text"
                        id="user_Estudiante" name="user_Estudiante"
                         value="<?php echo $value->user_Estudiante; ?>" style="text-transform:uppercase;">
                      </div>
                      <div class="">
                        <label class="">Contraseña</label>
                        <input class="form-control" type="text"
                        id="pass_Estudiante" name="pass_Estudiante"
                         value="<?php echo $value->pass_Estudiante; ?>">
                      </div>
                      
                     
                        <p class="text-center">
                          <button type="submit"  class="btn btn-info btn-raised btn-sm"> <i class="zmdi zmdi-floppy"></i>  Actualizar Registro </button>   
                          <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/RegistroEstudiante/'); ?>"> </i> Cancelar</button>
                        </p>
                      </form>
                    
                      <?php }

?>

                        </div>
                    </div>

               
            </div>
        </div>
    </div>



</div>

<script>
$('#myTable').DataTable();
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
     function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 1234567890";
       especiales = "";
       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }
        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
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
