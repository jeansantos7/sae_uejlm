<?php


/**
* 
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Secretaria extends CI_Controller
{
	
	function __construct()
	{
			
		parent::__construct();
        $this->load->model("Modelo_Secretaria");
	}

	 public function index() {


        if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'Secretario') {


        $data['contenido'] = "SECRETARIA/index";
         $data['user'] = $this->session->userdata('username');

        $this->load->view("plantilla_Secretaria", $data);

    }

    else
    {

         redirect(base_url(''));
    }
    }
}


?>