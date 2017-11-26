
<?php  foreach ($datosEstudiante as $value) {?>

  
 
  
  <input type="hidden" name="id_Estudiante" value=" <?php echo $value->id_Estudiante; ?>">


    <!-- NavBar -->
   
    <!-- Content page -->
   
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Registro de Estudiantes <small>Datos Estudiantiles</small></h1>
      </div>
      
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         
          </ul>
          <div id="myTabContent" class="tab-content">
            
            <form method="POST" action="<?php echo base_url('RegistroEstudiante/update'); ?>">
             

              <div class="container-fluid">
                <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-1">
                      <form action="">
                      <div class="form-group label-floating">
                        <label class="control-label">Cedula</label>
                        <input class="form-control" type="text"
                        id="cedula_Estudiante" name="cedula_Estudiante"
                        value="<?php echo $value->cedula_Estudiante; ?>"
                        onkeypress="return soloNumeros(event)">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control" type="text"
                        id="ape_Estudiante" name="ape_Estudiante"
                         value="<?php echo $value->ape_Estudiante; ?>"
                         onkeypress="return soloLetras(event)">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nombres</label>
                        <input class="form-control" type="text"
                        id="nom_Estudiante" name="nom_Estudiante"
                         value="<?php echo $value->nom_Estudiante; ?>"
                         onkeypress="return soloLetras(event)">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Fecha de nacimiento</label>
                        <input class="form-control" type="date"
                        id="fech_nac_Estudiante" name="fech_nac_Estudiante"
                         value=" <?php echo $value->fech_nac_Estudiante; ?>">
                      </div>
                      <label class="control-label"> Sexo</label>
                       <select onchange="Valor(this.value)" name="sexo" id="seo"  class="form-control" >
                                        <option ><?php echo $value->sexo; ?></option>
                                        <option value="Mujer" >Mujer</option>
                                        <option  value="Hombre">Hombre</option>
                                        
                                    </select>
                      <div class="form-group label-floating">
                        <label class="control-label">Dirección</label>
                        <input class="form-control" type="text"
                        id="dir_Estudiante" name="dir_Estudiante"
                         value="<?php echo $value->dir_Estudiante; ?>">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Discapacitado</label>
                        <input  type="checkbox" onClick="javascript:h = !h;"
                        id="disc_Estudiante" name="disc_Estudiante">
                      </div>


                      
                      <div class="form-group label-floating">
                        <label class="control-label">Carnet de Discapacidad</label>
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
                        <label class="control-label">Usuario</label>
                        <input class="form-control" type="text"
                        id="user_Estudiante" name="user_Estudiante"
                         value="<?php echo $value->user_Estudiante; ?>">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Contraseña</label>
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
      </div>
    </div>
  </section>
  </form>

   

   <script language="JavaScript">
var h=false;
</script>




<script>
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

</script>


