<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// Incluimos el archivo fpdf
require_once APPPATH . "/third_party/fpdf.php";

//Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
class Pdf extends FPDF {

    public function __construct() {
        parent::__construct();
    }

    // El encabezado del PDF
    public function Header() {
        $this->Image('Public/assets/img/avatar.jpg', 10, 8, 22);
        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 0, date('g:i:s a'), 0, 0, 'R');
        $this->SetFont('Arial', 'B', 15);
        $this->Ln(5);
        $this->Cell(0, 0, utf8_decode("COMPANY"), 0, 0, 'C');

        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 0, date('d/m/Y'), 0, 0, 'R');
        $this->Ln(5);
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 0, 'Reporte Final de Notas', 0, 0, 'C');
        $this->SetFont('Arial', '', 9);
        $this->Cell(0, 0, 'Pagina ' . $this->PageNo() . ' de {nb}', 0, 0, 'R');

        $this->SetFont('Arial', '', 11);
        $this->Ln(15);
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