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
}
