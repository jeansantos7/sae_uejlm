
<?php  foreach ($datosEstudiante as $value) {?>

  
 
  
  <input type="hidden" name="id_Docente" value=" <?php echo $value->id_Estudiante; ?>">


    <!-- NavBar -->
   
    <!-- Content page -->
   
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Registro de Estudiantes <small>Datos Estudiantiles</small></h1>
      </div>
      <p class="lead"> Misión Y Vision</p>
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
                        value=" <?php echo $value->cedula_Estudiante; ?>"
                        onkeypress="return soloNumeros(event)">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control" type="text"
                        id="ape_Estudiante" name="ape_Estudiante"
                         value=" <?php echo $value->ape_Estudiante; ?>"
                         onkeypress="return soloLetras(event)">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nombres</label>
                        <input class="form-control" type="text"
                        id="nom_Estudiante" name="nom_Estudiante"
                         value=" <?php echo $value->nom_Estudiante; ?>"
                         onkeypress="return soloLetras(event)">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Fecha de nacimiento</label>
                        <input class="form-control" type="date"
                        id="fech_nac_Estudiante" name="fech_nac_Estudiante"
                         value=" <?php echo $value->fech_nac_Estudiante; ?>">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Dirección</label>
                        <input class="form-control" type="text"
                        id="dir_Estudiante" name="dir_Estudiante"
                         value=" <?php echo $value->dir_Estudiante; ?>">
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
                            value=" <?php echo $value->carnet_Estudiante; ?>"
                            onkeypress="return soloNumeros(event)">
                      </div>

    
                      
                        
                      
                  </div>
                  <div class="col-xs-12 col-md-4 col-md-offset-1">

                  <label for="exampleInputEmail1">Representante </label>
                           <select size="1" id="idRepresentante" name="idRepresentante"   
                            class="form-control js-example-basic-single">
                                <option value="<?php echo $value->idRepresentante; ?>"><?php echo $value->idRepresentante; ?></option>
                                <?php foreach ($selRepresentante as $key => $valueq) {
                                    ?>
                                    <option value="<?php echo $valueq->id_Representante; ?>">
                                    <?php echo $valueq->nom_Representante . " " . $valueq->ape_Representante; ?></option>
                                <?php } ?>
                            </select>

                      
                      <div class="form-group label-floating">
                        <label class="control-label">Usuario</label>
                        <input class="form-control" type="text"
                        id="user_Estudiante" name="user_Estudiante"
                         value=" <?php echo $value->user_Estudiante; ?>">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Contraseña</label>
                        <input class="form-control" type="text"
                        id="pass_Estudiante" name="pass_Estudiante"
                         value=" <?php echo $value->pass_Estudiante; ?>">
                      </div>
                      
                     
                        <p class="text-center">
                          <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> </button>   
                        </p>
                      </form>
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

<?php }

?>


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


