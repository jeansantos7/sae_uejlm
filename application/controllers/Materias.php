<?php

/**
* 
*/
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Materias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Materias");

	}


	public function index()
	{
		# code...

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario')
		{

		$data['contenido'] = "Materias/index";
		$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
		$data['selCursos']=$this->Modelo_Materias->selCursos();
                $data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Secretaria", $data);
	}
	else
	{
		 redirect(base_url(''));
	}
	}


	public function insert()
	{
		$datos=$this->input->post();

		if (isset($datos)) {
			$nom_Materias=$datos['nom_Materias'];
			$nom_corto_Materias=$datos['nom_corto_Materias']; 
			$id_Cursos= $datos['id_Cursos'];

			$this->Modelo_Materias->inserMaterias( $nom_Materias, $nom_corto_Materias, $id_Cursos);
			redirect('/Materias');
		}


	}
}






 ?>
