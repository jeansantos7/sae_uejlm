<?php  foreach ($datosPadresFamilia as $value) {?>





<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> <i class="zmdi zmdi-male-female zmdi-hc-fw""> </i> Registro de Datos  <small> Padres de Familia</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 22px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px;">
       
       
         <li class="active"><a href="#list2" data-toggle="tab">Registro de Datos</a></li>
    </ul>
    <div class="row">
        <div class="col-lg-12">
            <div id="myTabContent" class="tab-content">
               
                
                
                

                

                    <div class="container-fluid">
                        <div class="row">
              <form method="POST" id="form1" class="login-form" action="<?php echo base_url('PadresFamilia/update'); ?>">
                                <div id="mensaje"></div>

                                <div class="col-xs-12 col-md-4 col-md-offset-1">
                                   
                                        
                                        <small> Madre de Familia</small>
                                        <input class="form-control" type="text"
                                               id="ced_Madre" name="ced_Madre" placeholder="Cédula" maxlength="10"
                                               onkeypress="return soloNumeros(event)" value="<?php echo $value->ced_Madre; ?>" style="text-transform:uppercase;">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Madre" name="ape_Madre" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)" value="<?php echo $value->ape_Madre; ?>" style="text-transform:uppercase;">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Madre" name="nom_Madre" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)" value="<?php echo $value->nom_Madre; ?>" style="text-transform:uppercase;">
                                    </br>
                                  
                                  
                                    <input class="form-control" type="text"
                                               id="telf_Madre" name="telf_Madre" placeholder="Teléfono o Celular" style="text-transform:uppercase;">
                                                    </br>
                                    

                                        
                                        <input class="form-control" type="text"
                                               id="dir_Madre" name="dir_Madre" placeholder="Dirección" style="text-transform:uppercase;">
                                                    </br>
                                
                                <input class="form-control" type="text"
                                               id="ocu_Madre" name="ocu_Madre" placeholder="Ocupación" style="text-transform:uppercase;">
                                                    </br>
                                    
                                    
                                        </div>
                               
                                <div class="col-xs-12 col-md-4 col-md-offset-1">

                                    <small> Padre de Familia</small>
                           
                                        <input class="form-control" type="text"
                                               id="ced_Padre" name="ced_Padre" placeholder="Cédula" maxlength="10"
                                               onkeypress="return soloNumeros(event)" style="text-transform:uppercase;">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Padre" name="ape_Padre" placeholder="Apellidos"
                                               onkeypress="return soloLetras(event)" style="text-transform:uppercase;">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Padre" name="nom_Padre" placeholder="Nombres"
                                               onkeypress="return soloLetras(event)" style="text-transform:uppercase;">
                                    </br>
                                  
                                  
                                    <input class="form-control" type="text"
                                               id="telf_Padre" name="telf_Padre" placeholder="Teléfono o Celular" style="text-transform:uppercase;">
                                                    </br>
                                    

                                        
                                        <input class="form-control" type="text"
                                               id="dir_Padre" name="dir_Padre" placeholder="Dirección" style="text-transform:uppercase;">
                                                    </br>
                                
                                <input class="form-control" type="text"
                                               id="ocu_Padre" name="ocu_Padre" placeholder="Ocupación" style="text-transform:uppercase;">
                                                    </br>
                                    
                                    

                                    <div class="col-md-8">
                        <button type="submit"  class="btn btn-info btn-raised btn-sm"> <i class="zmdi zmdi-floppy"></i>  Actualizar Registro </button>
                        <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/PadresFamilia/Padres'); ?>"> </i> Cancelar</button>

                    
                            </form>
         <?php }

?>
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