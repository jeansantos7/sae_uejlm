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
        <h1 class="text-titles"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Pensiones<small>   Pago de Pensiones</small></h1>
      </div>
      <p class="lead">vea el pago de sus pensiones</p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#new" data-toggle="tab">Pensiones</a></li>
              
          </ul>

          
        <div class="tab-pane fade active in" id="new">
          <div id="myTabContent" class="tab-content">
            <div class="table-responsive">
                <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th class="text-center">Valor de Pensión</th>
                      <th class="text-center">Valor Pensión Pagada</th>
                      <th class="text-center">Mes</th>
                      <th class="text-center">Fecha</th>
                      <th class="text-center">Observacion</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                                    //print_r($Materiasnotas);
                                    $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
                                    
                                    foreach ($HistorilaPenciones as $key => $value) {
                                        ?>
                    <tr>
                      <td><?php echo $value->valor_matricula; ?></td>
                      <td><?php echo $value->valor_pagado; ?></td>
                      <td><?php echo $meses[$value->mes_pagado]; ?></td>
                      <td><?php echo $value->fecha; ?></td>
                      <td><?php if ($value->valor_pagado==$value->valor_matricula) {echo "--";} else {    echo 'Atencion';} ?></td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                
              </div
              
              
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>