<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 
 */
class Matriculacion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_Matriculacion");
    }

    public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {
            $data['contenido'] = "MATRICULACION/index";
            //$data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();
            $data['selEstudiante'] = $this->Modelo_Matriculacion->selEstudiante();
            $data['selCursos'] = $this->Modelo_Matriculacion->selCursos();
            $data['selRepresentante'] = $this->Modelo_Matriculacion->selRepresentante();
            $data['selLectivo'] = $this->Modelo_Matriculacion->selLectivo();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function setguardarMartricula() {
        //print_r($_POST);
        $datos = $this->input->post();

        if (isset($datos)) {

            $cedula_Estudiante_matricula = $datos["cedula_Estudiante_matricula"];
            $valorpencion = $datos["valorpencion"];
            $lectivo = $datos["lectivo"];
            $cursoselect = $datos["cursoselect"];


            $this->Modelo_Matriculacion->guardar($cedula_Estudiante_matricula, $valorpencion, $lectivo, $cursoselect);
            //redirect('/Matriculacion');
        }
    }

    public function datos($id_Estudiante = NULL) {

        if ($id_Estudiante != NULL) {
            //mostrar datos
//           $data['contenido'] = 'Pensiones/historial';
//           $data['historialEstudiante']= $this->Modelo_Pensiones->historialEstudiante();
//           $data['datosPensiones'] = $this->Modelo_Pensiones->historialEstudiante($id_Estudiante);
//           $this->load->view('plantilla5', $data);

            $data = $this->Modelo_Matriculacion->datos($id_Estudiante);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {
            $data = array('error' => 'error');
            echo json_encode($data, JSON_FORCE_OBJECT);
        }
    }

}
?>

