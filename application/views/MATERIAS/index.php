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
            <span>Materias</span>
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
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ingreso de notas </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Notas Sup</a></li>

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
                            <div class="">
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
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">

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
                                            <form id="notasdatossuple" class="" name="form" method="POST" action="<?php echo base_url('MateriaNotas/NotasALumnos'); ?>">


                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        '<tr><td><select  id="quimestre" name="quimestre" class="" onchange="">' +
                        '<option value="">Seleccione</option>' +
                        '<option value="Q1">Q1</option>' +
                        '<option value="Q2">Q2</option>' +
                        '</select></td></tr>' +
                        '<tr>' +
                        '<th>ID</th>' +
                        '<th>Cedula</th>' +
                        '<th>Nombre</th>' +
                        '<th>Parcial 1</th>' +
                        '<th>Parcial 2</th>' +
                        '<th>Parcial 3</th>' +
                        '<th>80%</th>' +
                        '<th>Examen</th>' +
                        '<th>20%</th>' +
                        '<th>Promedio</th>' +
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
                    html += "<td><input type='text' onchange='calculos(" + con + ")'  class='form-control' name='notaParcial1" + con + "' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaParcial2" + con + "' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaParcial3" + con + "' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' class='form-control' name='porcenta" + con + "' readonly='readonly' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaexamen" + con + "' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text'  class='form-control' name='porcentaexamen" + con + "' readonly='readonly' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' class='form-control' name='promediototal" + con + "'  value='' style=' width: 52px;' readonly='readonly'></td></tr>";

                    html += "<input type='hidden' name='filas' value='" + con + "'>"
                    con++;
                });
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
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaQ1_materiasnotasQuimetre + "' style=' width: 52px;'></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='notaq2" + con + "' value='" + item.notaQ2_materiasnotasQuimetre + "' style=' width: 52px;'></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='total" + con + "' value='" + (parseFloat(item.notaQ1_materiasnotasQuimetre) + parseFloat(item.notaQ2_materiasnotasQuimetre)) + "' style=' width: 52px;'></td>";
                    html += "<td>";
                    if ((parseFloat(item.notaQ1_materiasnotasQuimetre) + parseFloat(item.notaQ2_materiasnotasQuimetre)) >= 14) {
                        html += '<div class="alert alert-success"><strong>Success!</strong> The page has been added. </div>';

                    } else {
                        html += '<div class="alert alert-warning"><strong>Warning!</strong> Your monthly traffic is reaching limit. </div>';

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

    function calculos(id) {
        //alert(id);
        var nota1 = $("input[name=notaParcial1" + id + "]").val();
        var nota2 = $("input[name=notaParcial2" + id + "]").val();
        var nota3 = $("input[name=notaParcial3" + id + "]").val();
        var sumanota = (parseInt(nota1) + parseInt(nota2) + parseInt(nota3));
        //alert(sumanota);
        var promedio = sumanota / 3;
        var nota = promedio * 0.80;
        // alert(promedio*0.80);

        $("input[name=porcenta" + id + "]").val(nota);
        var notaexamen = $("input[name=notaexamen" + id + "]").val();
        var porcentajenota = (notaexamen * 0.20);
        $("input[name=porcentaexamen" + id + "]").val(porcentajenota);

        $("input[name=promediototal" + id + "]").val(nota + porcentajenota);

    }

</script>

