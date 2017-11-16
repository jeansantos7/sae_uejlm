<h1 class="page-title">  Vista de Mis Estudiantes                    
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Mis Estudiantes</span>
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
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mis Estudiantes </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Observaciones</a></li>
                        <li role="presentation"><a href="#profileOB" aria-controls="profileOB" role="tab" data-toggle="tab">Bitácora</a></li>
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
                            <table border="1" class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th>Dirrecion</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($misEstudiantes as $key => $value) {
                                        $curso = $value->id_Cursos;
                                        $proferos = $value->cedula_Curso_Tutor;
                                        ?>
                                        <tr>
                                            <td><?php echo $value->cedula_Estudiante; ?></td>
                                            <td><?php echo $value->nom_Estudiante; ?></td>
                                            <td><?php echo $value->ape_Estudiante; ?></td>
                                            <td><?php echo $value->dir_Estudiante; ?></td>
                                            <td><button type="button" class="btn btn-primary" onclick="notasestudiantes(<?php echo $value->cedula_Estudiante; ?>)" data-toggle="modal" data-target="#exampleModal">
                                                    Notas                                                </button></td>
                                        </tr>
                                    <?php }
                                    ?>


                                </tbody>
                            </table>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><div id="Nombreestu"></div> <div id="Curosestu"></div></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" style="overflow-y: scroll;" >
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12" id="12222"></div>
                                                    <form name="form12334" id="form12334" method="POST" id="observacion">
                                                        <div class="col-md-12" >
                                                            <input type="hidden" id="profeob" name="profeob" value="">
                                                            <input type="hidden" id="cedulaob" name="cedulaob" value="">
                                                            <label><h5>Incidencia</h5> </label>

                                                            <select class="form-control" id="Incidencia" name="Incidencia">
                                                                <option value="FaltaJustificada">Faltas Justificadas</option>
                                                                <option value="FaltaInjustificada">Faltas Injustificadas </option>
                                                                <!--<option value="At">Llamada de Atención</option>-->
                                                            </select>
                                                            <br>
                                                            <label><h5>Observación</h5> </label>
                                                            <textarea id="observ" class="form-control" name="observ" ></textarea>
                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="guardar()">Save changes</button>

                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <form name="form23" method="POST" action="<?php echo base_url(); ?>Docente/Obser12">
                                <div class="form-group">
                                    <input type="hidden" id="curso12" name="curso12" value="<?php echo $curso; ?>">
                                    <input type="hidden" id="profeob" name="profeob12" value="<?php echo $proferos; ?>">

                                    <label><h5>Incidencia</h5> </label>

                                    <select class="form-control" id="Incidencia" name="Incidencia12">
                                        <option value="FaltaJustificada">Faltas Justificadas</option>
                                        <option value="FaltaInjustificada">Faltas Injustificadas </option>
                                        <!--<option value="At">Llamada de Atención</option>-->
                                    </select>
                                    <br>
                                    <label><h5>Observación</h5> </label>
                                    <textarea id="observ" class="form-control" name="observ12" ></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Save changes</button>

                            </form>                          
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profileOB">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>


</div>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function notasestudiantes(cedula) {
        var url = "<?php echo base_url(); ?>Docente/estudiantesnotas";
        var parametros = {
            "cedulaestudiante": cedula
        };
        var IDmateria = 1;
        var IDCurso = 1;
        var CIProfe = 1;

        $.ajax({
            data: parametros,
            url: url,
            type: 'POST',
            beforeSend: function (xhr) {
                alert("Procesando");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);

            },
            success: function (data, textStatus, jqXHR) {
                var html = '<table class="table table-bordered table-hover ">' +
                        '<thead>' +
                        '<th>ID</th>' +
                        '<th>Cedula</th>' +
                        '<th>Nombre</th>' +
                        '<th>NotaP1Q1</th>' +
                        '<th>NotaP2Q1</th>' +
                        '<th>NotaP3Q1</th>' +
                        '<th>NotaPOQ1</th>' +
                        '<th>NotaEQ1</th>' +
                        '<th>NotaEPQ1</th>' +
                        '<th>NotaPROQ1</th>' +
                        '<th>NotaP1Q2</th>' +
                        '<th>NotaP2Q2</th>' +
                        '<th>NotaP3Q2</th>' +
                        '<th>NotaPOQ2</th>' +
                        '<th>NotaEQ2</th>' +
                        '<th>NotaEPQ2</th>' +
                        '<th>NotaPROQ2</th>' +
                        '<th>TOTAL</th>' +
                        '<th>NOTARE</th>' +
                        '<th>NOTAREME</th>' +
                        '<th>NOTAEXA</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                var con = 1;

                $.each(JSON.parse(data), function (i, item) {
                    //alert(item.nom_Estudiante);
                    html += "<tr>";
                    html += "<td>" + item.nom_Materias + '</td>';
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial1q1_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial2q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial3q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examenq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examen_porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq1_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial1q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial2q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial3q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.porcentajeq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examenq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examen_porcentajeq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='total" + con + "' value='" + (parseFloat(item.promedioq1_MateriasNotas) + parseFloat(item.promedioq2_MateriasNotas)) + "' style=' width: 52px;'></td>";

                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notarec_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notareme_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='notaq2" + con + "' value='" + item.notaexa_MateriasNotas + "' style=''></td>";
                    html += "</tr>";

                    con++;
                    $("#Nombreestu").html(item.ape_Estudiante);
                    $("#Curosestu").html(item.nom_Cursos);




                    $("#profeob").val(item.id_profesor_MateriasNotas);
                    $("#cedulaob").val(item.cedula_Estudiante);



                });

                html += '</tbody></table>';
                html += '';
                $("#12222").html(html);


            }



        });
    }
    function guardar() {
        var url = "<?php echo base_url(); ?>Docente/Obser";
        $.ajax({
            data: $("#form12334").serialize(),
            type: 'POST',
            url: url,
            beforeSend: function (xhr) {
                alert("Procesando...");
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);

            },
            success: function (data, textStatus, jqXHR) {
                window.location = "../Docente/CursoTutor";


            }

        });


    }
</script>

