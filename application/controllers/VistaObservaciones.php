<?php

class VistaObservaciones extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_EstudianteNotas");
    }

    function index() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {

            $data['contenido'] = "obs/bs";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $cedula = $this->session->userdata('id_cedula');
            $data['Bitacora'] = $this->Modelo_EstudianteNotas->BitacoraDirec($cedula);
            $data['BitacoraIn'] = $this->Modelo_EstudianteNotas->BitacoraIndiDirec($cedula);

            $this->load->view("plantilla_directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

}

?>