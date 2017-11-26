

<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-male-female zmdi-hc-fw""> </i> Registro de Datos  <small> Padres de Familia</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 22px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
        <li class="active"><a href="#new" data-toggle="tab">Lista de datos de Madres de Familia</a></li>
       
         <li><a href="#list2" data-toggle="tab">Registro de Datos</a></li>
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
                                    <th class="text-center">Direccón</th>
                                    <th class="text-center">Ocupación</th>
                                    <th class="text-center">Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($selPadresFamilia as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value->id_PadresFamilia; ?></td>
                                        <td><?php echo $value->ced_Madre; ?></td>
                                        <td><?php echo $value->ape_Madre . ' ' . $value->nom_Madre; ?></td>
                                        <td><?php echo $value->telf_Madre; ?></td>
                                        <td><?php echo $value->dir_Madre; ?></td>
                                        <td><?php echo $value->ocu_Madre; ?></td>
                                        

                                        <td>
                                            
                                            <a href="<?php echo base_url('PadresFamilia/edit/') . "/" . $value->id_PadresFamilia; ?> " class="btn btn-success btn-raised btn-xs  btn-prueba"><i class="zmdi zmdi-refresh"></i></a>
                                         
                                            <a href="<?php echo base_url('PadresFamilia/delete/') . "/" . $value->id_PadresFamilia; ?> " class="btn btn-danger btn-raised btn-xs  btn-prueba"><i class="zmdi zmdi-delete"></i></a>
                                           
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>

                </div>
                
                
                

                <div class="tab-pane fade" id="list2">

                    <div class="container-fluid">
                        <div class="row">
                            <form method="POST" id="form1" class="login-form"
                             action="<?php echo base_url('PadesFamilia/insert'); ?>">
                                <div id="mensaje"></div>

                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                   
                                        
                                        <small> Madre de Familia</small>
                                        <input class="form-control" type="text"
                                               id="ced_Madre" name="ced_Madre" placeholder="Cedula" maxlength="10"
                                               onkeypress="return soloNumeros(event)">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Madre" name="ape_Madre" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Madre" name="nom_Madre" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)">
                                    </br>
                                  
                                  
                                    <input class="form-control" type="text"
                                               id="telf_Madre" name="telf_Madre" placeholder="Telefono o Celular">
                                                    </br>
                                    

                                        
                                        <input class="form-control" type="text"
                                               id="dir_Madre" name="dir_Madre" placeholder="Direccion">
                                                    </br>
                                
                                <input class="form-control" type="text"
                                               id="ocu_Madre" name="ocu_Madre" placeholder="Ocupación">
                                                    </br>
                                    
                                    
                                        </div>
                               
                                <div class="col-xs-12 col-md-4 col-md-offset-1">

                                    <small> Padre de Familia</small>
                           
                                        <input class="form-control" type="text"
                                               id="ced_Padre" name="ced_Padre" placeholder="Cedula" maxlength="10"
                                               onkeypress="return soloNumeros(event)">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Padre" name="ape_Padre" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Padre" name="nom_Padre" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)">
                                    </br>
                                  
                                  
                                    <input class="form-control" type="text"
                                               id="telf_Padre" name="telf_Padre" placeholder="Telefono o Celular">
                                                    </br>
                                    

                                        
                                        <input class="form-control" type="text"
                                               id="dir_Padre" name="dir_Padre" placeholder="Direccion">
                                                    </br>
                                
                                <input class="form-control" type="text"
                                               id="ocu_Padre" name="ocu_Padre" placeholder="Ocupación">
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
$('#myTable2').DataTable();


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