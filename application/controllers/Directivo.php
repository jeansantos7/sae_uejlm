<?php

class Directivo extends CI_Controller
{
	
	

	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Directivo");

	}


	public function index()
	{
		# code...

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion')
		{

		$data['contenido'] = "Directivo/index";
		//$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
		//$data['selCursos']=$this->Modelo_Materias->selCursos();
                $data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Prueba", $data);
	}
	else
	{
		 redirect(base_url(''));
	}
	}

}
?>