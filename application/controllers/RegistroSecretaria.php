<?php


/**
* 
*/
class RegistroSecretaria extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_RegistroSecretaria");
	}


	public function index()
	{

if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion' 
	 ) {

	$data['contenido'] = "REGISTROSECRETARIA/index";
	$data['selSecretaria'] = $this->Modelo_RegistroSecretaria->selSecretaria();
	$data['listarSecretaria']=$this->Modelo_RegistroSecretaria->listarSecretaria();
	 $data['user'] = $this->session->userdata('username');
	$this->load->view("plantilla_Directivo", $data);
		}
		else
		{
			 redirect(base_url(''));
		}
	}

	public function insert()
	{
		$datos=$this->input->post();

		if(isset($datos))
		{
			//$id_Secretaria = $datos['id_Secretaria'];
			$cedula_Secretaria 	=$datos['cedula_Secretaria'];
			$ape_Secretaria		=$datos['ape_Secretaria'];
			$nom_Secretaria		=$datos['nom_Secretaria'];
			$telf_Secretaria		=$datos['telf_Secretaria'];
			$correo_Secretaria		=$datos['correo_Secretaria'];
			$direc_Secretaria		=$datos['direc_Secretaria'];
			$fech_nac_Secretaria	=$datos['fech_nac_Secretaria'];
			$user_Secretaria		=$datos['user_Secretaria'];
			$pass_Secretaria		=$datos['pass_Secretaria'];

			$datoexiste=$this->Modelo_RegistroSecretaria->ConsultaExiste($cedula_Secretaria);

			if ($datoexiste ==true) {
				echo '<script languaje="javascript"> alert("este Secretaria  ya existe");
				location.href="../Secretaria";
				</script>';
			}

else{

			$this->Modelo_RegistroSecretaria->inserSecretaria( $cedula_Secretaria, $ape_Secretaria, $nom_Secretaria, $telf_Secretaria, $correo_Secretaria, $direc_Secretaria, $fech_nac_Secretaria, $user_Secretaria, $pass_Secretaria);
			redirect('/RegistroSecretaria');
		}

		}	
	}

	public function delete($id_Secretaria = NULL)
	{

		if ($id_Secretaria != NULL) {
			$this->Modelo_Secretaria->deleteSecretaria($id_Secretaria);
			echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
			redirect('/Secretaria');
		}
	}


	public function edit( $id_Secretaria = NULL)
	{

		if ($this->session->userdata('perfil') != FALSE && $this->session->userdata('perfil') == 'administracion' 
	 ) {

	$data['contenido'] = "REGISTROSECRETARIA/edit";
	$data['datosSecretaria'] = $this->Modelo_RegistroSecretaria->editSecretaria($id_Secretaria);
	//$data['listarSecretaria']=$this->Modelo_RegistroSecretaria->listarSecretaria();
	 $data['user'] = $this->session->userdata('username');
	$this->load->view("plantilla_Directivo", $data);
		}
		else
		{
			 redirect(base_url(''));
		}

	}



	public function update()
	{
	

$datos=$this->input->post();

			//$id_Secretaria = $datos['id_Secretaria'];
			$cedula_Secretaria 	=$datos['cedula_Secretaria'];
			$ape_Secretaria		=$datos['ape_Secretaria'];
			$nom_Secretaria		=$datos['nom_Secretaria'];
			$telf_Secretaria		=$datos['telf_Secretaria'];
			$correo_Secretaria		=$datos['correo_Secretaria'];
			$direc_Secretaria		=$datos['direc_Secretaria'];
			$fech_nac_Secretaria	=$datos['fech_nac_Secretaria'];
			$user_Secretaria		=$datos['user_Secretaria'];
			$pass_Secretaria		=$datos['pass_Secretaria'];

	$this->Modelo_RegistroSecretaria->updateRegistroSecretaria(  $cedula_Secretaria, $ape_Secretaria, $nom_Secretaria, $telf_Secretaria, $correo_Secretaria, $direc_Secretaria, $fech_nac_Secretaria, $user_Secretaria, $pass_Secretaria);
			redirect('/Secretaria');
			
	}
}

?>
