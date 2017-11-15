


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
              <h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Estudiante <small> </small></h1>
            </div>
            <p class="lead">Consulte sus Notas </p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#new" data-toggle="tab">Calificaciones</a></li>
                        
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade active in" id="new">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
                                    <tr>
                                        <th>Materia</th>
                                        <th>N1</th>
                                        <th>N2</th>
                                        <th>N3</th>
                                        <th>P</th>
                                        <th>E</th>
                                        <th>PE</th>
                                        <th>NQ1</th>
                                        <th>N1</th>
                                        <th>N2</th>
                                        <th>N3</th>
                                        <th>P</th>
                                        <th>E</th>
                                        <th>EP</th>
                                        <th>NQ2</th>
                                        <th>Promedio</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //print_r($Materiasnotas);
                                    foreach ($Materiasnotas as $key => $value) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $value->nom_Materias; ?></td>
                                            <td> <?php echo $value->notaparcial1q1_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notaparcial2q1_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notaparcial3q1_MateriasNotas; ?></td>
                                            <td> <?php echo round($value->porcentajeq1_MateriasNotas, 2); ?></td>
                                            <td> <?php echo $value->nota_examenq1_MateriasNotas; ?></td>
                                            <td> <?php echo round($value->nota_examen_porcentajeq1_MateriasNotas,2); ?></td>
                                            <td> <?php echo round($value->promedioq1_MateriasNotas,2); ?></td>
                                            <td> <?php echo $value->notaparcial1q2_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notaparcial2q2_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notaparcial3q2_MateriasNotas; ?></td>
                                            <td> <?php echo round($value->porcentajeq2_MateriasNotas, 2);?></td>
                                            <td> <?php echo $value->nota_examenq2_MateriasNotas; ?></td>
                                            <td> <?php echo round($value->nota_examen_porcentajeq2_MateriasNotas,2); ?></td>
                                            <td> <?php echo round($value->promedioq2_MateriasNotas,2); ?></td>
                                            <td> <?php echo round($value->promedioq2_MateriasNotas,2)+ round($value->promedioq1_MateriasNotas,2); ?></td>
                                            <td> <?php echo $value->notarec_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notareme_MateriasNotas; ?></td>
                                            <td> <?php echo $value->notaexa_MateriasNotas; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                </table>



                                <ul class="pagination pagination-sm">
                                    <li class="disabled"><a href="#!">«</a></li>
                                    <li class="active"><a href="#!">1</a></li>
                                    <li><a href="#!">2</a></li>
                                    <li><a href="#!">3</a></li>
                                    <li><a href="#!">4</a></li>
                                    <li><a href="#!">5</a></li>
                                    <li><a href="#!">»</a></li>
                                </ul>



                            </div>
                        </div>
                        <div class="tab-pane fade" id="list">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <form method="POST" action="<?php echo base_url('Directivo/insert'); ?>">

                            
                                    


                            </form>