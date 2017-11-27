
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">Cuadros de Calificacion<small>Primer Quimestre</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"></a></li>
        <li><a href="#list" data-toggle="tab"> <div class="ripple-container"></div></a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">
            <div class="col-md-6">
                <label for="s">Materia </label>
                <select size="1"  name="s" class="form-control" id="id_curso" onchange="matriaestudiante(this.value)">
                    <option value="">Curso</option>
                    <?php foreach ($lista_Curso as $key => $value) {
                        ?>
                        <option value="<?php echo $value->id_Cursos; ?>"><?php echo $value->nom_Cursos; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md-3">
                <div class="form-body" id="Materias">
                    
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-body">
                    <div class="form-group">
                        <div id="notasmaterias">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade " id="list">


        </div>
    </div>
</div>
<script>
    function matriaestudiante(id) {
        $("#notasmaterias").html("");
        var url = "<?php echo base_url(); ?>ActasCalificaciones/ListaMateriasXCurso";
        var parametros = {
            "id_Cursos": id
        };
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
                htmt += '<label for="s">Materia </label><select size="1" id="s" name="s" class="form-control" onchange="materias(this.value)"><option value="">Seleccione</option>';
                $.each(JSON.parse(data), function (i, item) {
                    //alert(item.nom_Materias);
                    htmt += '<option value="' + item.id_Materias + '">' + item.nom_Materias + '</option>';
                });
                htmt += "</select>"
                $("#Materias").html(htmt);
            }
        });
    }
    function materias(id) {
        var url = "<?php echo base_url(); ?>ActasCalificaciones/DatosMaterias";
        var IDmateria = $("#id_curso").val();
        var IDCurso = id;
        var CIProfe = '0';
        var parametros = {
            "Id_Curso": $("#id_curso").val(),
            "id_materia": id
        };
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
                var html =
                        ' <div class="table-responsive">' +
                        '<table class="table table-bordered table-hover ">' +
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
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial1q1_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial2q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial3q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examenq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examen_porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq1_MateriasNotas + "' style=''></td>";


                    html += "</tr>";

                    con++;
                });
                html += '</tbody></table>';
                html += '<input type="submit" value="Enviar" name="Enviar">';
                $("#notasmaterias").html(html);
            }
        });
    }
</script>