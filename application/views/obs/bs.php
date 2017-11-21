<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles">System <small>Tiles</small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px;">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab">Cursos</a></li>
        <li><a href="#list" data-toggle="tab">Estudantes <div class="ripple-container"></div></a></li>

    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="new">


            <table border="1" class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Cedula Docente</th>
                        <th>Nombres Docente</th>
                        <th>Curso</th>
                        <th>Incidencia</th>
                        <th>Observacion</th>
                        <th>Fecha</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Bitacora as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value->id;?></td>
                            <td><?php echo $value->cedula_Docente;?></td>
                            <td><?php echo $value->ape_Docente." ".$value->nom_Docente;?></td>
                            <td><?php echo $value->nom_Cursos;?></td>
                            <td><?php echo $value->incidencia_observacioncurso;?></td>
                            <td><?php echo $value->observ_observacioncurso;?></td>
                            <td><?php echo $value->fecha_observacioncurso;?></td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
        <div class="tab-pane fade " id="list">


        </div>
    </div>
