<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// Incluimos el archivo fpdf
require_once APPPATH . "/third_party/fpdf_1.php";

//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class Pdf2 extends FPDF {

    public function __construct() {
        
        parent::__construct();
    }

    // El encabezado del PDF
    public function Header() {
        date_default_timezone_set('America/Guayaquil');
        $this->Image('Public/assets/img/logo23.jpeg', 35, 4, 40);
        //$this->Cell(30);
        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 0, date('H:i:s'), 0, 0, 'R');
        $this->SetFont('Arial', 'B', 19);
        $this->Ln(9);
        $this->Cell(0, 0, utf8_decode('UNIDAD EDUCATIVA PARTICULAR "JUAN LEON MERA"'), 0, 0, 'C');
        $this->Ln(7);
        $this->SetFont('Arial', 'B', 10);

        $this->Cell(0, 0, utf8_decode('RESOLUCCIÓN N° 038'), 0, 0, 'C');

        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 0, date('d/m/Y'), 0, 0, 'R');
        $this->Ln(7);
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 0, 'Reporte Final de Notas', 0, 0, 'C');
        $this->Ln(7);
        
        $this->SetFont('Arial', 'B', 10);
        
        $this->Cell(40);
        $this->Cell(20, 6, utf8_decode("DIRCCIÓN:"), 0, 0, 'L');
        $this->SetFont('Arial', '', 8);
        $this->Cell(90, 6, utf8_decode("SDASDASDASDASDSASDASDASD ASASA"), 0, 0, "L");
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(35, 6, utf8_decode("CÓDIGO AMIE:"), 0, 0, 'L');
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 6, utf8_decode("13H04278"), 0, 0, 'L');
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(35, 6, utf8_decode("TELÉFONO:"), 0, 0, 'L');

        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 6, utf8_decode("0986424074"), 0, 1, 'L');
        $this->Cell(40);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(20, 6, utf8_decode("E-MAIL:"), 0, 0, 'L');
        $this->SetFont('Arial', '', 8);
        $this->Cell(90, 6, utf8_decode("SDASDASDASDASDSASDASDASD ASASA"), 0, 0, "L");
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(35, 6, utf8_decode("CANTÓN:"), 0, 0, 'L');
        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 6, utf8_decode("Jaramijó"), 0, 0, 'L');
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(35, 6, utf8_decode("PARROQUIA:"), 0, 0, 'L');

        $this->SetFont('Arial', '', 8);
        $this->Cell(30, 6, utf8_decode("Jaramijó"), 0, 1, 'L');



        
    }

    // El pie del pdf
    public function Footer() {
        //Posición: a 1,5 cm del final
        $this->SetY(-15);
        //Arial italic 8
        $this->SetFont('Arial', 'I', 9);
        //Número de página
        #$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        $this->Cell(50, 6, '_____________________________', 0, 0, 'C');
        $this->Ln();
        $this->Cell(50, 6, 'Firma Maestro', 0, 0, 'C');

        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');

        //Posición: a 1,5 cm del final
        $this->SetY(-15);
        $this->Setx(-75);
        //Arial italic 8
        $this->SetFont('Arial', 'I', 9);
        //Número de página
        #$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        $this->Cell(50, 6, '_____________________________', 0, 0, 'C');
        $this->Ln();
        $this->Setx(-75);
        $this->Cell(50, 6, 'Firma Maestro', 0, 0, 'C');
    }

}
?>;