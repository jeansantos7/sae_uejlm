<?php

/**
 * 
 */
class Docente extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_RegistroDocente");
    }

    public function index() {
        # code...

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Profesor') {

            $data['contenido'] = "Docente/index";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Docente", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function Materias() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Profesor') {

            $data['contenido'] = "Docente/Materias";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $cedula = $this->session->userdata('id_cedula');
            $data['MisMaterias'] = $this->Modelo_RegistroDocente->MateriasLista($cedula);

            $this->load->view("plantilla_Docente", $data);
        } else {
            redirect(base_url(''));
        }
    }

}

?>