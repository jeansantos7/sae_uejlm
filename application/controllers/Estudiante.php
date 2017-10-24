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



	$data['contenido'] = "ESTUDIANTE/index";
	$data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
	$data['listarEstudiante']=$this->Modelo_Estudiante->listarEstudiante();
	$this->load->view("plantilla4", $data);
		
	}

	public function insert()
	{
		$datos=$this->input->post();

		if(isset($datos))
		{
			//$id_Estudiante = $datos['id_Estudiante'];
			
			
			$matricula_Estudiante =$datos['matricula_Estudiante'];
			$fech_matricula_Estudiante=$datos['fech_matricula_Estudiante'];
			$cedula_Estudiante =$datos['cedula_Estudiante'];
			$ape_Estudiante		=$datos['ape_Estudiante'];
			$nom_Estudiante		=$datos['nom_Estudiante'];
			$fech_nac_Estudiante=$datos['fech_nac_Estudiante'];
			$dir_Estudiante		=$datos['dir_Estudiante'];
			$disc_Estudiante	=$datos['carnet_Estudiante'];
			$carnet_Estudiante	=$datos['carnet_Estudiante'];
			$cedula_Representante_Estudiante=$datos['cedula_Representante_Estudiante'];
			$ape_Representante_Estudiante	=$datos['ape_Representante_Estudiante'];
			$nom_Representante_Estudiante	=$datos['nom_Representante_Estudiante'];
			$telf_Representante_Estudiante	=$datos['telf_Representante_Estudiante'];
			$correo_Representante_Estudiante=$datos['correo_Representante_Estudiante'];
			$dir_Representante_Estudiante	=$datos['dir_Representante_Estudiante'];
			$parentesco_Representante_Estudiante=$datos['parentesco_Representante_Estudiante'];
			$ocup_Representante_Estudiante		=$datos['ocup_Representante_Estudiante'];
			$user_Estudiante					=$datos['user_Estudiante'];
			$pass_Estudiante				=$datos['pass_Estudiante'];	
			$pension_Estudiante				=$datos['pension_Estudiante'];
		 
			
			

			$datoexiste=$this->Modelo_Estudiante->ConsultaExiste($cedula_Estudiante);

			if ($datoexiste ==true) {
				echo '<script languaje="javascript"> alert("este Estudiante  ya existe");
				location.href="../Estudiante";
				</script>';
			}

else{

			$this->Modelo_Estudiante->inserEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $disc_Estudiante, $carnet_Estudiante, $cedula_Representante_Estudiante, $ape_Representante_Estudiante, $nom_Representante_Estudiante, $telf_Representante_Estudiante, $correo_Representante_Estudiante, $dir_Representante_Estudiante, $parentesco_Representante_Estudiante, $ocup_Representante_Estudiante,  $user_Estudiante, $pass_Estudiante, $pension_Estudiante);
			redirect('/Estudiante');
		}

		}	
	}

	public function delete($id_Estudiante = NULL)
	{

		if ($id_Estudiante != NULL) {
			$this->Modelo_Estudiante->deleteEstudiante($id_Estudiante);
			echo '<script languaje="javascript"> alert("el dato fue eliminado");
			</script>';
			redirect('/Estudiante');
		}
	}


	public function edit( $id_Estudiante = NULL)
	{

		if( $id_Estudiante != NULL)
		{
			//mostrar datos
			$data['contenido'] = 'Estudiante/edit';
			$data['selEstudiante'] = $this->Modelo_Estudiante->selEstudiante();
			$data['datosEstudiante'] = $this->Modelo_Estudiante->editEstudiante($id_Estudiante);
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

			//$id_Estudiante = $datos['id_Estudiante'];
			$matricula_Estudiante =$datos['matricula_Estudiante'];
			$fech_matricula_Estudiante=$datos['fech_matricula_Estudiante'];
			$cedula_Estudiante =$datos['cedula_Estudiante'];
			$ape_Estudiante		=$datos['ape_Estudiante'];
			$nom_Estudiante		=$datos['nom_Estudiante'];
			$fech_nac_Estudiante=$datos['fech_nac_Estudiante'];
			$dir_Estudiante		=$datos['dir_Estudiante'];
			$disc_Estudiante	=$datos['carnet_Estudiante'];
			$carnet_Estudiante	=$datos['carnet_Estudiante'];
			$cedula_Representante_Estudiante=$datos['cedula_Representante_Estudiante'];
			$ape_Representante_Estudiante	=$datos['ape_Representante_Estudiante'];
			$nom_Representante_Estudiante	=$datos['nom_Representante_Estudiante'];
			$telf_Representante_Estudiante	=$datos['telf_Representante_Estudiante'];
			$correo_Representante_Estudiante=$datos['correo_Representante_Estudiante'];
			$dir_Representante_Estudiante	=$datos['dir_Representante_Estudiante'];
			$parentesco_Representante_Estudiante=$datos['parentesco_Representante_Estudiante'];
			$ocup_Representante_Estudiante		=$datos['ocup_Representante_Estudiante'];
			$user_Estudiante					=$datos['user_Estudiante'];
			$pass_Estudiante				=$datos['pass_Estudiante'];	
			$pension_Estudiante 			=$datos['pension_Estudiante'];

	$this->Modelo_Estudiante->updateEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $disc_Estudiante, $carnet_Estudiante, $cedula_Representante_Estudiante, $ape_Representante_Estudiante, $nom_Representante_Estudiante, $telf_Representante_Estudiante, $correo_Representante_Estudiante, $dir_Representante_Estudiante, $parentesco_Representante_Estudiante, $ocup_Representante_Estudiante,  $user_Estudiante, $pass_Estudiante,$pension_Estudiante);

	echo '<script languaje="javascript"> alert("este dato se actualizo"); </script>';
			
			redirect('/Estudiante');
			
	}
}

?> 
