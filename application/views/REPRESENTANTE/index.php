

<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-male-alt zmdi-hc-fw"> </i> Registro de Representante <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 22px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#new" data-toggle="tab">Lista de Representantes</a></li>
        <li><a href="#list" data-toggle="tab">Registro de Representantes</a></li>
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
                                
                                    <th class="text-center">Telefono</th>
                                    <th class="text-center">Direccion</th>
                                   
                                    <th class="text-center">Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($selRepresentante as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value->id_Representante; ?></td>
                                        <td><?php echo $value->cedula_Representante; ?></td>
                                        <td><?php echo $value->ape_Representante. ' ' . $value->nom_Representante; ?></td>
                                        <td><?php echo $value->telf_Representante; ?></td>
                                        <td><?php echo $value->dir_Representante; ?></td>
                                        <td>Period 1</td>
                                        

                                       
                                        </td>
                                        <td>
                                            
                                            <a href="<?php echo base_url('Representante/edit/') . "/" . $value->id_Representante; ?> " class="btn btn-success btn-raised btn-xs  btn-prueba"><i class="zmdi zmdi-refresh"></i></a>

                                             <a href="<?php echo base_url('Representante/delete/') . "/" . $value->id_Representante; ?> " class="btn btn-danger btn-raised btn-xs  btn-prueba"><i class="zmdi zmdi-delete"></i></a>
                                           
                                           
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
                            <form method="POST" id="form1" class="login-form" action="<?php echo base_url('Representante/insert'); ?>">
                                <div id="mensaje"></div>

                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                   
                                        
                                        <input class="form-control" type="text"
                                               id="cedula_Representante" name="cedula_Representante" placeholder="Cedula" maxlength="10"
                                               onkeypress="return soloNumeros(event)">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Representante" name="ape_Representante" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Representante" name="nom_Representante" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)">
                                    </br>
                                  
                                   
                                                       
                                        <input class="form-control" type="text"
                                               id="telf_Representante" name="telf_Representantes" placeholder="Telefono">
                                                    </br>

                                    
                                    <input class="form-control" type="text"
                                               id="dir_Representante" name="dir_Estudiante" placeholder="Direccion">

                                    
                                       </br>
                        
                         <input class="form-control" type="text"
                                               id="ocu_Representante" name="ocu_Representante" placeholder="Ocupación">

                                    
                                       </br>

                               
                            

                        </div>

                          <div class="col-md-12">
                        <button type="button" class="btn btn-info btn-raised btn-sm" id="btn-ingresar" >
                        <i class="zmdi zmdi-floppy"> </i> Guardar Registro</button>
                        
                        <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/RegistroEstudiante/'); ?>"> </i> Cancelar</button>

                    </div>
                    </div>

                </div>
            </div>
            </form>
        </div>
    </div>



</div>

<script>
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
</script>