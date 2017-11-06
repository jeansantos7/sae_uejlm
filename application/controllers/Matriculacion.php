<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/**
* 
*/
class Matriculacion extends CI_Controller
{
	
	function __construct()
	{
		 parent::__construct();
        $this->load->model("Modelo_Matriculacion");
	}


	 public function index() {

        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {
            $data['contenido'] = "MATRICULACION/index";
            //$data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
            //$data['selRepresentante'] = $this->Modelo_Estudiante->selRepresentante();
          //  $data['listarEstudiante'] = $this->Modelo_Estudiante->listarEstudiante();
            $data['selEstudiante']=$this->Modelo_Matriculacion->selEstudiante();
            $data['selCursos']=$this->Modelo_Matriculacion->selCursos();
            $data['selRepresentante']=$this->Modelo_Matriculacion->selRepresentante();
            $data['selLectivo']=$this->Modelo_Matriculacion->selLectivo();
            $data['user'] = $this->session->userdata('username');
            $this->load->view("plantilla_Secretaria", $data);
        } else {
            redirect(base_url(''));
        }
    }








}






?>

