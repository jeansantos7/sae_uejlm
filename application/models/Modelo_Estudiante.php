<?php


/**
* 
*/
class Modelo_Estudiante extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selEstudiante()
	{

		$query = $this->db->query("select * from Estudiante");
		return $query->result();

	}

	public function inserEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $disc_Estudiante, $carnet_Estudiante, $cedula_Representante_Estudiante, $ape_Representante_Estudiante, $nom_Representante_Estudiante, $telf_Representante_Estudiante, $correo_Representante_Estudiante, $dir_Representante_Estudiante, $parentesco_Representante_Estudiante, $ocup_Representante_Estudiante,  $user_Estudiante, $pass_Estudiante, $pension_Estudiante)
	{
		 $array1 = array(
		 //	'id_Estudiante' => $id_Estudiante,
		 	
		 	
			'matricula_Estudiante'	=>	 			$matricula_Estudiante,
			'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
			'cedula_Estudiante' =>		 			$cedula_Estudiante, 
			'ape_Estudiante'	=>		 			$ape_Estudiante, 
			'nom_Estudiante'	=>		 			$nom_Estudiante, 
			'fech_nac_Estudiante'	=>	 			$fech_nac_Estudiante, 
			'dir_Estudiante'		=>	 			$dir_Estudiante, 
			'disc_Estudiante'		=>	 			$disc_Estudiante, 
			'carnet_Estudiante'		=>  			$carnet_Estudiante, 
			'cedula_Representante_Estudiante' => 	$cedula_Representante_Estudiante, 
			'ape_Representante_Estudiante'    =>	$ape_Representante_Estudiante, 
			'nom_Representante_Estudiante'	  =>	$nom_Representante_Estudiante, 
			'telf_Representante_Estudiante' =>	 	$telf_Representante_Estudiante, 
			'correo_Representante_Estudiante' => 	$correo_Representante_Estudiante, 
			'dir_Representante_Estudiante'	=>	 	$dir_Representante_Estudiante, 
			'parentesco_Representante_Estudiante'=>	$parentesco_Representante_Estudiante, 
			'ocup_Representante_Estudiante' 	=>	$ocup_Representante_Estudiante,  
			'user_Estudiante'	=>				 	$user_Estudiante, 
			'pass_Estudiante'	=>				 	$pass_Estudiante,
			'pension_Estudiante' =>					$pension_Estudiante
		   );


		 $this->db->insert('Estudiante',$array1);
	}


	public function listarEstudiante()
	{

			$query=	$this->db->query("select * from Estudiante");
			return $query->result();

	}


	public function deleteEstudiante($id_Estudiante)
	{
		$this->db->where('id_Estudiante',$id_Estudiante);
		$this->db->delete('Estudiante');
	}


	public function editEstudiante($id_Estudiante)
	{
		$query = $this->db->query("select * from Estudiante where id_Estudiante=$id_Estudiante");
		return $query->result();
	}

	public function updateEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante, $disc_Estudiante, $carnet_Estudiante, $cedula_Representante_Estudiante, $ape_Representante_Estudiante, $nom_Representante_Estudiante, $telf_Representante_Estudiante, $correo_Representante_Estudiante, $dir_Representante_Estudiante, $parentesco_Representante_Estudiante, $ocup_Representante_Estudiante,  $user_Estudiante, $pass_Estudiante, $pension_Estudiante)
	{
		 $array2 = array(

		 	'matricula_Estudiante'	=>	 	$matricula_Estudiante,
			'fech_matricula_Estudiante'=> 	$fech_matricula_Estudiante,
			'cedula_Estudiante' =>		 	$cedula_Estudiante, 
			'ape_Estudiante'	=>		 	$ape_Estudiante, 
			'nom_Estudiante'	=>		 	$nom_Estudiante, 
			'fech_nac_Estudiante'	=>	 	$fech_nac_Estudiante, 
			'dir_Estudiante'		=>	 	$dir_Estudiante, 
			'disc_Estudiante'		=>	 	$disc_Estudiante, 
			'carnet_Estudiante'		=>  	$carnet_Estudiante, 
			'cedula_Representante_Estudiante' => 	$cedula_Representante_Estudiante, 
			'ape_Representante_Estudiante'    =>	$ape_Representante_Estudiante, 
			'nom_Representante_Estudiante'	  =>	$nom_Representante_Estudiante, 
			'telf_Representante_Estudiante' =>	 	$telf_Representante_Estudiante, 
			'correo_Representante_Estudiante' => 	$correo_Representante_Estudiante, 
			'dir_Representante_Estudiante'	=>	 	$dir_Representante_Estudiante, 
			'parentesco_Representante_Estudiante'=>	$parentesco_Representante_Estudiante, 
			'ocup_Representante_Estudiante' 	=>	$ocup_Representante_Estudiante,  
			'user_Estudiante'	=>				 	$user_Estudiante, 
			'pass_Estudiante'	=>				 	$pass_Estudiante,
			'pension_Estudiante' =>					$pension_Estudiante
			);

		 $this->db->where('cedula_Estudiante',$cedula_Estudiante);
		 $this->db->update('Estudiante',$array2);
	}

	public function ConsultaExiste($cedula_Estudiante)
	{

		$query = $this->db->query("select * from Estudiante where cedula_Estudiante=$cedula_Estudiante");
		return $query->result();


	}
}
?> 
