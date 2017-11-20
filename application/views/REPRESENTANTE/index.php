<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#new" data-toggle="tab"> Consulta</a></li>
                    <li><a href="#list" data-toggle="tab">Registro</a></li>

                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="new">
                        <table class="table table-striped" id="myTable">
                            <thead>

                            <th> ID</th>
                            <th> Cedula</th>
                            <th> Apellido</th>
                            <th> Ocupacion</th>
                            <th> Opciones</th>
                            </thead>

                            <tbody>
                                <?php foreach ($listarRepresentante as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value->id_Representante; ?>   </td>
                                        <td> <?php echo $value->cedula_Representante; ?>   </td>
                                        <td> <?php echo $value->ape_Representante . ' ' . $value->nom_Representante; ?>   </td>
                                        <td> <?php echo $value->ocu_Representante; ?>   </td>
                                        <td>

                                            <a href=" <?php echo base_url('Representante/delete/') . "/" . $value->id_Representante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Eliminar</a>

                                            <a href="<?php echo base_url('Representante/edit/') . "/" . $value->id_Representante; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Editar</a>
                                        </td>
                                    <?php } ?>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <div class="tab-pane fade active in" id="list">
                        <div class="form-group" >
                            <label for="exampleInputEmail1">dato </label>
                            <select name="txtId">
                                <?php foreach ($listarRepresentante as $key => $value) { ?>
                                    <option value="<?php echo $value->cedula_Representante ?>" ><?php echo $value->cedula_Representante . ' ' . $value->nom_Representante; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <form method="POST" action="<?php echo base_url('Representante/insert'); ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                       
                                        <input type="text" class="form-control" id="cedula_Representante" name="cedula_Representante" placeholder="Cedula">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="ape_Representante" name="ape_Representante" placeholder="Apellidos">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nom_Representante" name="nom_Representante" placeholder="Nombres">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="telf_Representante" name="telf_Representante" placeholder="Telefono o Celular">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="correo_Representante" name="correo_Representante" placeholder="Cedula">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="dir_Representante" name="dir_Representante" placeholder="Direccion">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="ocu_Representante" name="ocu_Representante" placeholder="Ocupacion">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

