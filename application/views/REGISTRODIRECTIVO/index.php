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
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta </a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>

                    </ul>
                </div>
                <div class="actions">
                    <input type="text" class="form-control large" id="myInput" onkeyup="myFunction()"  placeholder="Buscar por Nombres y Apellidos" title="Type in a name">
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <table class="table table-hover table-light" id="myTable">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Cedula</th>
                                        <th> Apellidos y Nombres</th>
                                        <th style="text-align: center;"> Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listarDirectivo as $key => $value) { ?>

                                        <tr>
                                            <td><?php echo $value->id_Directivo; ?>  </td>
                                            <td><?php echo $value->cedula_Directivo; ?> </td>
                                            <td><?php echo $value->ape_Directivo . ' ' . $value->nom_Directivo; ?> </td>
                                            <td style="text-align: center;">
                                                <a href=" <?php echo base_url('RegistroDirectivo/delete/') . "/" . $value->id_Directivo; ?>" class="btn btn-default"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Eliminar</a>
                                                <a href="<?php echo base_url('RegistroDirectivo/edit/') . "/" . $value->id_Directivo; ?>" class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  Editar</a>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                            <!--                            <div class="form-group" >
                                                            <select name="txtId">
                            <?php foreach ($selDirectivo as $key => $value) { ?>
                                    <option value="<?php echo $value->cedula_Directivo ?>" ><?php echo $value->cedula_Directivo . ' ' . $value->nom_Directivo; ?></option>
                            <?php } ?>
                                                            </select>
                                                        </div>-->

                            <form method="POST" action="<?php echo base_url('Directivo/insert'); ?>">

                                <div class="form-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cedula </label>
                                            <input type="text" class="form-control" id="cedula_Directivo" name="cedula_Directivo" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nombres </label>
                                            <input type="text" class="form-control" id="nom_Directivo" name="nom_Directivo" aria-describedby="emailHelp" placeholder="Nombres">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Apellidos </label>
                                            <input type="text" class="form-control" id="ape_Directivo" name="ape_Directivo" aria-describedby="emailHelp" placeholder="Apellidos">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" id="fech_nac_Directivo" name="fech_nac_Directivo" placeholder="contraseña">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direccion </label>
                                            <input type="text" class="form-control" id="direc_Directivo" name="direc_Directivo" aria-describedby="emailHelp" placeholder="Domicilio">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Usuario </label>
                                            <input type="text" class="form-control" id="user_Directivo" name="user_Directivo" placeholder="contraseña">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="pass_Directivo" name="pass_Directivo" placeholder="contraseña">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Telefono </label>
                                            <input type="text" class="form-control" id="telf_Directivo" name="telf_Directivo" aria-describedby="emailHelp" placeholder="Telefono">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Correo </label>
                                            <input type="email" class="form-control" id="correo_Directivo" name="correo_Directivo" aria-describedby="emailHelp" placeholder="Correo">
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


                        </div>
                        

                    </div>

                </div>
            </div>
        </div>
        <!-- END SAMPLE TABLE PORTLET-->
    </div>

</div>
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


