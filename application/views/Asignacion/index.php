<h1 class="page-title">      Asignacion             
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Asignacion</span>
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
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Asignacion </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Consulta</a></li>

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
                            <div class="form-body">
                                <div class="col-md-4">

                                </div>
                                <div class="col-md-4">
                                    <form id="myForm" class="form-body" method="POST" action="<?php echo base_url('Asignacion/setGuardar'); ?>">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Docente </label>
                                                <select size="1" id="docenteselect" name="docenteselect" class="form-control js-example-basic-single">
                                                    <option value="">Seleccione</option>
                                                    <?php foreach ($ListaDocentes as $key => $value) {
                                                        ?>
                                                        <option value="<?php echo $value->cedula_Docente; ?>"><?php echo $value->nom_Docente . " " . $value->ape_Docente; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Materia </label>
                                                <select size="1"id="materiaselect" name="materiaselect" class="form-control js-example-basic-single">
                                                    <option value="">Seleccione</option>
                                                    <?php foreach ($ListaMaterias as $key => $value) {
                                                        ?>
                                                        <option value="<?php echo $value->id_Materias; ?>"><?php echo $value->nom_Materias; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Grado </label>
                                                <select size="1"id="cursoselect" name="cursoselect" class="form-control js-example-basic-single">
                                                    <option value="">Seleccione</option>
                                                    <?php foreach ($ListaCurso as $key => $value) {
                                                        ?>
                                                        <option value="<?php echo $value->id_Cursos; ?>"><?php echo $value->nom_Cursos; ?></option>

                                                    <?php } ?>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="save" value="" class="btn blue">Agregar</button>
                                                <button type="button" class="btn ">Cancelar</button>
                                            </div>






                                        </fieldset>
                                    </form>
                                </div>

                            </div>

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">


                            <table class="table table-hover table-light" id="myTable">
                                <thead>
                                    <tr>
                                        <th> Cedula</th>
                                        <th> Apellidos y Nombres</th>
                                        <th>Correo</th>
                                        <th> Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ListaDocentes as $key => $value) { ?>

                                        <tr>
                                            <td> <?php echo $value->cedula_Docente; ?>   </td>
                                            <td> <?php echo $value->ape_Docente . ' ' . $value->nom_Docente; ?>   </td>
                                            <td> <?php echo $value->correo_Docente; ?>   </td>
                                            <td>
                                                <button type="button" class="btn btn-default" onclick="ListaMaterias(<?php echo $value->cedula_Docente.",'".$value->ape_Docente; ?>')" data-toggle="modal" data-target="#exampleModal">
                                                    <span class="fa fa-list" aria-hidden="true"></span>   Materias
                                                </button>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>



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
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mostrarhistorial">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script>

    function ListaMaterias(cedula,nombre) {
        var text="Listado De Materias "+nombre;
        $("#exampleModalLabel").html(text);
        var url = "<?php echo base_url('Asignacion/get/'); ?>" + cedula;
       


        $.ajax({
            type: "POST",
            url: url,

            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function (data)
            {
                var html = '<table class="table table-hover table-light"id="table">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Codigo</th>' +
                        '<th>Materia</th>' +
                        '<th>Curso</th>' +
                        '<th>Acciones</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody><tr>';

                $.each(JSON.parse(data), function (i, item) {

                    html += "<td>" + item.id_materias_Asignacion + '</td>';
                    html += "<td>" + item.nom_Materias + '</td>';
                    html += "<td>" + item.nom_Cursos + '</td>';
                    html += "<td>";
                    html += "<button type='button' class='btn btn-default' onclick='eliminar(" + item.id_Asignacion + ")'><span class='fa fa-trash' aria-hidden='true'></span></button>";
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

    function eliminar(id) {
        var url = "<?php echo base_url('Asignacion/delete/'); ?>" + id;


        var r = confirm("Seguro que desea Eliminar esta Materia");
        if (r == true) {
            $.ajax({
                type: "POST",
                url: url,

                beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success: function (data)
                {
                    alert("Materia Eliminada exitosamente");
                    $('#exampleModal').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert(errorThrown);
                    //$('#exampleModal').modal('hide')


                }
            });
        }

        //alert(id);


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
$(document).ready(function() {
    $('.js-example-basic-single').select2();
})
</script>


