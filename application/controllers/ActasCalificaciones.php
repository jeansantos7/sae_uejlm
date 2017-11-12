<?php

/**
* 
*/
class ActasCalificaciones extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Representante");
	}

	 public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {
            $data['contenido'] = "ActasCalificaciones/index";
            //$data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
            //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();
            
           
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } else {
            redirect(base_url(''));
        }
    }

}

?>