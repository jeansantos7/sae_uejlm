  
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>



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

    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Registro de Estudiantes <small>Datos Estudiantiles</small></h1>
    </div>
    <p class="lead"> Mision Y Vision</p>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="#new" data-toggle="tab">Lista de Estudiante</a></li>
                <li><a href="#list" data-toggle="tab">Registro de Estudiante</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="table-responsive">
                    <input type="text" class="form-control large" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
                        <table id="myTable" class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Cedula</th>
                                    <th class="text-center">Apellidos y Nombres</th>
                                    <th class="text-center">Direccion</th>
                                    <th class="text-center">$Valor Pension</th>
                                    <th class="text-center">Representante</th>
                                    <th class="text-center">Usuario</th>
                                    <th class="text-center">Matriculado</th>
                                    <th class="text-center">Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listarEstudiante as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value->id_Estudiante; ?></td>
                                        <td><?php echo $value->cedula_Estudiante; ?></td>
                                        <td><?php echo $value->ape_Estudiante . ' ' . $value->nom_Estudiante; ?></td>
                                        <td><?php echo $value->dir_Estudiante; ?></td>
                                        <td><?php echo $value->pension_Estudiante; ?></td>
                                        <td>Period 1</td>
                                        <td><?php echo $value->user_Estudiante; ?></td>

                                        <td> 
                                            <?php
                                            $array_opciones = array("Si" => "1", "No" => "0");
                                            foreach ($array_opciones as $indice => $valor) {
                                                if ($value->Estado == $valor) {
                                                    echo $indice;
                                                }
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <!--<a  class="btn btn-success btn-raised btn-xs" onclick="alert2(<?php echo $value->id_Estudiante; ?>)"><i class="zmdi zmdi-refresh"></i></a>-->
                                            <a href="<?php echo base_url('RegistroEstudiante/edit/') . "/" . $value->id_Estudiante; ?> " class="btn btn-success btn-raised btn-xs  btn-prueba"><i class="zmdi zmdi-refresh"></i></a>
    <!--                                            <a href="<?php echo base_url('RegistroEstudiante/delete/') . "/" . $value->id_Estudiante; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a>-->
                                            <a  onclick="alert2(<?php echo $value->id_Estudiante; ?>)" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>
                <div class="tab-pane fade" id="list">

                    <div class="container-fluid">
                        <div class="row">
                            <form method="POST" id="form1" class="login-form" action="<?php echo base_url('RegistroEstudiante/insert'); ?>">
                                <div id="mensaje"></div>

                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cedula</label>
                                        <input class="form-control" type="text"
                                               id="cedula_Estudiante" name="cedula_Estudiante">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos</label>
                                        <input class="form-control" type="text"
                                               id="ape_Estudiante" name="ape_Estudiante">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres</label>
                                        <input class="form-control" type="text"
                                               id="nom_Estudiante" name="nom_Estudiante">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Fecha de nacimiento</label>
                                        <input class="form-control" type="date"
                                               id="fech_nac_Estudiante" name="fech_nac_Estudiante">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Direccion</label>
                                        <input class="form-control" type="text"
                                               id="dir_Estudiante" name="dir_Estudiante">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Discapacitado</label>
                                        <input  type="checkbox" onClick="javascript:h = !h;"
                                                id="disc_Estudiante" name="disc_Estudiante">
                                    </div>



                                    <div class="form-group label-floating">
                                        <label class="control-label">Carnet de Discapacidad</label>
                                        <input class="form-control" type="text"
                                               id="carnet_Estudiante" name="carnet_Estudiante"
                                               onFocus="javascript:if (!h) {
                                                    this.blur();
                                                }">       </div>





                                </div>
                                <div class="col-xs-12 col-md-4 col-md-offset-1">

                                    <div class="form-group label-floating">
                                        <label class="control-label">Usuario</label>
                                        <input class="form-control" type="text"
                                               id="user_Estudiante" name="user_Estudiante">
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contraseña</label>
                                        <input class="form-control" type="text"
                                               id="pass_Estudiante" name="pass_Estudiante">
                                    </div>


                                    <p class="text-center">
                                        <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> </button>   
                                    </p>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>


<script language="JavaScript">
var h=false;
</script>

<script>
    var h = false;
    var Login = function () {

        var handleLogin = function () {
            $.validator.addMethod("alfanumOespacio", function (value, element) {
                return /^[ a-z0-9áéíóúüñ]*$/i.test(value);
            }, "Dato.");
            $.validator.addMethod("espacio", function (value, element) {
                return !/\s/i.test(value);
            }, "Ingrese sólo letras, números o espacios.");
            $.validator.addMethod("numero", function (value, element) {
                return /^([0-9])*$/.test(value);
            }, "Ingrese sólo letras, números o espacios.");

            $('#form1').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    cedula_Estudiante: {
                        numero: true,
                        required: true,
                    },
                    ape_Estudiante: {
                        alfanumOespacio: true,
                        required: true
                    },
                    nom_Estudiante: {
                        alfanumOespacio: true,
                        required: true
                    },
                    fech_nac_Estudiante: {

                        required: true
                    },
                    dir_Estudiante: {

                        required: true
                    
                   
                    },
                    user_Estudiante: {
                        espacio: true,
                        required: true
                    },
                    pass_Estudiante: {
                        espacio: true,
                        required: true
                    }


                },

                messages: {
                    cedula_Estudiante: {
                        required: "Se requiere nombre de usuario."
                    },
                    ape_Estudiante: {
                        required: "Se requiere nombre de Apellido."
                    },
                    nom_Estudiante: {
                        required: "Se requiere nombre de Nombre."
                    },
                    fech_nac_Estudiante: {
                        required: "Se requiere nombre de Fechas."
                    },
                    dir_Estudiante: {
                        required: "Se requiere nombre de Fechas."
                    
                   
                    },
                    user_Estudiante: {
                        required: "Se requiere nombre de Fechas."
                    },
                    pass_Estudiante: {
                        required: "Se requiere nombre de Fechas."
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    $('.alert-danger', $('.login-form')).show();
                    $('#mensaje').html("Campos Vacios ");
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                            .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element.closest('.input-icon'));
                },

                submitHandler: function (form) {
                    form.submit(); // form validation success, call ajax form submit
                    //ajaxpost();
                    //alert();
                }
            });

            $('.login-form input').keypress(function (e) {
                if (e.which == 13) {
                    if ($('.login-form').validate().form()) {
                        $('.login-form').submit(); //form validation success, call ajax form submit
                    }
                    return false;
                }
            });


        }

        return {
            //main function to initiate the module
            init: function () {

                handleLogin();

                $('.forget-form').hide();

            }

        };

    }();

    jQuery(document).ready(function () {
        Login.init();
    });




    function alert2(id) {
        var url = "/RegistroEstudiante/delete/" + id;
        swal({
            title: '¿Desea Eliminar Este Estudiante del Sistema?',
            text: "Está seguro que desea eliminar el registro?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#03A9F4',
            cancelButtonColor: '#F44336',
            confirmButtonText: '<i class="zmdi zmdi-run"></i> Si, Eliminar!',
            cancelButtonText: '<i class="zmdi zmdi-close-circle"></i> No, Cancelar!'
        }).then(function () {
            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
            window.location = baseUrl +url;
        });

    }
</script>

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


</script>
<script type="text/javascript">
  
  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>