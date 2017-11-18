<section class="full-box dashboard-contentPage">
        <!-- NavBar -->
        <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                <li>
                    <a href="#!" class="btn-Notifications-area">
                        <i class="zmdi zmdi-notifications-none"></i>
                        <span class="badge">7</span>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-modal-help">
                        <i class="zmdi zmdi-help-outline"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Content page -->
        <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-titles"><i class="zmdi zmdi-money zmdi-hc-fw"></i> Payments <small>Payments</small></h1>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse voluptas reiciendis tempora voluptatum eius porro ipsa quae voluptates officiis sapiente sunt dolorem, velit quos a qui nobis sed, dignissimos possimus!</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                        <li class="active"><a href="#new" data-toggle="tab">New</a></li>
                        <li><a href="#list" data-toggle="tab">List</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
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
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-body">
                                        <div class="form-group" id="Materias">

                                        </div>
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
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>



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
                        '<th>TOTAL</th>' +
                        '<th>SUPLETORIO</th>' +
                        '<th>REMEDIAL</th>' +
                        '<th>EXAMEN DE GRACIA</th>' +
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
                   
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='total" + con + "' value='" + (parseFloat(item.promedioq1_MateriasNotas) + parseFloat(item.promedioq2_MateriasNotas)) + "' style=' width: 52px;'></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notarec_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notareme_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='notaq2" + con + "' value='" + item.notaexa_MateriasNotas + "' style=''></td>";
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