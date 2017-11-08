<?php

class MateriaNotas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_MateriasNotas");
    }

    function index() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Profesor') {
            $data['contenido'] = "MATERIAS/index";
//            $data['listarEstudiante_P'] = $this->Modelo_Pensiones->listarEstudiante_P();
            //          $data['listarHistorial'] = $this->Modelo_Pensiones->listarHistorial();
            $data['user'] = $this->session->userdata('username');
            $data['cedula'] = $this->session->userdata('id_cedula');
            $data['lista_materias'] = $this->Modelo_MateriasNotas->lista_materias($this->session->userdata('id_cedula'));
            $this->load->view("welcome_message", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function ConsultaAlumnos() {
        //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {
            
            $data = $this->Modelo_MateriasNotas->ConsultaAlumnos($datos["id_materia"],$datos["Id_Curso"]);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }

}
