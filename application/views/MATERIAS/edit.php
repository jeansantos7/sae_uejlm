
<?php  foreach ($datosMaterias as $value) {?>

  
 
  
  <input type="hidden" name="id_Estudiante" value=" <?php echo $value->id_Materias; ?>">


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
            
            <form method="POST" action="<?php echo base_url('Materias/update'); ?>">
             

              <div class="container-fluid">
                <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-1">
                      <form action="">
                      <div class="form-group label-floating">
                        <label class="control-label">Nombre de Materia</label>
                        <input class="form-control" type="text"
                        id="nom_Materias" name="nom_Materias"
                        value="<?php echo $value->nom_Materias; ?>"
                        >
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control" type="text"
                        id="nom_corto_Materias" name="nom_corto_Materias"
                         value="<?php echo $value->nom_corto_Materias; ?>"
                         onkeypress="return soloLetras(event)">
                      </div>
                    

    
                      
                        
                      
                  </div>
                  <div class="col-xs-12 col-md-4 col-md-offset-1">

                 
                     
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


