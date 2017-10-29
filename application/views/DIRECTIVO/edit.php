<h1 class="page-title">  Vista de Directivo                    
</h1>

<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Directivo</span>
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
<!-- Nav tabs -->


<!-- Tab panes -->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    Editar
                </div>
                <div class="actions">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="">

                        <div>

                            <?php foreach ($datosDirectivo as $value) { ?>


                                <form method="POST" action="<?php echo base_url('Directivo/update'); ?>">
                                    <div class="form-body">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id_Directivo" value=" <?php echo $value->id_Directivo; ?>">
                                                <label for="exampleInputEmail1">Cedula </label>
                                                <input type="text" class="form-control" id="cedula_Directivo" name="cedula_Directivo" aria-describedby="emailHelp" placeholder="cedula de ciudadania" value="<?php echo $value->cedula_Directivo; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nombres </label>
                                                <input type="text" class="form-control" id="nom_Directivo" name="nom_Directivo" aria-describedby="emailHelp" placeholder="Nombres" value="<?php echo $value->nom_Directivo; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Apellidos </label>
                                                <input type="text" class="form-control" id="ape_Directivo" name="ape_Directivo" aria-describedby="emailHelp" placeholder="Apellidos" value="<?php echo $value->ape_Directivo; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fecha de nacimiento</label>
                                                <input type="date" class="form-control" id="fech_nac_Directivo" name="fech_nac_Directivo" placeholder="contraseña" value="<?php echo $value->fech_nac_Directivo; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Direccion </label>
                                                <input type="text" class="form-control" id="direc_Directivo" name="direc_Directivo" aria-describedby="emailHelp" placeholder="Domicilio" value="<?php echo $value->direc_Directivo; ?>">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Usuario </label>
                                                <input type="text" class="form-control" id="user_Directivo" name="user_Directivo" placeholder="contraseña" value="<?php echo $value->user_Directivo; ?>">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="pass_Directivo" name="pass_Directivo" placeholder="contraseña" value="<?php echo $value->pass_Directivo; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Telefono </label>
                                                <input type="text" class="form-control" id="telf_Directivo" name="telf_Directivo" aria-describedby="emailHelp" placeholder="Telefono" value="<?php echo $value->telf_Directivo; ?>">
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Correo </label>
                                                <input type="email" class="form-control" id="correo_Directivo" name="correo_Directivo" aria-describedby="emailHelp" placeholder="Correo" value="<?php echo $value->correo_Directivo; ?>">
                                            </div>



                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </div>


                                </form>


                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

</div>



