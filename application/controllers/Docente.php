<?php


/**
* 
*/
class Docente extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Docente");
	}


	public function index()
	{



	$data['contenido'] = "DOCENTE/index";
	$data['selDocente'] = $this->Modelo_Docente->selDocente();
	$data['listarDocente']=$this->Modelo_Docente->listarDocente();
	$this->load->view("plantilla", $data);
		
	}

	public function insert()
	{
		$datos=$this->input->post();

		if(isset($datos))
		{
			//$id_Docente = $datos['id_Docente'];
			$cedula_Docente 	=$datos['cedula_Docente'];
			$ape_Docente		=$datos['ape_Docente'];
			$nom_Docente		=$datos['nom_Docente'];
			$telf_Docente		=$datos['telf_Docente'];
			$correo_Docente		=$datos['correo_Docente'];
			$direc_Docente		=$datos['direc_Docente'];
			$fech_nac_Docente	=$datos['fech_nac_Docente'];
			$user_Docente		=$datos['user_Docente'];
			$pass_Docente		=$datos['pass_Docente'];

		 
			
			

			$datoexiste=$this->Modelo_Docente->ConsultaExiste($cedula_Docente);

			if ($datoexiste ==true) {
				echo '<script languaje="javascript"> alert("este docente  ya existe");
				location.href="../Docente";
				</script>';
			}

else{

			$this->Modelo_Docente->inserDocente( $cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente);
			redirect('/Docente');
		}

		}	
	}

	public function delete($id_Docente = NULL)
	{

		if ($id_Docente != NULL) {
			$this->Modelo_Docente->deleteDocente($id_Docente);
			echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
			redirect('/Docente');
		}
	}


	public function edit( $id_Docente = NULL)
	{

		if( $id_Docente != NULL)
		{
			//mostrar datos
			$data['contenido'] = 'Docente/edit';
			$data['selDocente'] = $this->Modelo_Docente->selDocente();
			$data['datosDocente'] = $this->Modelo_Docente->editDocente($id_Docente);
			$this->load->view('plantilla', $data);
		}
		else
		{

			redirect('');
		}


	}



	public function update()
	{
	

$datos=$this->input->post();

			//$id_Docente = $datos['id_Docente'];
			$cedula_Docente 	=$datos['cedula_Docente'];
			$ape_Docente		=$datos['ape_Docente'];
			$nom_Docente		=$datos['nom_Docente'];
			$telf_Docente		=$datos['telf_Docente'];
			$correo_Docente		=$datos['correo_Docente'];
			$direc_Docente		=$datos['direc_Docente'];
			$fech_nac_Docente	=$datos['fech_nac_Docente'];
			$user_Docente		=$datos['user_Docente'];
			$pass_Docente		=$datos['pass_Docente'];

	$this->Modelo_Docente->updateDocente(  $cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente);
			redirect('/Docente');
			
	}
}

?>
