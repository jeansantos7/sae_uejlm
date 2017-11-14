<h1 class="page-title">  Vista de Estudiantes                    
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Estudiantes</span>
        </li>
    </ul>


    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-bell"></i> Action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-shield"></i> Another action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-user"></i> Something else here</a>
                </li>
                <li class="divider"> </li>
                <li>
                    <a href="#">
                        <i class="icon-bag"></i> Separated link</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Nav tabs -->


<!-- Tab panes -->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <ul class="nav nav-tabs" role="tablist">
                        Notas
                    </ul>

                </div>
                <div class="actions">
                    <input type="text" class="form-control large" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">

                            <table border="1" class="table table-bordered table-checkable">
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



                        </div>



                    </div>

                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

</div>
