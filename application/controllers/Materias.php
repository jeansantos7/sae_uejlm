<?php

/**
* 
*/
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

		$data['contenido'] = "Materias/index";
		$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
		$data['selCursos']=$this->Modelo_Materias->selCursos();
		$this->load->view("plantilla4", $data);
	}


	public function insert()
	{
		$datos=$this->input->post();

		if (isset($datos)) {
			$nom_Materias=$datos['nom_Materias'];
			$nom_corto_Materias=$datos['nom_corto_Materias']; 
			$id_Curso= $datos['id_Curso'];

			$this->Modelo_Materias->inserMaterias( $nom_Materias, $nom_corto_Materias, $id_Curso);
			redirect('/Materias');
		}


	}
}






 ?>
