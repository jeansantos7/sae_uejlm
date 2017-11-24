<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
         <h1 class="text-titles"> <i class="zmdi zmdi-graduation-cap zmdi-hc-fw"> </i> Registro de Cursos <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"> Cursos</a></li>
        <li><a href="#list" data-toggle="tab">Registro de Curso</a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <table class="table table-striped" id="myTable">
                <thead>

                <th> ID</th>
                <th> Nombre del Curso</th>
                <th> Nivel</th>
                <th> Opciones</th>
                </thead>

                <tbody>
                    <?php foreach ($listarCursos as $key => $value) { ?>
                        <tr>
                            <td> <?php echo $value->id_Cursos; ?>   </td>
                            <td> <?php echo $value->nom_Cursos; ?>   </td>
                            <td> <?php echo $value->nivel_Cursos; ?>   </td>

                            <td>
                                <a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                                <a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a>


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
                    <form method="POST" action="<?php echo base_url('Cursos/insert'); ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre del Curso </label>
                            <input type="text" class="form-control" id="nom_Cursos" name="nom_Cursos" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputEmail1">Nivel del Curso</label>
                            <select class="form-control" id="nivel_Cursos" name="nivel_Cursos" >
                                <option> E.G .B</option>
                                <option>B.G.U Tecnico</option>
                                <option>B.G.U Ciencias</option>
                            </select>
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