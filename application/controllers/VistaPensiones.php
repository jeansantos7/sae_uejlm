<?php

class VistaPensiones extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {

            $data['contenido'] = "PENSIONES/vistapenciones";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

}
