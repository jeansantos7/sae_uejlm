<?php


/**
* 
*/
class Representante extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Modelo_Representante");
	}


	public function index()
	{



	$data['contenido'] = "REPRESENTANTE/index";
	//$data['selRepresentante'] = $this->Modelo_Representante->selRepresentante();
	$data['listarRepresentante']=$this->Modelo_Representante->listarRepresentante();
	$this->load->view("plantilla", $data);
		
	}

	public function insert()
	{
		$datos=$this->input->post();

		if(isset($datos))
		{
			//$id_Representante = $datos['id_Representante'];
			
			
			$cedula_Representante 		=$datos['cedula_Representante'];
			$ape_Representante			=$datos['ape_Representante'];
			$nom_Representante			=$datos['nom_Representante'];
			$telf_Representante			=$datos['telf_Representante'];
			$correo_Representante		=$datos['correo_Representante'];
			$dir_Representante			=$datos['dir_Representante'];
			$ocu_Representante			=$datos['ocu_Representante'];
		 
			
			

			$datoexiste=$this->Modelo_Representante->ConsultaExiste($cedula_Representante);

			if ($datoexiste ==true) {
				echo '<script languaje="javascript"> alert("este Representante  ya existe");
				location.href="../Representante";
				</script>';
			}

else{

			$this->Modelo_Representante->inserRepresentante($id_Representante, $cedula_Representante, $ape_Representante, $nom_Representante, $telf_Representante, $correo_Representante, $dir_Representante, $ocu_Representante);
			redirect('/Representante');
		}

		}	
	}

	public function delete($id_Representante = NULL)
	{

		if ($id_Representante != NULL) {
			$this->Modelo_Representante->deleteRepresentante($id_Representante);
			echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
			redirect('/Representante');
		}
	}


	public function edit( $id_Representante = NULL)
	{

		if( $id_Representante != NULL)
		{
			//mostrar datos
			$data['contenido'] = 'Representante/edit';
			//$data['selRepresentante'] = $this->Modelo_Representante->selRepresentante();
			$data['datosRepresentante'] = $this->Modelo_Representante->editRepresentante($id_Representante);
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

			//$id_Representante = $datos['id_Representante'];
			
			$cedula_Representante 		=$datos['cedula_Representante'];
			$ape_Representante			=$datos['ape_Representante'];
			$nom_Representante			=$datos['nom_Representante'];
			$telf_Representante			=$datos['telf_Representante'];
			$correo_Representante		=$datos['correo_Representante'];
			$dir_Representante			=$datos['dir_Representante'];
			$ocu_Representante			=$datos['ocu_Representante'];


	$this->Modelo_Representante->updateRepresentante($id_Representante, $cedula_Representante, $ape_Representante, $nom_Representante, $telf_Representante, $correo_Representante, $dir_Representante, $ocu_Representante);

	echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';
			
			redirect('/Representante');
			
	}
}

?>
