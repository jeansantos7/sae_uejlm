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
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i> Observaciones <small>Observaciones_Tutor</small></h1>
      </div>
      <p class="lead"> Este siempre Atento de las Novedades de su Estudiante </p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#new" data-toggle="tab">Incidencias Generales</a></li>
              <li><a href="#list" data-toggle="tab">Incidencia Individuales</a></li>
          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
           
              <div class="table-responsive">



              <h3>General</h3>
                           <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Incidencia</th>
                                        <th class="text-center">Observación</th>
                                        <th class="text-center">Fecha</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($Bitacora as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->id; ?></td>
                                            <td><?php echo $value->incidencia_observacioncurso; ?></td>
                                            <td><?php echo $value->observ_observacioncurso; ?></td>
                                            <td><?php echo $value->fecha_observacioncurso; ?></td>
                                        </tr>
                                    <?php }
                                    ?>


                                </tbody>
                            </table> 
            </div>
            </div>
            
         <div class="tab-pane fade" id="list">

            <div id="myTabContent" class="tab-content">
            
           
              <div class="table-responsive">



               <h3>Individual</h3>
                           <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Incidencia</th>
                                        <th class="text-center">Observación</th>
                                        <th class="text-center">Fecha</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($BitacoraIn as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->id; ?></td>
                                            <td><?php echo $value->Incidencia_observacion; ?></td>
                                            <td><?php echo $value->descr_observacion; ?></td>
                                            <td><?php echo $value->fecha; ?></td>
                                        </tr>
                                    <?php }
                                    ?>


                                </tbody>
                            </table> 
            </div>
            </div>
            </div>
        


          </div>
        </div>
      </div>
    </div>
  </section>