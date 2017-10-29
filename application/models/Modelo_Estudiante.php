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

		$query = $this->db->query("select * from Estudiante, Representante");
		return $query->result();

	}

	public function selRepresentante()
	{
		$query = $this->db->query("select * from  Representante");
		return $query->result();

	}

	public function inserEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante,  $carnet_Estudiante, $parentesco_Estudiante, $user_Estudiante, $pass_Estudiante,$pension_Estudiante, $id_Representantes)
	{
		 $array1 = array(
		 //	'id_Estudiante' => $id_Estudiante,
		 	
		 	
			'matricula_Estudiante'	=>	 			$matricula_Estudiante,
			//'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
			'cedula_Estudiante' =>		 			$cedula_Estudiante, 
			'ape_Estudiante'	=>		 			$ape_Estudiante, 
			'nom_Estudiante'	=>		 			$nom_Estudiante, 
			'dir_Estudiante'		=>	 			$dir_Estudiante, 
			'carnet_Estudiante'		=>  			$carnet_Estudiante, 
			'parentesco_Estudiante'=>				$parentesco_Estudiante, 
			'user_Estudiante'	=>				 	$user_Estudiante, 
			'pass_Estudiante'	=>				 	$pass_Estudiante,
			'pension_Estudiante' =>					$pension_Estudiante,
			'Representante_id_Representante'=>		$id_Representantes,
		   );

		  $this->db->set('fech_matricula_Estudiante', 'NOW()', FALSE);
		 


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

	public function updateEstudiante($matricula_Estudiante, $fech_matricula_Estudiante, $cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $fech_nac_Estudiante, $dir_Estudiante,  $carnet_Estudiante, $parentesco_Estudiante, $user_Estudiante, $pass_Estudiante,$pension_Estudiante,$id_Representantes)
	{
		 $array2 = array(

		 	'matricula_Estudiante'	=>	 			$matricula_Estudiante,
		 	'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
			'cedula_Estudiante' =>		 			$cedula_Estudiante, 
			'ape_Estudiante'	=>		 			$ape_Estudiante, 
			'nom_Estudiante'	=>		 			$nom_Estudiante, 
			'fech_nac_Estudiante'	=>	 			$fech_nac_Estudiante, 
			'dir_Estudiante'		=>	 			$dir_Estudiante, 
			'carnet_Estudiante'		=>  			$carnet_Estudiante, 
			'parentesco_Estudiante'=>				$parentesco_Estudiante, 
			'user_Estudiante'	=>				 	$user_Estudiante, 
			'pass_Estudiante'	=>				 	$pass_Estudiante,
			'pension_Estudiante' =>					$pension_Estudiante,
			'id_Representantes'=>		$id_Representantes,

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
