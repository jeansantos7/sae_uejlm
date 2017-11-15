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
                        Valor de Pensiones del Mes
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
                                        <th>Valor de Pencion</th>
                                        <th>Valor de Pencion Pagada</th>
                                        <th>Mes</th>
                                        <th>Fecha</th>
                                        <th>observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //print_r($Materiasnotas);
                                    $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
                                    
                                    foreach ($HistorilaPenciones as $key => $value) {
                                        ?>
                                        <tr>
                                            <td> <?php echo $value->valor_matricula; ?></td>
                                            <td> <?php echo $value->valor_pagado; ?></td>
                                            <td> <?php echo $meses[$value->mes_pagado]; ?></td>
                                            <td> <?php echo $value->fecha; ?></td>
                                            <td> <?php if ($value->valor_pagado==$value->valor_matricula) {echo "--";} else {    echo 'Atencion';} ?></td>
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