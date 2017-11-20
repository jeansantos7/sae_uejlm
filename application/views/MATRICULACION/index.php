
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Estudiante</span>
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
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>

                    </ul>

                </div>
                <div class="actions">
                    <input type="text" class="form-control large" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
                </div>
            </div>
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


                            <div role="tabpanel" class="tab-pane active" id="home">
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

                            <div role="tabpanel" class="tab-pane" id="profile">

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
                        <form id="myForm" class="form-body" method="POST" action="">
                            <fieldset>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valor De Pencion </label>
                                    <input type="tex" class="form-control" name="valorpencion" value="100">
                                    <input type="hidden" id="cedula_Estudiante_matricula" class="form-control" name="cedula_Estudiante_matricula" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Año lectivo </label>
                                    <select size="1" id="docenteselect" name="lectivo" class="form-control js-example-basic-single">
                                        <option value="1">Seleccione</option>
                                        <?php foreach ($selLectivo as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value->idLectivo; ?>"><?php echo $value->descripcion; ?></option>
                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Curso </label>
                                    <select size="1"id="cursoselect" name="cursoselect" class="form-control js-example-basic-single">
                                        <option value="4">Seleccione</option>
                                        <?php foreach ($selCursos as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value->id_Cursos; ?>"><?php echo $value->nom_Cursos; ?></option>

                                        <?php } ?>
                                    </select>

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

