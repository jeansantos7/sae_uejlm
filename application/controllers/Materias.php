

<?php

/**
* 
*/
class Materias extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("Modelo_Materias");
	}


	public function index()
	{
		# code...

		if ( $this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {


		$data['contenido'] = "Materias/materias";
		$data['listarMaterias']=$this->Modelo_Cursos->listarCursos();
		$data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Secretaria", $data);
	}
elseif ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion') {
	$data['contenido'] = "Materias/materias";
		$data['listarCursos']=$this->Modelo_Cursos->listarCursos();
		$data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Directivo", $data);
}
	else {
            redirect(base_url(''));
        }

}
}

?>