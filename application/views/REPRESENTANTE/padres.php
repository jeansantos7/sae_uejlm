

<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"> Registro de Padres <small></small></h1>
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
                                    <th class="text-center">Cedula Madre</th>
                                    <th class="text-center">Apellidos y Nombres de la Madre</th>
                                    <th class="text-center">Ocupación</th>
                                    <th class="text-center">Direccion</th>
                                    <th class="text-center">ocu_</th>
                                    <th class="text-center">Opciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listarPadres as $key => $value) { ?>
                                    <tr>
                                        <td> <?php echo $value->id_Estudiante; ?></td>
                                        <td><?php echo $value->cedula_Estudiante; ?></td>
                                        <td><?php echo $value->ape_Estudiante . ' ' . $value->nom_Estudiante; ?></td>
                                        <td><?php echo $value->dir_Estudiante; ?></td>
                                        <td><?php echo $value->pension_Estudiante; ?></td>
                                        <td>Period 1</td>
                                        <td><?php echo $value->user_Estudiante; ?></td>

                                        <td> 
                                            
                            
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
                                   
                                        <h1 class="text-titles"> Datos de la Madre <small></small></h1>
                                        
                                        <input class="form-control" type="text"
                                               id="ced_Madre" name="ced_Madre" placeholder="Cedula" maxlength="10">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Estudiante" name="ape_Estudiante" placeholder="Apellidos">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Estudiante" name="nom_Estudiante" placeholder="Nombres">
                                    </br>
                                  
                                    
                                      <input class="form-control" type="text"
                                               id="dir_Estudiante" name="dir_Estudiante" placeholder="Direccion">
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
                                                       }">       </div>

                         
                         <div class="col-xs-12 col-md-4 col-md-offset-1">
                                   
                                        <h1 class="text-titles"> Datos del Padre <small></small></h1>
                                        
                                        <input class="form-control" type="text"
                                               id="cedula_Estudiante" name="cedula_Estudiante" placeholder="Cedula" maxlength="10">
                                               </br>
                                   
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="ape_Estudiante" name="ape_Estudiante" placeholder="Apellidos">
                                   </br>
                                    
                                       
                                        <input class="form-control" type="text"
                                               id="nom_Estudiante" name="nom_Estudiante" placeholder="Nombres">
                                    </br>
                                  
                                    <select onchange="Valor(this.value)" name="sexo" id="seo"  class="form-control">
                                        <option >Sexo</option>
                                        <option value="0" >Mujer</option>
                                        <option  value="1">Hombre</option>
                                        
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
                                                       }">       </div>

                               
                              
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

