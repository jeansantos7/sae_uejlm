
<?php  foreach ($datosEstudiante as $value) {?>

  
 <script src="<?php echo base_url('http://code.jquery.com/jquery-1.9.1.js')?>" </script>
  <script src="<?php echo base_url('http://code.jquery.com/ui/1.10.1/jquery-ui.js')?>" </script>
 
  <form method="POST" action="<?php echo base_url('RegistroEstudiante/update'); ?>">
  <input type="hidden" name="id_Docente" value=" <?php echo $value->id_Estudiante; ?>">

<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-modal-help">
                        <i class="zmdi zmdi-help-outline"></i>

                    </a>
                </li>
            </ul>
        </nav>
    <!-- Content page -->
   
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Registro de Estudiantes <small>Datos Estudiantiles</small></h1>
      </div>
      <p class="lead"> Mision Y Vision</p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         
          </ul>
          <div id="myTabContent" class="tab-content">
            
            
             

              <div class="container-fluid">
                <div class="row">
                <div class="col-xs-12 col-md-4 col-md-offset-1">
                      <form action="">
                      <div class="form-group label-floating">
                        <label class="control-label">Cedula</label>
                        <input class="form-control" type="text"
                        id="cedula_Estudiante" name="cedula_Estudiante"
                        value=" <?php echo $value->cedula_Estudiante; ?>">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Apellidos</label>
                        <input class="form-control" type="text"
                        id="ape_Estudiante" name="ape_Estudiante"
                         value=" <?php echo $value->ape_Estudiante; ?>">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Nombres</label>
                        <input class="form-control" type="text"
                        id="nom_Estudiante" name="nom_Estudiante"
                         value=" <?php echo $value->nom_Estudiante; ?>">
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
                            value=" <?php echo $value->carnet_Estudiante; ?>">
                      </div>


                      
                        
                      
                  </div>
                  <div class="col-xs-12 col-md-4 col-md-offset-1">
                      
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





