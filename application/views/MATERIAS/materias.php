<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
         <h1 class="text-titles"> <i class="zmdi zmdi-book zmdi-hc-fw"> </i> Registro de Materias <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"> Lista de Materias</a></li>
        <li><a href="#list" data-toggle="tab">Registro de Materias</a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <table class="table table-striped" id="myTable" style="text-align: left;">
                <thead>

                <th> ID</th>
                <th> Nombre de la Materia</th>
                <th> Nombre Corto</th>
                <th> Opciones</th>
                </thead>

                <tbody>
                    <?php foreach ($listarMaterias as $key => $value) { ?>
                        <tr>
                            <td> <?php echo $value->id_Materias; ?>   </td>
                            <td> <?php echo $value->nom_Materias; ?>   </td>
                            <td> <?php echo $value->nom_corto_Materias; ?>   </td>

                            <td>
                                <a href="<?php echo base_url('Materias/edit/') . "/" . $value->id_Materias; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                                <a href="<?php echo base_url('Materias/delete/') . "/" . $value->id_Materias; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a>


                            </td>
                        <?php } ?>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="tab-pane fade " id="list">

            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-4">
                    <form method="POST" action="<?php echo base_url('Materias/insert'); ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de la Materias  </label>
                            <input type="text" class="form-control" id="nom_Materias" name="nom_Materias" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                        </div>
                        
                       <div class="form-group">
                            <label for="exampleInputEmail1">Nombre corto de  la Materias  </label>
                            <input type="text" class="form-control" id="nom_corto_Materias" name="nom_corto_Materias" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                        </div>



                        

                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
                    </form>
                </div>
                <div class="col-lg-3">

                </div>
            </div>
        </div>
    </div>
</div>