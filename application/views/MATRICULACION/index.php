<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab">Consulta</a></li>
        <li><a href="#list" data-toggle="tab">Registro<div class="ripple-container"></div></a></li>
    </ul>
    <div class="tab-content">

        <div class="tab-pane fade active in" id="new">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-comments"></i>Estudiantes </div>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"> </a>
                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                        <a href="javascript:;" class="reload"> </a>
                        <a href="javascript:;" class="remove"> </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab">
                                <table class="table table-striped table-bordered table-advance table-hover" id="myTable">
                                    <thead>
                                        <tr>
                                            <th> ID</th>
                                            <th> Cedula</th>
                                            <th> Apellido</th>
                                            <th> Nombre</th>
                                            <th style="text-align: center;"> Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($selEstudiante as $key => $value) {
                                            if ($value->Estado == 0) {
                                                ?>
                                                <tr>
                                                    <td> <?php echo $value->id_Estudiante; ?>   </td>
                                                    <td> <?php echo $value->cedula_Estudiante; ?>   </td>
                                                    <td> <?php echo $value->ape_Estudiante; ?>   </td>
                                                    <td> <?php echo $value->nom_Estudiante; ?>   </td>
                                                    <td style="text-align: center;">
                                                        <button type="button" class="btn btn-default" onclick="Matriculas(<?php echo $value->cedula_Estudiante . ",'" . $value->nom_Estudiante . "'"; ?>)" data-toggle="modal" data-target="#exampleModal">
                                                            <span class="fa fa-history" aria-hidden="true"></span>Matricular
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="list">
            <div class="form-group">
                <label for="exampleInputEmail1">Curso </label>
                <select size="1" id="cursoselect2" name="cursoselect2"  onchange="mostraralumnos(this.value)" class="form-control js-example-basic-single">
                    <option value="">Seleccione</option>
                    <?php foreach ($selCursos as $key => $value) {
                        ?>
                        <option value="<?php echo $value->id_Cursos; ?>"><?php echo $value->nom_Cursos; ?></option>

                    <?php } ?>
                </select>

            </div>
            <div class="" id="datos12">

            </div>

        </div>

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
                    <form id="myForm" class="form-body">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Año lectivo </label>
                                        <select size="1" id="docenteselect" name="lectivo" class="form-control js-example-basic-single">
                                            <option value="">Seleccione</option>
                                            <?php foreach ($selLectivo as $key => $value) {
                                                ?>
                                                <option value="<?php echo $value->idLectivo; ?>"><?php echo $value->descripcion; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Curso </label>
                                        <select size="1" id="cursoselect" name="cursoselect" class="form-control js-example-basic-single">
                                            <option value="">Seleccione</option>
                                            <?php foreach ($selCursos as $key => $value) {
                                                ?>
                                                <option value="<?php echo $value->id_Cursos; ?>"><?php echo $value->nom_Cursos; ?></option>

                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Valor De Pencion </label>
                                        <input type="tex" class="form-control" name="valorpencion" value=""/>
                                        <input type="hidden" id="cedula_Estudiante_matricula" class="form-control" name="cedula_Estudiante_matricula" value="">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="gurdarmatricula" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="matricular();">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
 <script>
        function Matriculas(cedula, nombre) {


            $("#exampleModalLabel").html(nombre);
            $("#cedula_Estudiante_matricula").val(cedula);

        }
        function matricular() {

            var url = "<?php echo base_url(); ?>Matriculacion/setguardarMartricula";


            $.ajax({
                type: "POST",
                url: url,
                data: $("#myForm").serialize(),

                beforeSend: function () {
                    alert("Procesando, espere por favor...");
                },
                success: function (data)
                {
                    alert("Exito");
                    location.href = "";

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }

     
        function mostraralumnos(id) {
            var url = "<?php echo base_url('Matriculacion/datos/'); ?>" + id;
            $.ajax({
                type: "POST",
                url: url,

                beforeSend: function () {
                    alert("Procesando, espere por favor...");
                },
                success: function (data)
                {
                    //alert(data);

                    var html = '<table class="table table-hover table-light">' +
                            '<thead>' +
                            '<tr>' +
                            '<th>Cedula</th>' +
                            '<th>Nombre</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';


                    $.each(JSON.parse(data), function (i, item) {
                          //alert(item.nom_Estudiante);
                            html += "<tr><td>" + item.cedula_Estudiante + '</td>';
                              html += "<td>" + item.nom_Estudiante + '</td>';
                             html += "<td>" + item.ape_Estudiante + '</td></tr>';
                    });
                    html += '</tbody></table>';
                    $("#datos12").html(html);


                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                }
            });
        }

    </script>


