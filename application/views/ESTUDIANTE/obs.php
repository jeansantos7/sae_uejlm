<h1 class="page-title">  Vista de Observación                    
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Observación</span>
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
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Observación </a></li>
                        
                    </ul>

                </div>
                <div class="actions">
                    <input type="text" class="form-control large" id="myInput" onkeyup="myFunction()"  placeholder="" title="Type in a name">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <h3>General</h3>
                           <table border="1" class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Incidencia</th>
                                        <th>Observación</th>
                                        <th>Fecha</th>
                                        
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
                            <h3>Individual</h3>
                           <table border="1" class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Incidencia</th>
                                        <th>Observación</th>
                                        <th>Fecha</th>
                                        
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
                        <div role="tabpanel" class="tab-pane" id="profile">

                         
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile2">
                            
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

</div>