 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="<?php echo base_url('http://code.jquery.com/jquery-1.9.1.js')?>" </script>
  <script src="<?php echo base_url('http://code.jquery.com/ui/1.10.1/jquery-ui.js')?>" </script>
 
<script language="JavaScript">
var h=false;
</script>
 <script>
  (function( $ ) {
    $.widget( "ui.combobox", {
      _create: function() {
        var input,
          that = this,
          wasOpen = false,
          select = this.element.hide(),
          selected = select.children( ":selected" ),
          value = selected.val() ? selected.text() : "",
          wrapper = this.wrapper = $( "<span>" )
                .addClass( "ui-combobox" )
            .insertAfter( select );
 
        function removeIfInvalid( element ) {
          var value = $( element ).val(),
            matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( value ) + "$", "i" ),
            valid = false;
          select.children( "option" ).each(function() {
            if ( $( this ).text().match( matcher ) ) {
              this.selected = valid = true;
              return false;
            }
          });
 
          if ( !valid ) {
            // remove invalid value, as it didn't match anything
            $( element )
              .val( "" )
              .attr( "title", value + " didn't match any item" )
              .tooltip( "open" );
            select.val( "" );
            setTimeout(function() {
              input.tooltip( "close" ).attr( "title", "" );
            }, 2500 );
            input.data( "ui-autocomplete" ).term = "";
          }
        }
 
        input = $( "<input>" )
          .appendTo( wrapper )
          .val( value )
          .attr( "title", "" )
          .addClass( "ui-state-default ui-combobox-input" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: function( request, response ) {
              var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
              response( select.children( "option" ).map(function() {
                var text = $( this ).text();
                if ( this.value && ( !request.term || matcher.test(text) ) )
                  return {
                    label: text.replace(
                      new RegExp(
                        "(?![^&;]+;)(?!<[^<>]*)(" +
                        $.ui.autocomplete.escapeRegex(request.term) +
                        ")(?![^<>]*>)(?![^&;]+;)", "gi"
                      ), "<strong>$1</strong>" ),
                    value: text,
                    option: this
                  };
              }) );
            },
            select: function( event, ui ) {
              ui.item.option.selected = true;
              that._trigger( "selected", event, {
                item: ui.item.option
              });
            },
            change: function( event, ui ) {
              if ( !ui.item ) {
                removeIfInvalid( this );
              }
            }
          })
          .addClass( "ui-widget ui-widget-content ui-corner-left" );
 
        input.data( "ui-autocomplete" )._renderItem = function( ul, item ) {
          return $( "<li>" )
            .append( "<a>" + item.label + "</a>" )
            .appendTo( ul );
        };
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "ui-corner-right ui-combobox-toggle" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
 
        input.tooltip({
          tooltipClass: "ui-state-highlight"
        });
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
 
  $(function() {
    $( "#combobox" ).combobox();
  });
  </script>
<h1 class="page-title">  Vista de Estudiante                      
</h1>

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
            <div class="portlet box blue">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-comments"></i>Estudiantes </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
            <div class="portlet-body">
                <div class="table-scrollable">

                    <div class="tab-content">


                        <div role="tabpanel" class="tab-pane active" id="home">
                            <table class="table table-striped table-bordered table-advance table-hover" id="myTable">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Cedula</th>
                                        <th> Apellido</th>
                                        <th> Nombre</th>

                                        <th style="text-align: center;"> Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listarEstudiante as $key => $value) { ?>

                                        <tr>
                                            <td> <?php echo $value->id_Estudiante; ?>   </td>
                                            <td> <?php echo $value->cedula_Estudiante; ?>   </td>
                                            <td> <?php echo $value->ape_Estudiante; ?>   </td>
                                            <td> <?php echo $value->nom_Estudiante; ?>   </td>
                                            <td style="text-align: center;">
                                                <a href=" <?php echo base_url('Estudiante/delete/') . "/" . $value->id_Estudiante; ?>" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>  Eliminar</a>
                                                <a href="<?php echo base_url('Estudiante/edit/') . "/" . $value->id_Estudiante; ?>" class="btn btn-default"><span class="glyphicon  glyphicon-edit" aria-hidden="true"></span>  Editar</a>
                                            </td>

                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="profile">

                            <form method="POST" action="<?php echo base_url('Estudiante/insert'); ?>">


                         <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Numero de Matricula </label>
                                        <input type="text" class="form-control" id="matricula_Estudiante" name="matricula_Estudiante" aria-describedby="emailHelp" placeholder="000">
                                    </div>
                                    <div class="form-group">
                                        
                                        <input type="hidden" class="form-control" id="fech_matricula_Estudiante" name="fech_matricula_Estudiante" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cedula </label>
                                        <input type="text" class="form-control" id="cedula_Estudiante" name="cedula_Estudiante" aria-describedby="emailHelp" placeholder="cedula de ciudadania">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Apellidos </label>
                                        <input type="text" class="form-control" id="ape_Estudiante" name="ape_Estudiante" aria-describedby="emailHelp" placeholder="Apellidos">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombres </label>
                                        <input type="text" class="form-control" id="nom_Estudiante" name="nom_Estudiante" aria-describedby="emailHelp" placeholder="Nombres">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="fech_nac_Estudiante" name="fech_nac_Estudiante" placeholder="contraseña"/>
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
                                        </br>
                                        <select name="id_Representantes" id="combobox"> <?php   foreach ($selRepresentante as $key => $value) {?>
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

