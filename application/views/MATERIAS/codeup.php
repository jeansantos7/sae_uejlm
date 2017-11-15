 var html = '<table class="table table-bordered table-hover ">' +
                        '<thead>' +
                        '<th>ID</th>' +
                        '<th>Cedula</th>' +
                        '<th>Nombre</th>' +
                        '<th>NotaP1Q1</th>' +
                        '<th>NotaP2Q1</th>' +
                        '<th>NotaP3Q1</th>' +
                        '<th>NotaPOQ1</th>' +
                        '<th>NotaEQ1</th>' +
                        '<th>NotaEPQ1</th>' +
                        '<th>NotaPROQ1</th>' +
                        '<th>NotaP1Q2</th>' +
                        '<th>NotaP2Q2</th>' +
                        '<th>NotaP3Q2</th>' +
                        '<th>NotaPOQ2</th>' +
                        '<th>NotaEQ2</th>' +
                        '<th>NotaEPQ2</th>' +
                        '<th>NotaPROQ2</th>' +
                        '<th>TOTAL</th>' +
                        '<th>NOTARE</th>' +
                        '<th>NOTAREME</th>' +
                        '<th>NOTAEXA</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                var con = 1;
                if(data){
                    $.each(JSON.parse(data), function (i, item) {
                    //alert(item.nom_Estudiante);
                    html += "<tr><td>" + con + "</td><td><input type='hidden' name='materia' value='" + IDmateria + "'>";
                    html += "<input type='hidden' name='curso' value='" + IDCurso + "'>";
                    html += "<input type='hidden' name='profesor' value='" + CIProfe + "'>";
                    html += "<input type='hidden' name='cedu" + con + "' id='' value='" + item.cedula_Estudiante + "'>" + item.cedula_Estudiante + '</td>';
                    html += "<td>" + item.nom_Estudiante + " " + item.ape_Estudiante + '</td>';
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial1q1_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial2q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial3q1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examenq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examen_porcentajeq1_MateriasNotas + "' style='  '></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq1_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial1q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial2q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notaparcial3q2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.porcentajeq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examenq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.nota_examen_porcentajeq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.promedioq2_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='total" + con + "' value='" + (parseFloat(item.promedioq1_MateriasNotas) + parseFloat(item.promedioq2_MateriasNotas)) + "' style=' width: 52px;'></td>";

                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notarec_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control'  name='notaq1" + con + "' value='" + item.notareme_MateriasNotas + "' style=''></td>";
                    html += "<td><input type='text' readonly='readonly' class='form-control' name='notaq2" + con + "' value='" + item.notaexa_MateriasNotas + "' style=''></td>";
                    html += "</tr>";
                    
                    con++;
                });
                }
                html += '</tbody></table>';
                html += '<input type="submit" value="Enviar" name="Enviar">';
                $("#notasdatos2").html(html);

            }
            
            
            var html = '<table class="table table-bordered table-hover ">' +
                        '<thead>' +
                        '<tr><td><select  id="quimestre" name="quimestre" class="" onchange="">' +
                        '<option value="">Seleccione</option>' +
                        '<option value="Q1">Q1</option>' +
                        '<option value="Q2">Q2</option>' +
                        '</select></td></tr>' +
                        '<tr>' +
                        '<th>ID</th>' +
                        '<th>Cedula</th>' +
                        '<th>Nombre</th>' +
                        '<th>Parcial 1</th>' +
                        '<th>Parcial 2</th>' +
                        '<th>Parcial 3</th>' +
                        '<th>80%</th>' +
                        '<th>Examen</th>' +
                        '<th>20%</th>' +
                        '<th>Promedio</th>' +
                        '</tr>' +
                        '</thead>' +
                        '<tbody>';

                var con = 1;
                $.each(JSON.parse(data), function (i, item) {


                    //alert(item.nom_Estudiante);
                    html += "<tr><td>" + con + "</td><td><input type='hidden' name='materia' value='" + IDmateria + "'>";
                    html += "<input type='hidden' name='curso' value='" + IDCurso + "'>";
                    html += "<input type='hidden' name='profesor' value='" + CIProfe + "'>";
                    html += "<input type='hidden' name='cedu" + con + "' id='' value='" + item.cedula_Estudiante + "'>" + item.cedula_Estudiante + '</td>';
                    html += "<td>" + item.nom_Estudiante + " " + item.ape_Estudiante + '</td>';
                    html += "<td><input type='text' onchange='calculos(" + con + ")'  class='form-control' name='notaParcial1" + con + "'  "; if(item.notaparcial1q1_MateriasNotas!=null){ html += "readonly='readonly'";} html +=" value='"; if(item.notaparcial1q1_MateriasNotas!=null){ html += ""+item.notaparcial1q1_MateriasNotas+"";} html +="' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaParcial2" + con + "' "; if(item.notaparcial1q2_MateriasNotas!=null){ html += "readonly='readonly'";} html +=" value='"; if(item.notaparcial1q2_MateriasNotas!=null){ html += ""+item.notaparcial1q1_MateriasNotas+"";} html +="' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaParcial3" + con + "' "; if(item.notaparcial1q3_MateriasNotas!=null){ html += "readonly='readonly'";} html +=" value='"; if(item.notaparcial1q3_MateriasNotas!=null){ html += ""+item.notaparcial1q1_MateriasNotas+"";} html +="' style=' width: 52px;'></td>";
                    html += "<td><input type='text' class='form-control' name='porcenta" + con + "' readonly='readonly' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' onchange='calculos(" + con + ")' class='form-control' name='notaexamen" + con + "' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text'  class='form-control' name='porcentaexamen" + con + "' readonly='readonly' value='' style=' width: 52px;'></td>";
                    html += "<td><input type='text' class='form-control' name='promediototal" + con + "'  value='' style=' width: 52px;' readonly='readonly'></td></tr>";

                    html += "<input type='hidden' name='filas' value='" + con + "'>"
                    con++;
                });
                html += '</tbody></table>';
                html += '<input type="submit" value="Enviar" name="Enviar">';