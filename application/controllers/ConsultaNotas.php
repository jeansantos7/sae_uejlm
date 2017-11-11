
<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
* 
*/
class ConsultaNotas extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("Modelo_ConsultaNotas");
	}


	public function index()
	{
		# code...

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Estudiante') {


		$data['contenido'] = "ConsultaNotas/index";
		//$data['listarCursos']=$this->Modelo_Cursos->listarCursos();
		$data['user'] = $this->session->userdata('username');
		$this->load->view("plantilla_Estudiante", $data);
	}

	else {
            redirect(base_url(''));
        }

}
}

