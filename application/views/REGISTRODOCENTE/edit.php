<?php foreach ($datosDocente as $value) { ?>


<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
                <h1 class="text-titles"> <i class="zmdi zmdi-male-alt zmdi-hc-fw"> </i> Registro de Docentes <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab">Consultar</a></li>
        <li><a href="#list" data-toggle="tab">Registro<div class="ripple-container"></div></a></li>

    </ul>
    <div class="row">
    <div class="col-lg-12">
    <div class="tab-content" id="myTabContent">
        
    
        
             
            
        <div class="tab-pane fade" id="list">
           
                <div class="row">
                 <form method="POST" action="<?php echo base_url('RegistroDocente/insert'); ?>">

                  <div class="col-xs-12 col-md-4 col-md-offset-1">
                                   
                                        
                                        <input class="form-control" type="text"
                                               id="cedula_Docente" name="cedula_Docente" placeholder="Cedula" maxlength="10"
                                               onkeypress="return soloNumeros(event)">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Docente" name="ape_Docente" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Docente" name="nom_Docente" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)">
                                    </br>

                                     <input class="form-control" type="text"
                                               id="telf_Docente" name="telf_Docente" placeholder="Telefono"
                                               onkeypress="return soloNumeros(event)">
                                    </br>


                                    <input class="form-control" type="text"
                                               id="correo_Docente" name="correo_Docente" placeholder="Correo"
                                               onkeypress="return soloNumeros(event)">
                                    </br>



                         </div>         
                    
                 

                     <div class="col-xs-12 col-md-4 col-md-offset-1">

                            <input class="form-control" type="text"
                                id="direc_Docente" name="direc_Docente" placeholder="Dirección"
                                onkeypress="return soloLetras(event)">
                                    </br>


                        <label class="control-label">Fecha de nacimiento</label>
                            <input class="form-control" type="date"
                                               id="fech_nac_Docente" name="fech_nac_Docente">
                                               </br>
                                    


                        <button type="submit" class="btn btn-info btn-raised btn-sm" id="btn-ingresar" >
                        <i class="zmdi zmdi-floppy"> </i> Actualizar Registro Registro</button>
                        
                        <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/RegistroEstudiante/'); ?>"> </i> Cancelar</button>

                    </div>

            </form>
<?php } ?>
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
                        
