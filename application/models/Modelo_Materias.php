<?php


/**
* 
*/
class Modelo_Materias extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

public function listarMaterias()
	{

			$query=	$this->db->query("select * from Materias");
			return $query->result();

	}


public function selCursos()
	{
		$query = $this->db->query(" select * from Cursos");
		return  $query->result();
	}	


	public function inserMaterias($nom_Materias, $nom_corto_Materias, $id_Curso)
	{

		$array1 = array(
			'nom_Materias' => $nom_Materias , 
			'nom_corto_Materias' => $nom_corto_Materias,
			'id_Curso' => $id_Curso

			);

		$this->db->insert('Materias',$array1);

	}


}





 ?>