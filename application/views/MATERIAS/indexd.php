<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ingreso de notas </a></li>
        <li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Notas Sup</a></li>
        <li><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">Ver Notas</a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="home">
            <div class="col-md-3">
                <div class="form-body">
                    <div class="form-group">
                        <label for="s">Numero de Matricula </label>
                        <select size="1" id="s" name="s" class="form-control" onchange="matriaestudiante(this.value)">
                            <option value="">Seleccione</option>
                            <?php foreach ($lista_materias as $key => $value) {
                                ?>
                                <option value="<?php echo $value->id_Materias . ',' . $value->id_cursos; ?>"><?php echo "Materia: " . $value->nom_Materias . ' Curso: ' . $value->nom_Cursos . ' ' . $value->id_cursos; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-body">
                    <div class="form-group">
                        <form id="notasdatos" class="" name="form" method="POST" action="<?php echo base_url('MateriaNotas/NotasALumnos'); ?>">


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="profile">
            <div class="">
                <div class="col-md-3">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="s">Numero de Matricula </label>
                            <select size="1" id="s" name="s" class="form-control" onchange="matriaestudiantesub(this.value)">
                                <option value="">Seleccione</option>
                                <?php foreach ($lista_materias as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id_Materias . ',' . $value->id_cursos; ?>"><?php echo "Materia: " . $value->nom_Materias . ' Curso: ' . $value->nom_Cursos . ' ' . $value->id_cursos; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-body">
                        <div class="form-group">
                            <form id="notasdatossuple" class="" name="form" method="POST">


                            </form>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="bodyData" style="height: 200px;">
                                            <form id="form" name="form"  method="POST" action="">
                                                <div class="row">
                                                    <input type='hidden' name='curso' id="curso" value=''>
                                                    <input type='hidden' name='materia' id="materia" value=''>
                                                    <input type='hidden' name='profesor' id="profesor" value=''>
                                                    <input type='hidden' name='cedula' id='cedula' value=''>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Supletorio </label>
                                                            <input type="text" class="form-control" id="suple" name="suple" aria-describedby="suple" placeholder="Nota">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Remedial </label>
                                                            <input type="text" class="form-control" id="remedial" name="remedial" aria-describedby="remedial" placeholder="Nota">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Examen de gracia </label>
                                                            <input type="text" class="form-control" id="examegracia" name="examegracia" aria-describedby="examegracia" placeholder="Nota">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="subirnotaespecial()">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade " id="profile2">

            <div class="">
                <div class="col-md-3">
                    <div class="form-body">
                        <div class="form-group">
                            <label for="s">Numero de  </label>
                            <select size="1" id="s" name="s" class="form-control" onchange="matriaestudiantevista(this.value)">
                                <option value="">Seleccione</option>
                                <?php foreach ($lista_materias as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id_Materias . ',' . $value->id_cursos; ?>"><?php echo "Materia: " . $value->nom_Materias . ' Curso: ' . $value->nom_Cursos . ' ' . $value->id_cursos; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-body">
                        <div class="form-group" id="notasdatos2" >

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function matriaestudiantevista(id) {
            var cadena = id,
                    separador = ",", // un espacio en blanco
                    limite = 2,
                    arregloDeSubCadenas = cadena.split(separador);
            var IDmateria = arregloDeSubCadenas[0];
            var IDCurso = arregloDeSubCadenas[1];
            var CIProfe = "<?php echo $cedula; ?>";
            var parametros = {
                "id_materia": arregloDeSubCadenas[0],
                "Id_Curso": arregloDeSubCadenas[1]
            };


            var url = "<?php echo base_url(); ?>ActasCalificaciones/DatosMaterias";
            var IDmateria = $("#id_curso").val();
            var IDCurso = id;
            var CIProfe = '0';
            var htmt = "";
            $.ajax({
                data: parametros,
                url: url,
                type: 'POST',
                beforeSend: function (xhr) {

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
                    if (data) {
                        $.each(JSON.parse(data), function (i, item) {
                            //alert(item.nom_Estudiante);
                            html += "<tr><td>" + con + "</td><td><input type='hidden' name='materia' value='" + IDmateria + "'>";
                            html += "<input type='hidden' name='curso' value='" + IDCurso + "'>";
                            html += "<input type='hidden' name='profesor' value='" + CIProfe + "'>";
                            html += "<input type='hidden' name='cedu" + con + "' id='' value='" + item.cedula_Estudiante + "'>" + item.cedula_Estudiante + '</td>';
                            html += "<td>" + item.nom_Estudiante + " " + item.ape_Estudiante + '</td>';
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
                        });
                    }
                    html += '</tbody></table>';
                    html += '<input type="submit" value="Enviar" name="Enviar">';
                    $("#notasdatos2").html(html);

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
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function matriaestudiante(idmaterias) {

            var cadena = idmaterias,
                    separador = ",", // un espacio en blanco
                    limite = 2,
                    arregloDeSubCadenas = cadena.split(separador);
            var IDmateria = arregloDeSubCadenas[0];
            var IDCurso = arregloDeSubCadenas[1];
            var CIProfe = "<?php echo $cedula; ?>";
            var parametros = {
                "id_materia": arregloDeSubCadenas[0],
                "Id_Curso": arregloDeSubCadenas[1]
            };
            var url = "<?php echo base_url('MateriaNotas/ConsultaAlumnos'); ?>";
            $.ajax({
                data: parametros,
                url: url,
                type: 'POST',
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
                            //'<th>TOTAL</th>' +
                            '<th>NOTARE</th>' +
                            '<th>NOTAREME</th>' +
                            '<th>NOTAEXA</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';

                    var con = 1;
                    if (data) {
                        $.each(JSON.parse(data), function (i, item) {
                            //alert(item.nom_Estudiante);
                            html += "<tr><td>" + con + "</td><td><input type='hidden' name='materia' value='" + IDmateria + "'>";
                            html += "<input type='hidden' name='curso' value='" + IDCurso + "'>";
                            html += "<input type='hidden' name='valor' value='";
                            if (item.quimestre_MateriasNotas != null) {
                                html += "" + item.quimestre_MateriasNotas + "";
                            }
                            html += "'>";
                            html += "<input type='hidden' name='profesor' value='" + CIProfe + "'>";
                            html += "<input type='hidden' name='cedu" + con + "' id='' value='" + item.cedula_Estudiante + "'>" + item.cedula_Estudiante + '</td>';
                            html += "<td>" + item.nom_Estudiante + " " + item.ape_Estudiante + '</td>';
                            html += "<td><input type='text' onchange='calculos(" + con + ")'  class='form-control'  name='notaparcial1q1" + con + "' value='";
                            if (item.notaparcial1q1_MateriasNotas != null) {
                                html += "" + item.notaparcial1q1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")'  class='form-control'  name='notaparcial2q1" + con + "' value='";
                            if (item.notaparcial2q1_MateriasNotas != null) {
                                html += "" + item.notaparcial2q1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")'  class='form-control'  name='notaparcial3q1" + con + "' value='";
                            if (item.notaparcial3q1_MateriasNotas != null) {
                                html += "" + item.notaparcial3q1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.porcentajeq1_MateriasNotas != null & item.porcentajeq1_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='porcentaq1" + con + "' value='";
                            if (item.porcentajeq1_MateriasNotas != null) {
                                html += "" + item.porcentajeq1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control'  name='notaexamenq1" + con + "' value='";
                            if (item.nota_examenq1_MateriasNotas != null) {
                                html += "" + item.nota_examenq1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.nota_examen_porcentajeq1_MateriasNotas != null & item.nota_examen_porcentajeq1_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='porcentaexamenq1" + con + "' value='";
                            if (item.nota_examen_porcentajeq1_MateriasNotas != null) {
                                html += "" + item.nota_examen_porcentajeq1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' ";
                            if (item.promedioq1_MateriasNotas != null & item.promedioq1_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='promediototalq1" + con + "' value='";
                            if (item.promedioq1_MateriasNotas != null) {
                                html += "" + item.promedioq1_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control'  name='notaparcial1q2" + con + "' value='";
                            if (item.notaparcial1q2_MateriasNotas != null) {
                                html += "" + item.notaparcial1q2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control'  name='notaparcial2q2" + con + "' value='";
                            if (item.notaparcial2q2_MateriasNotas != null) {
                                html += "" + item.notaparcial2q2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control'  name='notaparcial3q2" + con + "' value='";
                            if (item.notaparcial3q2_MateriasNotas != null) {
                                html += "" + item.notaparcial3q2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text'  ";
                            if (item.porcentajeq2_MateriasNotas != null & item.porcentajeq2_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='porcentaq2" + con + "' value='";
                            if (item.porcentajeq2_MateriasNotas != null) {
                                html += "" + item.porcentajeq2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control'  name='notaexamenq2" + con + "' value='";
                            if (item.nota_examenq2_MateriasNotas != null) {
                                html += "" + item.nota_examenq2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.nota_examen_porcentajeq2_MateriasNotas != null & item.nota_examen_porcentajeq2_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='porcentaexamenq2" + con + "' value='";
                            if (item.nota_examen_porcentajeq2_MateriasNotas != null) {
                                html += "" + item.nota_examen_porcentajeq2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' onchange='calculos(" + con + ")' ";
                            if (item.promedioq2_MateriasNotas != null & item.promedioq2_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='promediototalq2" + con + "' value='";
                            if (item.promedioq2_MateriasNotas != null) {
                                html += "" + item.promedioq2_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.notarec_MateriasNotas != null & item.notarec_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='notarec" + con + "' value='";
                            if (item.notarec_MateriasNotas != null) {
                                html += "" + item.notarec_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.notareme_MateriasNotas != null & item.notareme_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='notareme" + con + "' value='";
                            if (item.notareme_MateriasNotas != null) {
                                html += "" + item.notareme_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "<td><input type='text' ";
                            if (item.notaexa_MateriasNotas != null & item.notaexa_MateriasNotas != "") {
                                html += "readonly='readonly'";
                            }
                            html += " class='form-control'  name='notaexa" + con + "' value='";
                            if (item.notaexa_MateriasNotas != null) {
                                html += "" + item.notaexa_MateriasNotas + "";
                            }
                            html += "' style=''></td>";
                            html += "</tr>";
                            html += "<input type='hidden' name='filas' value='" + con + "'>"

                            con++;
                        });
                    }
                    html += '</tbody></table>';
                    html += '<input type="submit" value="Enviar" name="Enviar">';

                    $("#notasdatos").html(html);
                },
                beforeSend: function (xhr) {
                    alert("Procesando, espere por favor...");

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);

                }

            });



        }

        function matriaestudiantesub(idmaterias) {

            var cadena = idmaterias,
                    separador = ",", // un espacio en blanco
                    limite = 2,
                    arregloDeSubCadenas = cadena.split(separador);
            var IDmateria = arregloDeSubCadenas[0];
            var IDCurso = arregloDeSubCadenas[1];
            var CIProfe = "<?php echo $cedula; ?>";
            var parametros = {
                "id_materia": arregloDeSubCadenas[0],
                "Id_Curso": arregloDeSubCadenas[1]
            };
            var url = "<?php echo base_url('MateriaNotas/ConsultaAlumnosSub'); ?>";
            $.ajax({
                data: parametros,
                url: url,
                type: 'POST',
                success: function (data, textStatus, jqXHR) {
                    var html = '<table class="table table-bordered table-hover ">' +
                            '<thead>' +
                            '<th>ID</th>' +
                            '<th>Cedula</th>' +
                            '<th>Nombre</th>' +
                            '<th>Nota Q1</th>' +
                            '<th>Nota Q2</th>' +
                            '<th>Total</th>' +
                            '<th>Estado</th>' +
                            '<th>Acciones</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody>';

                    var con = 1;
                    $.each(JSON.parse(data), function (i, item) {
                        //alert(item.nom_Estudiante);
                        html += "<tr><td>" + con + "</td><td><input type='hidden' name='materia' value='" + IDmateria + "'>";
                        html += "<input type='hidden' name='curso' value='" + IDCurso + "'>";
                        html += "<input type='hidden' name='profesor' value='" + CIProfe + "'>";
                        html += "<input type='hidden' name='cedu" + con + "' id='' value='" + item.cedula_Estudiante + "'>" + item.cedula_Estudiante + '</td>';
                        html += "<td>" + item.nom_Estudiante + " " + item.ape_Estudiante + '</td>';
                        html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq1_MateriasNotas + "' style=' width: 52px;'></td>";
                        html += "<td><input type='text' readonly='readonly' class='form-control' name='notaq2" + con + "' value='" + item.promedioq2_MateriasNotas + "' style=' width: 52px;'></td>";
                        html += "<td><input type='text' readonly='readonly' class='form-control' name='total" + con + "' value='" + (parseFloat(item.promedioq1_MateriasNotas) + parseFloat(item.promedioq2_MateriasNotas)) + "' style=' width: 52px;'></td>";
                        html += "<td>";
                        if ((parseFloat(item.promedioq1_MateriasNotas) + parseFloat(item.promedioq2_MateriasNotas)) >= 14) {
                            html += '<div class="alert alert-success"><strong>FELICIDADES!</strong> Aprobó </div>';

                        } else {
                            html += '<div class="alert alert-warning"><strong>Alerta!</strong> A Recuperación :C </div>';

                        }
                        html += "</td>";



                        html += '<td>';
                        if ((parseFloat(item.notaQ1_materiasnotasQuimetre) + parseFloat(item.notaQ2_materiasnotasQuimetre)) >= 14) {
                            html += '<button type="button" class="btn btn-primary" disabled data-toggle="modal" data-target="#exampleModal">\n\
                                        Ingresar Nota\n\
                                </button>';

                        } else {
                            html += '<button type="button" class="btn btn-primary" onclick="notassup(' + item.cedula_Estudiante + ',' + con + ')" data-toggle="modal" data-target="#exampleModal1">\n\
                                        Ingresar Nota\n\
                                </button>';

                        }


                        html += "</td></tr>";
                        html += "<input type='hidden' name='filas' value='" + con + "'>"
                        con++;
                    });
                    html += '</tbody></table>';
                    html += '<input type="submit" value="Enviar" name="Enviar">';
                    $("#notasdatossuple").html(html);
                },
                beforeSend: function (xhr) {
                    alert("Procesando, espere por favor...");

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);

                }

            });



        }

        function notassup(cedula, id) {
//        alert(cedula + " " + id);
            $("#materia").val($("input[name=materia]").val());
            $("#curso").val($("input[name=curso]").val());
            $("#profesor").val($("input[name=profesor]").val());
            $("#cedula").val($("input[name=cedu" + id + "]").val());

            $("#exampleModalLabel").html(cedula);
        }
        function subirnotaespecial() {

//        alert($("input[name=materia]").val());
//        alert($("input[name=curso]").val());
//        alert($("input[name=profesor]").val());
            var url = "<?php echo base_url(); ?>MateriaNotas/NotasALumnossup";

            $.ajax({
                data: $("#form").serialize(),
                type: 'POST',
                url: url,
                beforeSend: function (xhr) {
                    alert(xhr);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);

                },
                success: function (data, textStatus, jqXHR) {
                    alert(data);
                    $('#exampleModal1').modal('hide');

                }

            });
        }



        function calculos(id) {
            //alert(id);
            var nota1q1 = $("input[name=notaparcial1q1" + id + "]").val();
            var nota2q1 = $("input[name=notaparcial2q1" + id + "]").val();
            var nota3q1 = $("input[name=notaparcial3q1" + id + "]").val();
            //alert(id);
            var nota1q2 = $("input[name=notaparcial1q2" + id + "]").val();
            var nota2q2 = $("input[name=notaparcial2q2" + id + "]").val();
            var nota3q2 = $("input[name=notaparcial3q2" + id + "]").val();

            var sumanotaq1 = (parseInt(nota1q1) + parseInt(nota2q1) + parseInt(nota3q1));
            var sumanotaq2 = (parseInt(nota1q2) + parseInt(nota2q2) + parseInt(nota3q2));
            //alert(sumanota);
            var promedio1 = sumanotaq1 / 3;
            var promedio2 = sumanotaq2 / 3;
            var nota1 = promedio1 * 0.80;
            var nota2 = promedio2 * 0.80;
            // alert(promedio*0.80);

            $("input[name=porcentaq1" + id + "]").val(nota1);
            $("input[name=porcentaq2" + id + "]").val(nota2);
            var notaexamen1 = $("input[name=notaexamenq1" + id + "]").val();
            var notaexamen2 = $("input[name=notaexamenq2" + id + "]").val();
            var porcentajenota1 = (notaexamen1 * 0.20);
            var porcentajenota2 = (notaexamen2 * 0.20);
            $("input[name=porcentaexamenq1" + id + "]").val(porcentajenota1);
            $("input[name=porcentaexamenq2" + id + "]").val(porcentajenota2);

            $("input[name=promediototalq1" + id + "]").val(nota1 + porcentajenota1);
            $("input[name=promediototalq2" + id + "]").val(nota2 + porcentajenota2);

        }

    </script>
