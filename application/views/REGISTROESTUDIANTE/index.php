  <form method="POST" action="<?php echo base_url('RegistroEstudiante/insert'); ?>">

<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
    <nav class="full-box dashboard-Navbar">
      <ul class="full-box list-unstyled text-right">
        <li class="pull-left">
          <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
        </li>
        <li>
          <a href="#!" class="btn-Notifications-area">
            <i class="zmdi zmdi-notifications-none"></i>
            <span class="badge">7</span>
          </a>
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
        <h1 class="text-titles"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments <small>Payments</small></h1>
      </div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#new" data-toggle="tab">Lista de Estudiante</a></li>
              <li><a href="#list" data-toggle="tab">Registro de Estudiante</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Cedula</th>
                      <th class="text-center">Apellidos y Nombres</th>
                      <th class="text-center">Direccion</th>
                      <th class="text-center">$Valor Pension</th>
                      <th class="text-center">Representante</th>
                      <th class="text-center">Usuario</th>
                      <th class="text-center">Matriculado</th>
                      <th class="text-center">Opciones</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($listarEstudiante as $key => $value) { ?>
                    <tr>
                      <td> <?php echo $value->id_Estudiante; ?></td>
                      <td><?php echo $value->cedula_Estudiante; ?></td>
                      <td><?php echo $value->ape_Estudiante.' '.$value->nom_Estudiante; ?></td>
                      <td><?php echo $value->dir_Estudiante; ?></td>
                      <td><?php echo $value->pension_Estudiante; ?></td>
                      <td>Period 1</td>
                      <td><?php echo $value->user_Estudiante; ?></td>
                      
                      <td> 
                    <?php 
                      $array_opciones = array("Si" => "1", "No" =>"0");
                      foreach ($array_opciones as $indice => $valor) {
                                                    if ($value->Estado == $valor) {
                                                        echo $indice;
                                                    }
                                                }

                    ?>

                      </td>
                      <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                           <a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                    </tr>
                     <?php } ?>
                  </tbody>
                </table>
               
              </div>
              
            </div>
              <div class="tab-pane fade" id="list">

              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-md-6 col-md-offset-1">
                      <form action="">
                      <div class="form-group label-floating">
                        <label class="control-label">Student Code</label>
                        <textarea class="form-control"></textarea>
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Amount</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-group label-floating">
                        <label class="control-label">Subscription</label>
                        <input class="form-control" type="text">
                      </div>
                      <div class="form-group">
                        <label class="control-label">Date</label>
                        <input class="form-control" type="date">
                      </div>
                      <div class="form-group">
                            <label class="control-label">Period</label>
                            <select class="form-control">
                              <option>Period 1</option>
                              <option>Period 2</option>
                              <option>Period 3</option>
                              <option>Period 4</option>
                              <option>Period 5</option>
                            </select>
                        </div>
                        <p class="text-center">
                          <button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
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