<?php

/**
 * 
 */
class ActasCalificaciones extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_ActasCalificaciones");
    }

    public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {
            $data['contenido'] = "ActasCalificaciones/index";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == '
            Directivo') {
            $data['contenido'] = "ActasCalificaciones/index";
            $data['contenido'] = "ActasCalificaciones/q2";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function q1() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {
            $data['contenido'] = "ActasCalificaciones/q1";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "ActasCalificaciones/q1";
            $data['contenido'] = "ActasCalificaciones/q1";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function q2() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {
            $data['contenido'] = "ActasCalificaciones/q2";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "ActasCalificaciones/q2";

            $data['contenido'] = "ActasCalificaciones/q2";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();

            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function extra() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretaria') {
            $data['contenido'] = "ActasCalificaciones/extra";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Directivo') {
            $data['contenido'] = "ActasCalificaciones/extra";
            $data['contenido'] = "ActasCalificaciones/q2";
            $data['lista_Curso'] = $this->Modelo_ActasCalificaciones->ListaCurso();


            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Directivo", $data);
        } else {
            redirect(base_url(''));
        }
    }

    function ListaMateriasXCurso() {
        //print_r($_POST);
        $data = $this->Modelo_ActasCalificaciones->ListaMateriasXCurso($_POST["id_Cursos"]);

        echo json_encode($data, JSON_FORCE_OBJECT);
    }

    function DatosMaterias() {
        //print_r($_POST);
        $datos = $this->input->post();
        if ($datos) {

            $data = $this->Modelo_ActasCalificaciones->ConsultaAlumnosSub($datos["id_materia"], $datos["Id_Curso"]);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }

}

?>