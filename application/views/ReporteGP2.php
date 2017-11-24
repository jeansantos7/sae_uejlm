<!--<table border="1">  Lo cambiaremos por CSS 

    <tr>
        <td rowspan="2">C</td>
        <td rowspan="2">Campo unificado</td>
        <td colspan="3">Campos 4 y 5</td>
        <td colspan="3">Campo 6</td>
    </tr>
    <tr>
        <td>Campo 7</td>
        <td>Campo 8</td>
        <td>Campo 9</td>
        <td>Campo 7</td>
        <td>Campo 8</td>
        <td>Campo 9</td>
    </tr>
</table> -->
<table border="0" width="790">
    <thead>
        <tr>
            <th><img src="http://localhost/sae_uejlm/Public/jlm.jpg"></th>
            <th>UNIDAD EDUCATIVA PARTICULAR JUAN LEON MERA </th>
            <th>23/11/2017</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td style="text-align: center;"> 
                Reporte Final de Notas</td>
            <td></td>
        </tr>
        <tr>
            <td>
                Materia:
            </td>
            <td>
                Maestro:
            </td>
            <td>
                Curso:
            </td>
            <td>
                Año:
            </td>
        </tr>
    </tbody>
</table>


<table border="1" width="790" cellpadding="2" cellspacing="0" bordercolor="666633" >
    <thead>
        <tr style="background-color: #e1e5ec; text-align: center;">

            <th rowspan="2">No.</th>
            <th rowspan="2">Alumnos</th>
            <th colspan="8">Quimestre 1</th>
            <th colspan="8">Quimestre 2</th>
            <th>Promedio</th>
            <th>Recuperacion</th>
            <th>Remedial</th>
            <th>Examen</th>


        </tr>
    </thead>
    <tbody>
        <tr style="background-color: #e1e5ec; text-align: center;">
            <td>p1</td>
            <td>p2</td>
            <td>p3</td>
            <td>p4</td>
            <td>p5</td>
            <td>p6</td>
            <td>p7</td>
            <td>p8</td>
            <td>p1</td>
            <td>p2</td>
            <td>p3</td>
            <td>p4</td>
            <td>p5</td>
            <td>p6</td>
            <td>p7</td>
            <td>p8</td>
            <td>p1</td>
            <td>p1</td>
            <td>p1</td>
            <td>p1</td>          
        </tr>
        <?php foreach ($MateriaNota as $key => $value) {
            ?>
        <tr style="text-align: center;">
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->ape_Estudiante . " " . $value->nom_Estudiante; ?></td>
                <td><?php echo $value->notaparcial1q1_MateriasNotas; ?></td>
                <td><?php echo $value->notaparcial2q1_MateriasNotas; ?></td>
                <td><?php echo $value->notaparcial3q1_MateriasNotas; ?></td>
                <td><?php echo round($value->porcentajeq1_MateriasNotas,1);?></td>
                <td><?php echo $value->nota_examenq1_MateriasNotas; ?></td>
                <td><?php echo round($value->nota_examen_porcentajeq1_MateriasNotas,1);?></td>
                <td><?php echo round($value->promedioq1_MateriasNotas,1); ?></td>
                <td><?php echo $value->notaparcial1q2_MateriasNotas; ?></td>
                <td><?php echo $value->notaparcial1q1_MateriasNotas; ?></td>
                <td><?php echo $value->notaparcial2q1_MateriasNotas; ?></td>
                <td><?php echo $value->notaparcial3q1_MateriasNotas; ?></td>
                <td><?php echo round($value->porcentajeq1_MateriasNotas,1);?></td>
                <td><?php echo $value->nota_examenq1_MateriasNotas; ?></td>
                <td><?php echo round($value->nota_examen_porcentajeq1_MateriasNotas,1);?></td>
                <td><?php echo round($value->promedioq1_MateriasNotas,1); ?></td>
                <td><?php echo $value->notaparcial1q2_MateriasNotas; ?></td>
                <td><?php echo ($value->notaparcial1q1_MateriasNotas+$value->notaparcial1q2_MateriasNotas)/2; ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        <?php } ?>




    </tbody>
</table>

