<?php foreach ($datosPensiones as $key => $value) { ?>

    <form method="POST" action="<?php echo base_url('Pensiones/insert'); ?>" id="formulario">
        <input type="hidden" name="id_Estudiante" value=" <?php echo $value->id_Estudiante; ?>">

        <div class="form-group">


        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cedula </label>
            <input type="text" class="form-control" readonly="readonly" id="cedula_Estudiante_Pensiones"
                   name="cedula_Estudiante_Pensiones" aria-describedby="emailHelp" value="<?php echo $value->cedula_Estudiante; ?>"">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Apellidos </label>
            <input type="text" class="form-control"  id="ape_Estudiante_Pensiones" name="ape_Estudiante_Pensiones" aria-describedby="emailHelp" value="<?php echo $value->ape_Estudiante; ?>"">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Nombres </label>
            <input type="text" class="form-control"  id="nom_Estudiante_Pensiones" name="nom_Estudiante_Pensiones" aria-describedby="emailHelp" value="<?php echo $value->nom_Estudiante; ?>">
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Mes a Pagar </label>
            <select onchange="Valor(this.value)" name="mes_Pensiones" id="mes_Pensiones" >

                <option value="1" >Enero</option>
                <option  value="2">Febrero</option>
                <option value="3" >Marzo</option>
                <option value="4"  >Abril</option>
                <option value="5" >Mayo</option>
                <option  value="6" >Junio</option>
                <option  value="7" >Julio</option>
                <option  value="8" >Agosto</option>
                <option  value="9" >Septiembre</option>
                <option  value="10" >Octubre</option>
                <option  value="11" >Noviembre</option>
                <option  value="12" >Diciembre</option>
            </select>
        </div>


        <div class="form-group" id="">
            <label for="exampleInputEmail1">Valor de Pension </label>
            <input type="text" class="form-control" readonly="readonly" aria-describedby="emailHelp"  
             value="<?php echo $value->pension_Estudiante; ?>" name="valor_de_matricula" id="valor_de_matricula">


    <!--            <input type="hidden" name="valor_de_matricula" id="valor_de_matricula" value=""-->
        </div>
        <div class="form-group" id="">
            <label for="exampleInputEmail1">Valor que Debe </label>
            <input type="text" class="form-control" disabled aria-describedby="emailHelp" id="valorquedebe"  value="">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ingrese valor a Pagar </label>
            <input type="text" class="form-control" id="valor_Pensiones" name="valor_Pensiones" aria-describedby="emailHelp"   value="">
        </div>

        <div class="form-group">
           
                       <input type="hidden" class="form-control"  id="fech_Pensiones" name="fech_Pensiones" aria-describedby="emailHelp" >
        </div>


        <button type="button" class="btn btn-primary" id="btn-ingresar">Guardar Pago</button>



    <?php } ?>
    <script src="<?php echo base_url('public/js/jquery.js'); ?>"></script>

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
                                location.href="../";
                             //   location.href"../Pensiones";

                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            $("#resp").html(errorThrown);
                        }
                    });

                });
                Valor(1);
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
//                         $("#btn-ingresar").prop("disabled", true);
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

    </script>