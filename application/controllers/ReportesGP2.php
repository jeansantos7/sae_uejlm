<?php

class ReportesGP2 extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index2() {
        $this->load->model('Modelo_ReportesGP');
        $this->load->library('pdf');
        $pdf = new PDF('L');
        $this->pdf->AliasNbPages();
        $this->pdf->AddPage();
        $datos = $this->input->post();
        if (isset($datos)) {
            $this->pdf->Cell(25, 6, 'Maestro Guia:', 0);
            $this->pdf->Cell(100, 6, utf8_decode($_POST["materia"]), 0);
            $this->pdf->Cell(20, 6, 'Grado :', 0);
            $this->pdf->Cell(30, 6, utf8_decode($_POST["curso"]), 0);
            $this->pdf->Cell(20, 6, utf8_decode('Año :'), 0);
            $this->pdf->Cell(50, 6, utf8_decode("s"), 0);
            $this->pdf->Ln(7);
            $alumnos = $this->Modelo_ReportesGP->obtenerListaAlumnos($_POST["materia"], $_POST["curso"]);
            $this->pdf->SetTitle("Lista de alumnos");
            $this->pdf->SetLeftMargin(15);
            $this->pdf->SetRightMargin(15);
            $this->pdf->SetFillColor(200, 200, 200);
            $this->pdf->SetFont('Arial', 'B', 9);
            /* TITULOS DE COLUMNAS
             * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
             */
            $this->pdf->SetFillColor(232, 232, 232);
            $this->pdf->SetFont('Arial', 'B', 9);

            $w = array(8, 80, 56, 70, 8, 25);
            $this->pdf->Cell($w[0], 10, 'No.', 1, 0, 'C', 1);
            $this->pdf->Cell($w[1], 10, 'Alumnas', 1, 0, 'C', 1);

            $this->pdf->Cell($w[2], 5, utf8_decode('Quimestre 1'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[2], 5, utf8_decode('Quimestre 2'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Promedio'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Recuperacion'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Remedial'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Examen'), 1, 0, 'C', 1);
            $this->pdf->Ln();

            $this->pdf->Cell($w[0], 5, '');
            $this->pdf->Cell($w[1], 5, '');
            
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P2', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P3', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'P', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'E', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'EP', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'PT', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P2', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P3', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'P', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'E', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'EP', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'PT', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
           

            #Estudios Sociales
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Ln();
            $x = 1;
            foreach ($alumnos as $key => $value) {
                $this->pdf->Cell($w[0], 4, $x++, 1, 0, 'C');
                $this->pdf->Cell($w[1], 4, utf8_decode($value->ape_Estudiante) . ' ' . utf8_decode($value->nom_Estudiante), 1);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial1q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial2q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial3q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->porcentajeq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examenq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examen_porcentajeq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->promedioq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial1q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial2q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial3q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->porcentajeq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examenq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examen_porcentajeq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->promedioq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->promedioq2_MateriasNotas+$value->promedioq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notarec_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notareme_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notaexa_MateriasNotas), 1, 0, 'C');
                

                $this->pdf->Ln();
            }
            $this->pdf->Output("Lista de alumnos.pdf", 'I');
        }
    }

    function index() {
        $data['contenido'] = "REGISTRODIRECTIVO/index";


        $this->load->view("ReporteGP", $data);
    }
    public function reporteNotas() {
      $this->load->library('pdf');
        $pdf = new PDF();

        $this->pdf->AliasNbPages();
        $this->pdf->AddPage();
       ///


       if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Estudiante') {
           $this->load->model("Modelo_EstudianteNotas");
            $cedula = $this->session->userdata('id_cedula');
            $alumnos = $this->Modelo_EstudianteNotas->selmateriasnotas($cedula);
            foreach ($alumnos as $key => $value) {
               $nombre = $value->ape_Estudiante . " " . $value->nom_Estudiante;
                $curso = $value->nom_Cursos;
            }
            $this->pdf->SetFont('Arial', 'B', 10);
            $this->pdf->Cell(1, 6, '', 0);
            $this->pdf->Cell(80, 6, utf8_decode("Alumno: " . $nombre), 0, 0, "L");
            $this->pdf->Cell(80, 6, utf8_decode('Curso: ' . $curso), 0, 0, "L");
            //$this->pdf->Cell(40, 6, 'Paralelo:', 0);
            $this->pdf->Ln(8);

            $this->pdf->SetFillColor(232, 232, 232);
            $this->pdf->SetFont('Arial', 'B', 9);

            $w = array(8, 110, 56, 70, 8, 25);
            $this->pdf->Cell($w[0], 10, 'No.', 1, 0, 'C', 1);
            $this->pdf->Cell($w[1], 10, 'Materias', 1, 0, 'C', 1);

            $this->pdf->Cell($w[2], 5, utf8_decode('Quimestre 1'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[2], 5, utf8_decode('Quimestre 2'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Promedio'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Recuperacion'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Remedial'), 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, utf8_decode('Examen'), 1, 0, 'C', 1);
            $this->pdf->Ln();

            $this->pdf->Cell($w[0], 5, '');
            $this->pdf->Cell($w[1], 5, '');
//Quimestre1
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P2', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P3', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'P', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'E', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'EP', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'PT', 1, 0, 'C', 1);
//Quimestre2
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P2', 1, 0, 'C', 1);
            $this->pdf->Cell($w[4], 5, 'P3', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'P', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Cell($w[4], 5, 'E', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'EP', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[4], 5, 'PT', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            //Recuperacion
            $this->pdf->SetFont('Arial', 'B', 9);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->Cell($w[5], 5, 'P1', 1, 0, 'C', 1);
            $this->pdf->SetFont('Arial', '', 9);
            $this->pdf->Ln();
            $x = 1;
            foreach ($alumnos as $key => $value) {
                $this->pdf->Cell($w[0], 4, $x++, 1, 0, 'C');
                $this->pdf->Cell($w[1], 4, utf8_decode($value->nom_Materias), 1, 0, "L");
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial1q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial2q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial3q1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->porcentajeq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examenq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examen_porcentajeq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->promedioq1_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial1q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial2q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->notaparcial3q2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->porcentajeq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examenq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->nota_examen_porcentajeq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', 'B', 9);
                $this->pdf->Cell($w[4], 4, sprintf("%.1F", $value->promedioq2_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", ($value->promedioq2_MateriasNotas + $value->promedioq1_MateriasNotas) / 2), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notarec_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notareme_MateriasNotas), 1, 0, 'C');
                $this->pdf->Cell($w[5], 4, sprintf("%.1F", $value->notaexa_MateriasNotas), 1, 0, 'C');
                $this->pdf->SetFont('Arial', '', 9);
                $this->pdf->Ln();
            }
        }





        ////
        $this->pdf->Output("Lista de alumnos.pdf", 'I');
    }
}
