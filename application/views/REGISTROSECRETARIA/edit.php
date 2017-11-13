
<?php  foreach ($datosSecretaria as $value) {?>

<script language="JavaScript">
var h=false;
</script>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Estudiante</span>
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


  <form method="POST" action="<?php echo base_url('RegistroSecretaria/update'); ?>">
 
  <input type="hidden" name="id_Estudiante" value="<?php echo $value->id_Estudiante; ?>">



  <div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    

                    <a class="btn btn-default btn-outline btn-circle btn-sm" href="javascript:history.back()" >Regresar
                        <i class="glyphicon glyphicon-arrow-left"></i>
                    </a>


                
                </div>
                
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    
                        

                           

                         <div class="col-md-6">
                                    
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" id="fech_matricula_Estudiante" name="fech_matricula_Estudiante" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cedula </label>
                                        <input type="text" class="form-control" id="cedula_Estudiante" name="cedula_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->cedula_Secretaria; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellidos </label>
                                        <input type="text" class="form-control" id="ape_Estudiante" name="ape_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->ape_Estudiante;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombres </label>
                                        <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante" aria-describedby="emailHelp" value="<?php echo $value->nom_Estudiante;?>">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="fech_nac_Estudiante" name="fech_nac_Estudiante" value="<?php echo $value->matricula_Estudiante;?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Direccion </label>
                                        <input type="text" class="form-control" id="dir_Estudiante" name="dir_Estudiante" aria-describedby="emailHelp" placeholder="Domicilio">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Discapacitado </label>
                                        <input type="Checkbox" onClick="javascript:h = !h;" class="btn btn-small" id="disc_Estudiante" name="disc_Estudiante" >


                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Carnet de Discapacidad </label>
                                        <input type="text" class="form-control" onFocus="javascript:if (!h) {
                                                    this.blur();
                                                }" id="carnet_Estudiante" name="carnet_Estudiante" placeholder="carnet de Discapacidad">
                                    </div>
                                   
                                    <div class="form-group">

                                        <label for="exampleInputPassword1"> Parentesco familiar del Representante </label>

                                        <select class="form-control" id="parentesco_Representante_Estudiante" name="parentesco_Representante_Estudiante" >
                                            <option> Padre o Madre</option>
                                            <option>Tio (a)</option>
                                            <option> Abuelo (a)</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Usuario </label>
                                        <input type="text" class="form-control" id="user_Estudiante" name="user_Estudiante" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="pass_Estudiante" name="pass_Estudiante" placeholder="contraseña">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"> Valor de la Pension</label>
                                        <input type="text" class="form-control" id="pension_Estudiante" name="pension_Estudiante" placeholder="valor de la pension">
                                    </div>

                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Representante </label>
                                        </div>
                                        <select name="id_Representantes" id="id_Representantes"> <?php   foreach ($selRepresentante as $key => $value) {?>
                                            <option value="<?php echo $value->id_Representante?>" ><?php  echo $value->ape_Representante.' '. $value->nom_Representante ; ?></option>
                                        <?php }  ?>
                                         </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>


                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>


</div>
  


  <button type="submit" class="btn btn-primary">Submit-Update</button>

<?php }

?>





