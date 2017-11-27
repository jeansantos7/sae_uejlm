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

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Docente') {

            $data['contenido'] = "Docente/index";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Docente", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function CursoTutor() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Docente') {

            $data['contenido'] = "Docente/curso";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $cedula = $this->session->userdata('id_cedula');
            $data['misEstudiantes'] = $this->Modelo_RegistroDocente->Estudiascurso($cedula);
            $data['Bitacora'] = $this->Modelo_RegistroDocente->Bitacora($cedula);

            $this->load->view("plantilla_Docente", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function Materias() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Docente') {

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

    function estudiantesnotas() {
        $cedula = $_POST["cedulaestudiante"];
        if ($cedula != NULL) {
            $data = $this->Modelo_RegistroDocente->selmateriasnotas($cedula);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {

            redirect('');
        }
    }

    function Obser() {
        $datos = $this->input->post();
         //print_r($_POST);
        if (isset($datos)) {
           
            $data = $this->Modelo_RegistroDocente->setObser($_POST["profeob"],$_POST["cedulaob"],$_POST["Incidencia"],$_POST["observ"]);
        }
    }
    function Obser12() {
        $datos = $this->input->post();
        if (isset($datos)) {
           // print_r($_POST);
            $data = $this->Modelo_RegistroDocente->setObser12($_POST["curso12"],$_POST["profeob12"],$_POST["Incidencia12"],$_POST["observ12"]);
           redirect(base_url('Docente/CursoTutor'));

        }
    }

}

?>