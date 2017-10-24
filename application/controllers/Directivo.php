<?php


/**
* 
*/
class Directivo extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Directivo");
	}


	public function index()
	{



	$data['contenido'] = "DIRECTIVO/index";
	$data['selDirectivo'] = $this->Modelo_Directivo->selDirectivo();
	$data['listarDirectivo']=$this->Modelo_Directivo->listarDirectivo();
	$this->load->view("plantilla4", $data);
		
	}

	public function insert()
	{
		$datos=$this->input->post();

		if(isset($datos))
		{
			//$id_Directivo = $datos['id_Directivo'];
			$cedula_Directivo 	=$datos['cedula_Directivo'];
			$ape_Directivo		=$datos['ape_Directivo'];
			$nom_Directivo		=$datos['nom_Directivo'];
			$telf_Directivo		=$datos['telf_Directivo'];
			$correo_Directivo		=$datos['correo_Directivo'];
			$direc_Directivo		=$datos['direc_Directivo'];
			$fech_nac_Directivo	=$datos['fech_nac_Directivo'];
			$user_Directivo		=$datos['user_Directivo'];
			$pass_Directivo		=$datos['pass_Directivo'];

		 
			
			

			$datoexiste=$this->Modelo_Directivo->ConsultaExiste($cedula_Directivo);

			if ($datoexiste ==true) {
				echo '<script languaje="javascript"> alert("este Directivo  ya existe");
				location.href="../Directivo";
				</script>';
			}

else{

			$this->Modelo_Directivo->inserDirectivo( $cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo);
			redirect('/Directivo');
		}

		}	
	}

	public function delete($id_Directivo = NULL)
	{

		if ($id_Directivo != NULL) {
			$this->Modelo_Directivo->deleteDirectivo($id_Directivo);
			echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
			redirect('/Directivo');
		}
	}


	public function edit( $id_Directivo = NULL)
	{

		if( $id_Directivo != NULL)
		{
			//mostrar datos
			$data['contenido'] = 'Directivo/edit';
			$data['selDirectivo'] = $this->Modelo_Directivo->selDirectivo();
			$data['datosDirectivo'] = $this->Modelo_Directivo->editDirectivo($id_Directivo);
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

			//$id_Directivo = $datos['id_Directivo'];
			$cedula_Directivo 	=$datos['cedula_Directivo'];
			$ape_Directivo		=$datos['ape_Directivo'];
			$nom_Directivo		=$datos['nom_Directivo'];
			$telf_Directivo		=$datos['telf_Directivo'];
			$correo_Directivo	=$datos['correo_Directivo'];
			$direc_Directivo	=$datos['direc_Directivo'];
			$fech_nac_Directivo	=$datos['fech_nac_Directivo'];
			$user_Directivo		=$datos['user_Directivo'];
			$pass_Directivo		=$datos['pass_Directivo'];

	$this->Modelo_Directivo->updateDirectivo($cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo);

	echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';
			
			redirect('/Directivo');
			
	}
}

?>
