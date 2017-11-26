

<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-face zmdi-hc-fw"> </i> Registro de Estudiantes <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 22px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#new" data-toggle="tab">Lista de Estudiante</a></li>
        <li><a href="#list" data-toggle="tab">Registro de Estudiante</a></li>
    </ul>
    <div class="row">
        <div class="col-lg-12">
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="table-responsive">

                        <table id="myTable" class="table table-striped" cellspacing="0" width="100%">
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
                                            
                                            <a href="<?php echo base_url('RegistroEstudiante/edit/') . "/" . $value->id_Estudiante; ?> " class="btn btn-success btn-raised btn-xs  btn-prueba"><i class="glyphicon glyphicon-edit"></i></a>
  
                                            <a  onclick="alert2(<?php echo $value->id_Estudiante; ?>)" class="btn btn-danger btn-raised btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
                                   
                                        
                                        <input class="form-control" type="text"
                                               id="cedula_Estudiante" name="cedula_Estudiante" placeholder="Cedula" maxlength="10"
                                               onkeypress="return soloNumeros(event)">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Estudiante" name="ape_Estudiante" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Estudiante" name="nom_Estudiante" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)">
                                    </br>
                                  
                                    <select onchange="Valor(this.value)" name="sexo" id="seo"  class="form-control">
                                        <option >Sexo</option>
                                        <option value="Mujer" >Mujer</option>
                                        <option  value="Hombre">Hombre</option>
                                        
                                    </select>
                                                        <label class="control-label">Fecha de nacimiento</label>
                                        <input class="form-control" type="date"
                                               id="fech_nac_Estudiante" name="fech_nac_Estudiante">
                                               </br>
                                    
                                    
                                        
                                        <input class="form-control" type="text"
                                               id="dir_Estudiante" name="dir_Estudiante" placeholder="Direccion">
                                                    </br>

                                    
                                    
                                        <label >Discapacitado</label>
                                        <input  type="checkbox" onClick="javascript:h = !h;"
                                                id="disc_Estudiante" name="disc_Estudiante">
                                    </br>


                                    
                                       
                                        <input class="form-control" type="text"  placeholder="Carnet de Discapacidad"
                                               id="carnet_Estudiante" name="carnet_Estudiante"
                                               onFocus="javascript:if (!h) {
                                                           this.blur();
                                                       }"
                                                       onkeypress="return soloNumeros(event)">       </div>

                         

                               
                                <div class="col-xs-12 col-md-4 col-md-offset-1">

                                   
                            <label for="exampleInputEmail1">Representante </label>
                            <select size="1" id="idRepresentante" name="idRepresentante"   
                            class="form-control js-example-basic-single">
                                <option value="">Seleccione</option>
                                <?php foreach ($selRepresentante as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id_Representante; ?>">
                                    <?php echo $value->nom_Representante . " " . $value->ape_Representante; ?></option>
                                <?php } ?>
                            </select>

                         <label for="exampleInputEmail1">Madre de Familia </label>
                            <select size="1" id="idMadre" name="idMadre"   class="form-control js-example-basic-single">
                                <option value="">Seleccione</option>
                                <?php foreach ($selPadresFamilia as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->ced_Madre; ?>">
                                    <?php echo $value->nom_Madre . " " . $value->ape_Madre; ?></option>
                                <?php } ?>
                            </select>


                            <label for="exampleInputEmail1">Padre de Familia </label>
                            <select size="1" id="idPadre" name="idPadre"   class="form-control js-example-basic-single">
                                <option value="">Seleccione</option>
                                <?php foreach ($selPadresFamilia as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->ced_Padre; ?>">
                                    <?php echo $value->nom_Padre . " " . $value->ape_Padre; ?></option>
                                <?php } ?>
                            </select>

                                  </br>
                                       
                                        <input class="form-control" type="text"
                                               id="user_Estudiante" name="user_Estudiante" placeholder="Usuario">
                                    </br>
                                   
                                        <input class="form-control" type="text"
                                               id="pass_Estudiante" name="pass_Estudiante" placeholder="Contraseña">
                                    </br>


                                    <div class="col-md-12">
                        <button type="button" class="btn btn-info btn-raised btn-sm" id="btn-ingresar" >
                        <i class="zmdi zmdi-floppy"> </i> Guardar Registro</button>
                        
                        <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/RegistroEstudiante/'); ?>"> </i> Cancelar</button>

                    </div>

                                   

                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</div>

<script>
$('#myTable').DataTable();

    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

     function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " 1234567890";
       especiales = "";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
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