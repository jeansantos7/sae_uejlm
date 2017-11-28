<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li role="presentation" class="active"><a href="#new" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
        <li role="presentation"><a href="#list" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <table class="table table-hover table-light" id="myTable">
                <thead>
                    <tr>
                        <th> ID</th>
                        <th> Cedula</th>
                        <th> Apellidos y Nombres</th>
                        <th style="text-align: center;"> Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listarSecretaria as $key => $value) { ?>

                        <tr>
                            <td><?php echo $value->id_Secretaria; ?>  </td>
                            <td><?php echo $value->cedula_Secretaria; ?> </td>
                            <td><?php echo $value->ape_Secretaria . ' ' . $value->nom_Secretaria; ?> </td>
                            <td style="text-align: center;">
                                <a href=" <?php echo base_url('RegistroSecretaria/delete/') . "/" . $value->id_Secretaria; ?>" class="btn btn-default"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Eliminar</a>
                                <a href="<?php echo base_url('RegistroSecretaria/edit/') . "/" . $value->id_Secretaria; ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Editar</a>
                            </td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
        <div class="tab-pane fade " id="list">
            <form method="POST" action="<?php echo base_url('RegistroSecretaria/insert'); ?>">

                <div class="form-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Cedula </label>
                            <input type="text" class="form-control" id="cedula_Directivo" name="cedula_Directivo" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombres </label>
                            <input type="text" class="form-control" id="nom_Directivo" name="nom_Directivo" aria-describedby="emailHelp" placeholder="Nombres">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Apellidos </label>
                            <input type="text" class="form-control" id="ape_Directivo" name="ape_Directivo" aria-describedby="emailHelp" placeholder="Apellidos">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fech_nac_Directivo" name="fech_nac_Directivo" placeholder="contraseña">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion </label>
                            <input type="text" class="form-control" id="direc_Directivo" name="direc_Directivo" aria-describedby="emailHelp" placeholder="Domicilio">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Usuario </label>
                            <input type="text" class="form-control" id="user_Directivo" name="user_Directivo" placeholder="contraseña">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="pass_Directivo" name="pass_Directivo" placeholder="contraseña">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono </label>
                            <input type="text" class="form-control" id="telf_Directivo" name="telf_Directivo" aria-describedby="emailHelp" placeholder="Telefono">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo </label>
                            <input type="email" class="form-control" id="correo_Directivo" name="correo_Directivo" aria-describedby="emailHelp" placeholder="Correo">
                        </div>



                    </div>
                </div>
                <div class="form-actions">
                    <div class="col-md-12">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="button" class="btn default">Cancel</button>
                    </div>
                </div>


            </form>


        </div>
    </div>