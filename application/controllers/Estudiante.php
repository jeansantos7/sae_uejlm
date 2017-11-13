<?php


/**
* 
*/
class Estudiante extends CI_Controller
{
	
	

	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Estudiante");

	}


	public function index()
	{
		# code...

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Estudiante')
		{

		$data['contenido'] = "Estudiante/index";
		//$data['listarMaterias']=$this->Modelo_Materias->listarMaterias();
		//$data['selCursos']=$this->Modelo_Materias->selCursos();
                $data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Estudiante", $data);
	}
	else
	{
		 redirect(base_url(''));
	}
	}

}

?>