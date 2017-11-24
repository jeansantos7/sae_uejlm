<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-money zmdi-hc-fw"> </i> Registro de Pensiones <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">


    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li class="active"><a href="#new" data-toggle="tab"> Consulta</a></li>
                    <li><a href="#list" data-toggle="tab">Historial de Pago</a></li>

                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="new">

                        <div class="table-responsive">



                            
                            <table class="table table-hover table-light" id="myTable">
                                <thead>
                                    <tr>
                                        <th> Cedula</th>
                                        <th> Apellidos y Nombres</th>
                                        <th>Valor de la pensión</th>
                                        <th> Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listarEstudiante_P as $key => $value) { ?>

                                        <tr>
                                            <td> <?php echo $value->cedula_Estudiante; ?>   </td>
                                            <td> <?php echo $value->ape_Estudiante . ' ' . $value->nom_Estudiante; ?>   </td>
                                            <td> <?php echo $value->pension_Estudiante; ?>   </td>
                                            <td>
                                                <a href="<?php echo base_url('Pensiones/pago/') . "/" . $value->cedula_Estudiante; ?>" class="btn btn-default"><span class="fa fa-money" aria-hidden="true"></span>  Pago</a>
                                                <!--<a href="<?php echo base_url('Pensiones/historial/') . "/" . $value->cedula_Estudiante; ?>" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Historial de Pago</a>-->
                                                <button type="button" class="btn btn-default" onclick="historial(<?php echo $value->cedula_Estudiante; ?>)" data-toggle="modal" data-target="#exampleModal">
                                                    <span class="fa fa-history" aria-hidden="true"></span>   Historial de Pago
                                                </button>
                                            </td>

                                        </tr>
                                    <?php } ?>


                                </tbody>
                            </table>
                        </div>


                        <!--Inicia Modal-->
                        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Historial de Pago</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" id="mostrarhistorial">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" <?php base_url('Pensiones') ?> class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Final modal-->
                    </div>

                    <div class="tab-pane fade" id="list">

                        <div id="myTabContent" class="tab-content">


                            <div class="table-responsive">



                                <table class="table table-hover table-light" id="myTable">
                                    <thead>
                                        <tr>
                                            <th> Cedula Estudiante</th>
                                            <th> Estudiante
                                            <th> Mes</th>
                                            <th>Valor de Pago</th>
                                            <th> fecha</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listarHistorial as $key => $value) { ?>

                                            <tr>
                                                <td> <?php echo $value->id_estudiante; ?>   </td>
                                                <td> <?php echo $value->ape_Estudiante . ' ' . $value->nom_Estudiante; ?>   </td>
                                                <td> <?php
                                                    $array_opciones = array("Enero" => "0", "Febrero" => "1", "Marzo" => "2", "Abril" => "3", "Mayo" => "4", "Junio" => "5", "Julio" => "6", "Agosto" => "7", "Septiembre" => "8", "Octubre" => "9", "Noviembre" => "10", "Diciembre" => "11");
                                                    foreach ($array_opciones as $indice => $valor) {
                                                        if ($value->id_mes == $valor) {
                                                            echo $indice;
                                                        }
                                                    }
                                                    ?>   </td>
                                                <td> <?php echo $value->valor_del_pago; ?>   </td>
                                                <td> <?php echo $value->fecha; ?>   </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>









</div>


<script>
    function historial(cedula) {
        var url = "<?php echo base_url('Pensiones/historial/'); ?>" + cedula;
        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


        $.ajax({
            type: "POST",
            url: url,

            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function (data)
            {
                var html = '<table class="table table-hover table-light">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Cedula</th>' +
                        '<th>Matricula</th>' +
                        '<th>Valor Pagado</th>' +
                        '<th>Mes</th>' +
                        '<th>Estado</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                $.each(JSON.parse(data), function (i, item) {

                    html += "<td>" + item.id_estudiantes + '</td>';
                    html += "<td>" + item.valor_matricula + '</td>';
                    html += "<td>" + item.valor_pagado + '</td>';
                    html += "<td>" + meses[item.mes_pagado] + '</td>';
                    html += "<td>";
                    if (item.valor_pagado == item.valor_matricula) {
                        html += "<div class='badge badge-success'><strong>Pagado!</strong></div>";
                    } else {
                        html += "<div class='badge badge-danger'><strong>Atrasado/debe!</strong></div>";
                    }
                    html += '</td></tr>';

                    // alert(item.idPenciones);
                })


                $("#mostrarhistorial").html(html);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#resp").html(errorThrown);
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


</script>