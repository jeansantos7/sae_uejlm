<?php
echo $cedula;
?>
<select size="1" id="s" name="s" class="" onchange="matriaestudiante(this.value)">
    <option value="">Seleccione</option>
    <?php foreach ($lista_materias as $key => $value) {
        ?>
        <option value="<?php echo $value->id_Materias . ',' . $value->id_cursos; ?>"><?php echo "Materia: " . $value->nom_Materias . ' Curso: ' . $value->nom_Cursos . ' ' . $value->id_cursos; ?></option>
    <?php } ?>
</select>



<div><form id="datos12" name="form" action="<?php echo base_url('MateriaNotas/NotasALumnos');?>" method="POST"></form></div>

<script>
    function matriaestudiante(idmaterias) {

        var cadena = idmaterias,
                separador = ",", // un espacio en blanco
                limite = 2,
                arregloDeSubCadenas = cadena.split(separador);
        var IDmateria = arregloDeSubCadenas[0];
        var IDCurso = arregloDeSubCadenas[1];
        var CIProfe="<?php echo $cedula;?>";
        var parametros = {
            "id_materia": arregloDeSubCadenas[0],
            "Id_Curso": arregloDeSubCadenas[1]
        };
        var url = "<?php echo base_url('MateriaNotas/ConsultaAlumnos'); ?>";
        $.ajax({
            data: parametros,
            url: url,
            type: 'POST',
            success: function (data, textStatus, jqXHR) {
                var html = '<table class="table table-hover table-light">' +
                        '<thead>' +
                        '<tr><td><select  id="quimestre" name="quimestre" class="" onchange="">'+
                        '<option value="">Seleccione</option>'+
                        '<option value="Q1">Q1</option>'+
                        '<option value="Q2">Q2</option>'+
                        '</select></td></tr>'+
                        '<tr>' +
                        '<th>ID</th>' +
                        '<th>Cedula</th>' +
                        '<th>Nombre</th>' +
                        '<th>Parcial 1</th>' +
                        '<th>Parcial 2</th>' +
                        '<th>Parcial 3</th>' +
                        '<th>Porcentaje 80%</th>' +
                        '<th>Nota de examen</th>' +
                        '<th>Porentaje del Examen 20%</th>' +
                        '<th>Promedio</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                var con=1;
                $.each(JSON.parse(data), function (i, item) {
                    //alert(item.nom_Estudiante);
                    html += "<tr><td>"+con+"</td><td><input type='hidden' name='materia' value='"+IDmateria+"'>";
                    html += "<input type='hidden' name='curso' value='"+IDCurso+"'>";
                    html += "<input type='hidden' name='profesor' value='"+CIProfe+"'>";
                    html+="<input type='hidden' name='cedu"+con+"' id='' value='"+item.cedula_Estudiante+"'>" + item.cedula_Estudiante + '</td>';
                    html += "<td>" + item.nom_Estudiante +" "+ item.ape_Estudiante+'</td>';
                    html += "<td><input type='text' name='notaParcial1"+con+"' value='notaParcial1"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='notaParcial2"+con+"' value='notaParcial2"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='notaParcial3"+con+"' value='notaParcial3"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='porcenta"+con+"' value='porcenta"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='notaexamen"+con+"' value='notaexamen"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='porcentaexamen"+con+"' value='porcentaexamen"+con+"' style=' width: 52px;'></td>";
                    html += "<td><input type='text' name='promediototal"+con+"' value='promediototal"+con+"' style=' width: 52px;'></td></tr>";
                    
                    html+="<input type='hidden' name='filas' value='"+con+"'>"
                    con++;
                });
                html += '</tbody></table>';
                html += '<input type="submit" value="Enviar" name="Enviar">';
                $("#datos12").html(html);
            },
            beforeSend: function (xhr) {
                alert("Procesando, espere por favor...");

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);

            }

        });



    }

</script>
