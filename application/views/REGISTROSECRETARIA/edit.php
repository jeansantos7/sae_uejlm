<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"></a></li>
        <li><a href="#list" data-toggle="tab"> <div class="ripple-container"></div></a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">

            <?php foreach ($datosSecretaria as $value) { ?>

                <form method="POST" action="<?php echo base_url('RegistroSecretaria/update'); ?>">

                    <input type="hidden" name="id_Estudiante" value="<?php echo $value->id_Secretaria; ?>">



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

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Cedula </label>
                                                    <input type="text" class="form-control" id="cedula_Secretaria" name="cedula_Secretaria" aria-describedby="emailHelp" value="<?php echo $value->cedula_Secretaria; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Apellidos </label>
                                                    <input type="text" class="form-control" id="ape_Secretaria" name="ape_Secretaria" aria-describedby="emailHelp" value="<?php echo $value->ape_Secretaria; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nombres </label>
                                                    <input type="text" class="form-control" id="nom_Secretaria" name="nom_Secretaria" aria-describedby="emailHelp" value="<?php echo $value->nom_Secretaria; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"> Telefono / Celular</label>
                                                    <input type="text" class="form-control" id="telf_Secretaria" name="telf_Secretaria" value="<?php echo $value->telf_Secretaria; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1"> Correo</label>
                                                    <input type="email" class="form-control" id="correo_Secretaria" name="correo_Secretaria" value="<?php echo $value->correo_Secretaria; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Direccion </label>
                                                    <input type="text" class="form-control" id="direc_Secretaria" name="direc_Secretaria" aria-describedby="emailHelp" value="<?php echo $value->direc_Secretaria; ?>">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Fecha de nacimiento</label>
                                                    <input type="date" class="form-control" id="fech_nac_Secretaria" name="fech_nac_Secretaria" value="<?php echo $value->fech_nac_Secretaria; ?>"/>
                                                </div>





                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Usuario </label>
                                                    <input type="text" class="form-control" id="user_Secretaria" name="user_Secretaria" placeholder="Usuario" value="<?php echo $value->user_Secretaria; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password</label>
                                                    <input type="password" class="form-control" id="pass_Secretaria" name="pass_Secretaria" value="<?php echo $value->pass_Secretaria; ?>">
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

    </div>
    <div class="tab-pane fade " id="list">


    </div>
</div>
