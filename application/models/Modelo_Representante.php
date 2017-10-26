<?php


/**
* 
*/
class Modelo_Representante extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selRepresentante()
	{

		$query = $this->db->query("select * from Representante");
		return $query->result();

	}

	public function inserRepresentante($id_Representante, $cedula_Representante, $ape_Representante, $nom_Representante, $telf_Representante, $correo_Representante, $dir_Representante, $ocu_Representante)
	{
		 $array1 = array(
		 //	'id_Representante' => $id_Representante,
		 	
		 	
			'cedula_Representante' => $cedula_Representante , 
			'ape_Representante' => $ape_Representante,
			'nom_Representante' =>$nom_Representante,
			'telf_Representante' =>$telf_Representante,
			'correo_Representante' =>$correo_Representante,
			'dir_Representante' => $dir_Representante,
			'ocu_Representante' => $ocu_Representante

		   );


		 $this->db->insert('Representante',$array1);
	}


	public function listarRepresentante()
	{

			$query=	$this->db->query("select * from Representante");
			return $query->result();

	}


	public function deleteRepresentante($id_Representante)
	{
		$this->db->where('id_Representante',$id_Representante);
		$this->db->delete('Representante');
	}


	public function editRepresentante($id_Representante)
	{
		$query = $this->db->query("select * from Representante where id_Representante=$id_Representante");
		return $query->result();
	}

	public function updateRepresentante($id_Representante, $cedula_Representante, $ape_Representante, $nom_Representante, $telf_Representante, $correo_Representante, $dir_Representante, $ocu_Representante)
	{
		 $array2 = array(

		 	'cedula_Representante' => $cedula_Representante , 
			'ape_Representante' => $ape_Representante,
			'nom_Representante' =>$nom_Representante,
			'telf_Representante' =>$telf_Representante,
			'correo_Representante' =>$correo_Representante,
			'dir_Representante' => $dir_Representante,
			'ocu_Representante' => $ocu_Representante

			);

		 $this->db->where('cedula_Representante',$cedula_Representante);
		 $this->db->update('Representante',$array2);
	}

	public function ConsultaExiste($cedula_Representante)
	{

		$query = $this->db->query("select * from Representante where cedula_Representante=$cedula_Representante");
		return $query->result();


	}
}
?>
