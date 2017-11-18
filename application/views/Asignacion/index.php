
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
   <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
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
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i></i> Asignacion <small> Materias- Tutorias</small></h1>
      </div>
      <p class="lead">  </p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#new" data-toggle="tab"> Asignacion de Materias</a></li>
              <li><a href="#list" data-toggle="tab">Asignacion de Tutorias</a></li>
              <li><a href="#por" data-toggle="tab">Docentes</a></li>

          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
           
              <div class="table-responsive">



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
            
         <div class="tab-pane fade" id="list">

            <div id="myTabContent" class="tab-content">
            
           
              <div class="table-responsive">



               <div class="col-md-4">
                                    <form id="myForm" class="form-body" method="POST" action="<?php echo base_url('Asignacion/setGuardarTutor'); ?>">
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

        


          </div>

            <div class="tab-pane fade" id="por">

            <div id="myTabContent" class="tab-content">
            
           
              <div class="table-responsive">



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
                                                <button type="button" class="btn btn-default" onclick="ListaMaterias(<?php echo $value->cedula_Docente . ",'" . $value->ape_Docente; ?>')" data-toggle="modal" data-target="#exampleModal">
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
    </div>
  </section>

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
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
      </div>


 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script>

                                                function ListaMaterias(cedula, nombre) {
                                                    var text = "Listado De Materias " + nombre;
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
                                                $(document).ready(function () {
                                                    $('.js-example-basic-single').select2();
                                                })
</script>


