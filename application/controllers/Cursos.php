<?php

/**
* 
*/
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

		$data['contenido'] = "Cursos/index";
		$data['listarCursos']=$this->Modelo_Cursos->listarCursos();
		$this->load->view("plantilla4", $data);
	}


	public function insert()
	{
		$datos=$this->input->post();

		if (isset($datos)) {
			$nom_Cursos=$datos['nom_Cursos'];
			$nom_corto_Cursos=$datos['nom_corto_Cursos']; 

			$this->Modelo_Cursos->inserCursos( $nom_Cursos, $nom_corto_Cursos);
			redirect('/Cursos');
		}


	}
}






 ?> 