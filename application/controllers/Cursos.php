<?php

/**
* 
*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cursos extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Cursos");

	}


	public function index()
	{
		# code...

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion'
			|| $this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {


		$data['contenido'] = "Cursos/index";
		$data['listarCursos']=$this->Modelo_Cursos->listarCursos();
		$data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Secretaria", $data);
	}

	else {
            redirect(base_url(''));
        }

}


	public function insert()
	{
		$datos=$this->input->post();

		if (isset($datos)) {
			$nom_Cursos=$datos['nom_Cursos'];
			$nivel_Cursos=$datos['nivel_Cursos']; 


			$this->Modelo_Cursos->inserCursos( $nom_Cursos, $nivel_Cursos);
			redirect('/Cursos');
		}


	}

	


	
}






 ?> 