<?php


/**
* 
*/
class Modelo_Cursos extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

public function listarCursos()
	{

			$query=	$this->db->query("select * from Cursos");
			return $query->result();

	}


	public function inserCursos($nom_Cursos, $nivel_Cursos)
	{

		$array1 = array(
			'nom_Cursos' => $nom_Cursos , 
			'nivel_Cursos' => $nivel_Cursos

			);

		$this->db->insert('Cursos',$array1);

	}


}





 ?>