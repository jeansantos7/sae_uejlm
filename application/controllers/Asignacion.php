<?php

/**
 * 
 */
class Asignacion extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_Asignacion");
    }

    public function index() {


        if ( $this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {
        $data['contenido'] = "Asignacion/index";
        $data['ListaDocentes'] = $this->Modelo_Asignacion->ListaDocentes();
        $data['ListaMaterias'] = $this->Modelo_Asignacion->ListaMaterias();
        $data['ListaCurso'] = $this->Modelo_Asignacion->ListaCurso();
        $data['user'] = $this->session->userdata('username');

        $this->load->view("plantilla_Secretaria", $data);

    }


    elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {
   $data['contenido'] = "Asignacion/index";
        $data['ListaDocentes'] = $this->Modelo_Asignacion->ListaDocentes();
        $data['ListaMaterias'] = $this->Modelo_Asignacion->ListaMaterias();
        $data['ListaCurso'] = $this->Modelo_Asignacion->ListaCurso();
        $data['user'] = $this->session->userdata('username');

        $this->load->view("plantilla_Directivo", $data);
}
    else {
            redirect(base_url(''));
        }

    }




    public function setGuardar() {
        //print_r($_POST);
        $datos = $this->input->post();
        if (isset($datos)) {
            $docenteselect = $datos['docenteselect'];
            $materiaselect = $datos['materiaselect'];
            $cursoselect = $datos['cursoselect'];

            $this->Modelo_Asignacion->inserAsignacion($docenteselect, $materiaselect, $cursoselect);
            redirect('/Asignacion');
        }
    }
    public function setGuardarTutor() {
        print_r($_POST);
        $datos = $this->input->post();
        if (isset($datos)) {
            $docenteselect = $datos['docenteselect'];
            
            $cursoselect = $datos['cursoselect'];

            $this->Modelo_Asignacion->inserAsignacionTutor($docenteselect, $cursoselect);
            redirect('/Asignacion');
        }
    }

    public function get($cedula_docente= NULL) {


        if ($cedula_docente != NULL) {
            $data = $this->Modelo_Asignacion->MateriasLista($cedula_docente);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {

            redirect('');
        }
    }
    function delete($id) {
        if ($id != NULL) {
            $data = $this->Modelo_Asignacion->materiaborrar($id);
            echo json_encode($data, JSON_FORCE_OBJECT);
        } else {

            redirect('');
        }
    }

}

?>
