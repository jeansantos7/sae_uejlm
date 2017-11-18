
<section class="full-box dashboard-contentPage">
    <!-- NavBar -->
   <nav class="full-box dashboard-Navbar">
            <ul class="full-box list-unstyled text-right">
                <li class="pull-left">
                    <a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
                </li>
                
                <li>
                    <a href="#!" class="btn-search">
                        <i class="zmdi zmdi-search"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" class="btn-modal-help">
                        <i class="zmdi zmdi-help-outline"></i>

                    </a>
                </li>
            </ul>
        </nav>
    <!-- Content page -->
    <div class="container-fluid">
      <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i></i> Registro de Cursos <small></small></h1>
      </div>
      <p class="lead">  </p>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
         <ul class="nav nav-tabs" style="margin-bottom: 15px;">
              <li class="active"><a href="#new" data-toggle="tab"> Cursos</a></li>
              <li><a href="#list" data-toggle="tab">Registro de Curso</a></li>

          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="new">
           
              <div class="table-responsive">



             <table class="table table-striped" id="myTable">
      <thead>
        
        <th> ID</th>
        <th> Nombre del Curso</th>
        <th> Nivel</th>
        <th> Opciones</th>
      </thead>

      <tbody>
        <?php foreach ($listarCursos as $key => $value) { ?>
         <tr>
          <td> <?php echo $value->id_Cursos; ?>   </td>
          <td> <?php echo $value->nom_Cursos; ?>   </td>
          <td> <?php echo $value->nivel_Cursos;?>   </td>
         
          <td>
           <a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
           <a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a>

            
          </td>
      <?php  } ?>
      </tr>
      </tbody>

  </table>

            </div>
            </div>
            
         <div class="tab-pane fade" id="list">

            <div id="myTabContent" class="tab-content">
            
           
              <div class="table-responsive">

<div class="col-md-6">
              <form method="POST" action="<?php echo base_url('Cursos/insert'); ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del Curso </label>
    <input type="text" class="form-control" id="nom_Cursos" name="nom_Cursos" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
  </div>


  
  <div class="form-group">
    <label for="exampleInputEmail1">Nivel del Curso</label>
   <select class="form-control" id="nivel_Cursos" name="nivel_Cursos" >
                                            <option> E.G .B</option>
                                            <option>B.G.U Tecnico</option>
                                            <option>B.G.U Ciencias</option>
                                        </select>
  </div>

  <button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i>>Guardar</button>
</form>

</div>



                            

            </div>
            </div>
            </div>
        


          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mostrarhistorial">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
      </div>


  <script>
    function historial(cedula) {
        var url = "<?php echo base_url('Pensiones/historial/'); ?>" + cedula;
        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


        $.ajax({
            type: "POST",
            url: url,

            beforeSend: function () {
                $("#resultado").html("Procesando, espere por favor...");
            },
            success: function (data)
            {
                var html = '<table class="table table-hover table-light">' +
                        '<thead>' +
                        '<tr>' +
                        '<th>Cedula</th>' +
                        '<th>Matricula</th>' +
                        '<th>Valor Pagado</th>' +
                        '<th>Mes</th>' +
                        '<th>Estado</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                $.each(JSON.parse(data), function (i, item) {

                    html += "<td>" + item.id_estudiantes + '</td>';
                    html += "<td>" + item.valor_matricula + '</td>';
                    html += "<td>" + item.valor_pagado + '</td>';
                    html += "<td>" + meses[item.mes_pagado] + '</td>';
                    html += "<td>";
                    if (item.valor_pagado == item.valor_matricula) {
                        html += "<div class='badge badge-success'><strong>Pagado!</strong></div>";
                    } else {
                        html += "<div class='badge badge-danger'><strong>Atrasado/debe!</strong></div>";
                    }
                    html += '</td></tr>';

                    // alert(item.idPenciones);
                })


                $("#mostrarhistorial").html(html);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                $("#resp").html(errorThrown);
            }
        });
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

