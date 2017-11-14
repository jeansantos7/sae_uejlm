<h1 class="page-title">  Vista de Materias                     
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Mis Materias</span>
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

                    </ul>

                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <table border="" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Materia</th>
                                        <th>Curso</th>
                                        <th>Hora</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?Php foreach ($MisMaterias as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $value->id_materias_Asignacion;?></td>
                                            <td><?php echo $value->nom_Materias;?></td>
                                            <td><?php echo $value->nom_Cursos;?></td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>





                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">


                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mostrarhistorial">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>

</script>

