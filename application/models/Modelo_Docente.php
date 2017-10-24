<?php


/**
* 
*/
class Modelo_Docente extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selDocente()
	{

		$query = $this->db->query("select * from Docente");
		return $query->result();

	}

	public function inserDocente( $cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente)
	{
		 $array1 = array(
		 //	'id_Docente' => $id_Docente,
		 	'cedula_Docente' => $cedula_Docente,
		 	'ape_Docente' => $ape_Docente,		 	
		 	'nom_Docente' => $nom_Docente,
		 	'telf_Docente' => $telf_Docente,
		 	'correo_Docente'=> $correo_Docente,
		 	'direc_Docente' =>$direc_Docente,
		 	'fech_nac_Docente' => $fech_nac_Docente,
		 	'user_Docente'=> $user_Docente,
		 	'pass_Docente' => $pass_Docente

		   );


		 $this->db->insert('Docente',$array1);
	}


	public function listarDocente()
	{

			$query=	$this->db->query("select * from Docente");
			return $query->result();

	}


	public function deleteDocente($id_Docente)
	{
		$this->db->where('id_Docente',$id_Docente);
		$this->db->delete('Docente');
	}


	public function editDocente($id_Docente)
	{
		$query = $this->db->query("select * from Docente where id_Docente=$id_Docente");
		return $query->result();
	}

	public function updateDocente($cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente)
	{
		 $array2 = array(

		 	'cedula_Docente' => $cedula_Docente,
		 	'ape_Docente' => $ape_Docente,		 	
		 	'nom_Docente' => $nom_Docente,
		 	'telf_Docente' => $telf_Docente,
		 	'correo_Docente'=> $correo_Docente,
		 	'direc_Docente' =>$direc_Docente,
		 	'fech_nac_Docente' => $fech_nac_Docente,
		 	'user_Docente'=> $user_Docente,
		 	'pass_Docente' => $pass_Docente
			);

		 $this->db->where('cedula_Docente',$cedula_Docente);
		 $this->db->update('Docente',$array2);
	}

	public function ConsultaExiste($cedula_Docente)
	{

		$query = $this->db->query("select * from Docente where cedula_Docente=$cedula_Docente");
		return $query->result();


	}
}
?>
