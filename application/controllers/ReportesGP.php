<?php

class ReportesGP extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('html2pdf');
        $this->load->model('pdf_model');
    }

    function index() {
        $data['contenido'] = "ACTASCALIFICACIONES/ReporteGP";
        $data['pd']= $this->pdf_model->getProvincias();
        $this->load->view('ReporteGP', $data);
        
    }

    private function createFolder() {
        if (!is_dir("./files")) {
            mkdir("./files", 0777);
            mkdir("./files/pdfs", 0777);
        }
    }

    function Ado() {

         //establecemos la carpeta en la que queremos guardar los pdfs,
        //si no existen las creamos y damos permisos
        $this->createFolder();

        //importante el slash del final o no funcionará correctamente
        $this->html2pdf->folder('./files/pdfs/');

        //establecemos el nombre del archivo
        $this->html2pdf->filename('test.pdf');

        //establecemos el tipo de papel
        $this->html2pdf->paper('a4', 'landscape');

        //datos que queremos enviar a la vista, lo mismo de siempre
        $data = array(
            'title' => 'Listado de las Notas y materias',
            'MateriaNota' => $this->pdf_model->getMateriasDatos($_POST["curso"],$_POST["materia"])
        );

        //hacemos que coja la vista como datos a imprimir
        //importante utf8_decode para mostrar bien las tildes, ñ y demás
        $this->html2pdf->html(utf8_decode($this->load->view('ReporteGP2', $data, true)));

        //si el pdf se guarda correctamente lo mostramos en pantalla
        if ($this->html2pdf->create('save')) {
            $this->show();
        }
        //$this->load->view("ReporteGP", $data);
    }

    public function show() {
        if (is_dir("./files/pdfs")) {
            $filename = "test.pdf";
            $route = base_url("files/pdfs/test.pdf");
            if (file_exists("./files/pdfs/" . $filename)) {
                header('Content-type: application/pdf');
                readfile($route);
            }
        }
    }

}
