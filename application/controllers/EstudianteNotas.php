

<?php

/**
 * 
 */
class EstudianteNotas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Modelo_EstudianteNotas");
    }

    public function notas() {
        # code...

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Estudiante') {

            $data['contenido'] = "Estudiante/notas";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $cedula = $this->session->userdata('id_cedula');
            $data['Materiasnotas'] = $this->Modelo_EstudianteNotas->selmateriasnotas($cedula);

            $this->load->view("plantilla_Estudiante", $data);
        } else {
            redirect(base_url(''));
        }
    }

    public function obs() {
        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Estudiante') {

            $data['contenido'] = "Estudiante/obs";
            //$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
            //$data['selCursos']=$this->Modelo_Materias->selCursos();
            $data['user'] = $this->session->userdata('username');
            $cedula = $this->session->userdata('id_cedula');
            $data['Bitacora'] = $this->Modelo_EstudianteNotas->Bitacora($cedula);
            $data['BitacoraIn'] = $this->Modelo_EstudianteNotas->BitacoraIndi($cedula);

            $this->load->view("plantilla_Estudiante", $data);
        } else {
            redirect(base_url(''));
        }
    }

}
?>