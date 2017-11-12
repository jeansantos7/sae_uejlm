<?php


/**
* 
*/
class Modelo_Directivo extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selDirectivo()
	{

		$query = $this->db->query("select * from Directivo");
		return $query->result();

	}

	public function inserDirectivo($cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo)
	{
		 $array1 = array(
		 //	'id_Directivo' => $id_Directivo,
		 	'cedula_Directivo' => $cedula_Directivo,
		 	'ape_Directivo' => $ape_Directivo,		 	
		 	'nom_Directivo' => $nom_Directivo,
		 	'telf_Directivo' => $telf_Directivo,
		 	'correo_Directivo'=> $correo_Directivo,
		 	'direc_Directivo' =>$direc_Directivo,
		 	'fech_nac_Directivo' => $fech_nac_Directivo,
		 	'user_Directivo'=> $user_Directivo,
		 	'pass_Directivo' => $pass_Directivo

		   );


		 $this->db->insert('Directivo',$array1);
	}


	public function listarDirectivo()
	{

			$query=	$this->db->query("select * from Directivo");
			return $query->result();

	}


	public function deleteDirectivo($id_Directivo)
	{
		$this->db->where('id_Directivo',$id_Directivo);
		$this->db->delete('Directivo');
	}


	public function editDirectivo($id_Directivo)
	{
		$query = $this->db->query("select * from Directivo where id_Directivo=$id_Directivo");
		return $query->result();
	}

	public function updateDirectivo($cedula_Directivo, $ape_Directivo, $nom_Directivo, $telf_Directivo, $correo_Directivo, $direc_Directivo, $fech_nac_Directivo, $user_Directivo, $pass_Directivo)
	{
		 $array2 = array(

		 	'cedula_Directivo' =>$cedula_Directivo,
		 	'ape_Directivo' => $ape_Directivo,		 	
		 	'nom_Directivo' => $nom_Directivo,
		 	'telf_Directivo' => $telf_Directivo,
		 	'correo_Directivo'=> $correo_Directivo,
		 	'direc_Directivo' =>$direc_Directivo,
		 	'fech_nac_Directivo' => $fech_nac_Directivo,
		 	'user_Directivo'=> $user_Directivo,
		 	'pass_Directivo' => $pass_Directivo
			);

		 $this->db->where('cedula_Directivo',$cedula_Directivo);
		 $this->db->update('Directivo',$array2);
	}

	public function ConsultaExiste($cedula_Directivo)
	{

		$query = $this->db->query("select * from Directivo where cedula_Directivo=$cedula_Directivo");
		return $query->result();


	}
}
?>
