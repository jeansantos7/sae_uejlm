<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
          <h1 class="text-titles"> <i class="zmdi zmdi-money zmdi-hc-fw"> </i> Registro de Pensiones <small></small></h1>
    </div>
</div>
<div class="full-box text-center" style="padding: 30px 10px; ">
    <ul class="nav nav-tabs" style="margin-bottom: 15px; height: 42px;">
        <li class="active"><a href="#new" data-toggle="tab"></a></li>
        <li><a href="#list" data-toggle="tab"> <div class="ripple-container"></div></a></li>

    </ul>

    <?php foreach ($datosPensiones as $key => $value) { ?>
        <form method="POST" action="<?php echo base_url('Pensiones/insert'); ?>" id="formulario" >

            <div class="col-md-6">
                <input type="hidden" name="id_Estudiante" value=" <?php echo $value->id_Estudiante; ?>">
                <div class="form-group label-floating">
                    <label class="control-label"> Cedula </label>
                    <input class="form-control" id="cedula_Estudiante_Pensiones" type="text"
                           name="cedula_Estudiante_Pensiones" aria-describedby="emailHelp" 
                           value="<?php echo $value->cedula_Estudiante; ?>" >
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Apellidos</label>
                    <input class="form-control" type="text" id="ape_Estudiante_Pensiones" name="ape_Estudiante_Pensiones" aria-describedby="emailHelp" value="<?php echo $value->ape_Estudiante; ?>"  >
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Nombres</label>
                    <input class="form-control" type="text" id="nom_Estudiante_Pensiones" name="nom_Estudiante_Pensiones" aria-describedby="emailHelp" value="<?php echo $value->nom_Estudiante; ?>"  >
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-1">
                <div class="form-group">
                    <label class="control-label">Mes</label>
                    <select onchange="Valor(this.value)" name="mes_Pensiones" id="mes_Pensiones"  class="form-control">
                        <option value="0" >Enero</option>
                        <option  value="1">Febrero</option>
                        <option value="2" >Marzo</option>
                        <option value="3"  >Abril</option>
                        <option value="4" >Mayo</option>
                        <option  value="5" >Junio</option>
                        <option  value="6" >Julio</option>
                        <option  value="7" >Agosto</option>
                        <option  value="8" >Septiembre</option>
                        <option  value="9" >Octubre</option>
                        <option  value="10" >Noviembre</option>
                        <option  value="11" >Diciembre</option>
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label">Valor de Pension</label>
                    <input class="form-control" type="text"  aria-describedby="emailHelp"
                           value="<?php echo $value->pension_Estudiante; ?>" name="valor_de_matricula" id="valor_de_matricula">
                </div>
                <div class="form-group label-floating">
                    <label >Valor que Debe</label>
                    <input class="form-control" type="text"   aria-describedby="emailHelp"
                           id="valorquedebe"  value="" readonly="readonly">
                </div>
                <div class="form-group label-floating">
                    <label >Ingrese valor a Pagar</label>
                    <input class="form-control" type="text"  aria-describedby="emailHelp"
                           id="valor_Pensiones" name="valor_Pensiones" aria-describedby="emailHelp"   value="" onkeypress="return filterFloat(event,this);">
                </div>
                <input type="hidden" class="form-control"  id="fech_Pensiones" name="fech_Pensiones" aria-describedby="emailHelp" >
                <div class="form-actions">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-info btn-raised btn-sm" id="btn-ingresar" >
                        <i class="zmdi zmdi-floppy"> </i> Guardar Pago</button>
                        
                        <button type="button"  class="btn btn- btn-raised btn-sm" id="btn-cancelar" >
                        <i class="zmdi zmdi-close"><a href="<?php echo base_url('/PENSIONES/'); ?>"> </i> Cancelar</button>

                    </div>
                </div>
            </div>
        </form>
    <?php } ?>



</div>
<script src="<?php echo base_url('public/js/jquery.js'); ?>">
    
</script>
<script>
                    $(document).on('ready', function () {

                        $('#btn-ingresar').click(function () {
                            //alert($("#formulario").serialize());
                            var url = "<?php echo base_url('Pensiones/Pensi_insert'); ?>";
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: $("#formulario").serialize(),
                                beforeSend: function () {
                                    $("#resultado").html("Procesando, espere por favor...");
                                },
                                success: function (data)
                                {

                                    if (data.Valorquedebe == data.valortotal) {
                                        $("#valorquedebe").val(data.Valorquedebe);
                                        $("#valor_Pensiones").val("valor_");
                                    } else {
                                        $("#valor_Pensiones").prop("disabled", true);
                                        $("#btn-ingresar").prop("disabled", true);
                                        $("#valor_Pensiones").val("");
                                        $("#valorquedebe").val(data.Valorquedebe);
                                        location.href = "../";
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    $("#resp").html(errorThrown);
                                }
                            });
                        });
                        Valor(0);
                    });
                    function Valor(id) {
                        $("#valor_Pensiones").prop("disabled", false);
                        $("#btn-ingresar").prop("disabled", false);
                        //                var a = id;
                        //                alert(a);
                        var cedula = $("#cedula_Estudiante_Pensiones").val();
                        var url = "<?php echo base_url('Pensiones/Consultavalores'); ?>";
                        var parametros = {
                            "id_de_mes": id,
                            "cedula_Estudiante_Pensiones": cedula
                        }
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: parametros,
                            beforeSend: function () {
                                $("#resultado").html("Procesando, espere por favor...");
                            },
                            success: function (data)
                            {
                                if (data.Valorquedebe == data.valortotal) {
                                    //                            $("#valor_Pensiones").prop("disabled", true);
                                    //                            $("#btn-ingresar").prop("disabled", true);
                                    //  $("#valor_de_matricula").val(data.valortotal);
                                    $("#valorquedebe").val("");

                                } else {
                                    $("#valorquedebe").val(data.Valorquedebe);
                                    //$("#valor_de_matricula").val(data.valortotal);
                                    if (data.Valorquedebe <= 0) {
                                        $("#valor_Pensiones").prop("disabled", true);
                                    }
                                    $("#valor_Pensiones").val("");
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                $("#resp").html(errorThrown);
                            }
                        });
                    }

                    function filterFloat(evt,input){
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if(key >= 48 && key <= 57){
        if(filter(tempValue)=== false){
            return false;
        }else{       
            return true;
        }
    }else{
          if(key == 8 || key == 13 || key == 0) {     
              return true;              
          }else if(key == 46){
                if(filter(tempValue)=== false){
                    return false;
                }else{       
                    return true;
                }
          }else{
              return false;
          }
    }
}
function filter(__val__){
    var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
    if(preg.test(__val__) === true){
        return true;
    }else{
       return false;
    }
    
}
</script>