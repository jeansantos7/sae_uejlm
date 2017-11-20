<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab">Consultar</a></li>
        <li><a href="#list" data-toggle="tab">Registro<div class="ripple-container"></div></a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped" id="myTable">
                        <thead>

                        <th> ID</th>
                        <th> Cedula</th>
                        <th> Apellidos y Nombres</th>
                        <th> Opciones</th>
                        </thead>

                        <tbody>
                            <?php foreach ($listarDocente as $key => $value) { ?>
                                <tr>
                                    <td> <?php echo $value->id_Docente; ?>   </td>
                                    <td> <?php echo $value->cedula_Docente; ?>   </td>
                                    <td> <?php echo $value->ape_Docente . ' ' . $value->nom_Docente; ?>   </td>

                                    <td>

                                        <a href=" <?php echo base_url('RegistroDocente/delete/') . "/" . $value->id_Docente; ?>" class="btn btn-outline btn-circle btn-sm purple">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>


                                        <a href="<?php echo base_url('RegistroDocente/edit/') . "/" . $value->id_Docente; ?>" class="btn btn-outline btn-circle dark btn-sm black">

                                            <i class="fa fa-edit"></i> Editar </a>
                                    </td>
                                <?php } ?>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="list">
            <form method="POST" action="<?php echo base_url('RegistroDocente/insert'); ?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="ape_Docente" name="ape_Docente" aria-describedby="emailHelp" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom_Docente" name="nom_Docente" aria-describedby="emailHelp" placeholder="Nombres">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="telf_Docente" name="telf_Docente" aria-describedby="emailHelp" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="fech_nac_Docente" name="fech_nac_Docente" placeholder="contraseña">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_Docente" name="user_Docente" placeholder="contraseña">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="cedula_Docente" name="cedula_Docente" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="correo_Docente" name="correo_Docente" aria-describedby="emailHelp" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="direc_Docente" name="direc_Docente" aria-describedby="emailHelp" placeholder="Domicilio">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass_Docente" name="pass_Docente" placeholder="contraseña">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

