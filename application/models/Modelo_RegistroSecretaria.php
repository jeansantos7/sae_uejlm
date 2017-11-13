<?php


/**
* 
*/
class Modelo_RegistroSecretaria extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selSecretaria()
	{

		$query = $this->db->query("select * from Secretaria");
		return $query->result();

	}

	public function inserSecretaria( $cedula_Secretaria, $ape_Secretaria, $nom_Secretaria, $telf_Secretaria, $correo_Secretaria, $direc_Secretaria, $fech_nac_Secretaria, $user_Secretaria, $pass_Secretaria)
	{
		 $array1 = array(
		 //	'id_Secretaria' => $id_Secretaria,
		 	'cedula_Secretaria' => $cedula_Secretaria,
		 	'ape_Secretaria' => $ape_Secretaria,		 	
		 	'nom_Secretaria' => $nom_Secretaria,
		 	'telf_Secretaria' => $telf_Secretaria,
		 	'correo_Secretaria'=> $correo_Secretaria,
		 	'direc_Secretaria' =>$direc_Secretaria,
		 	'fech_nac_Secretaria' => $fech_nac_Secretaria,
		 	'user_Secretaria'=> $user_Secretaria,
		 	'pass_Secretaria' => $pass_Secretaria

		   );


		 $this->db->insert('Secretaria',$array1);
	}

	 public function inserUsuario($cedula_Secretaria, $user_Secretaria, $pass_Secretaria, $tipo) {
        $array = array(
            'cedula' => $cedula_Secretaria,
            'usuario' => $user_Secretaria,
            'contra' => $pass_Secretaria,
            'tipo' => $tipo
        );
        $this->db->insert('usuario', $array);
    }


  


	public function listarSecretaria()
	{

			$query=	$this->db->query("select * from Secretaria");
			return $query->result();

	}


	public function deleteSecretaria($id_Secretaria)
	{
		$this->db->where('id_Secretaria',$id_Secretaria);
		$this->db->delete('Secretaria');
	}


	public function editSecretaria($id_Secretaria)
	{
		$query = $this->db->query("select * from Secretaria where id_Secretaria=$id_Secretaria");
		return $query->result();
	}

	public function updateSecretaria($cedula_Secretaria, $ape_Secretaria, $nom_Secretaria, $telf_Secretaria, $correo_Secretaria, $direc_Secretaria, $fech_nac_Secretaria, $user_Secretaria, $pass_Secretaria)
	{
		 $array2 = array(

		 	'cedula_Secretaria' => $cedula_Secretaria,
		 	'ape_Secretaria' => $ape_Secretaria,		 	
		 	'nom_Secretaria' => $nom_Secretaria,
		 	'telf_Secretaria' => $telf_Secretaria,
		 	'correo_Secretaria'=> $correo_Secretaria,
		 	'direc_Secretaria' =>$direc_Secretaria,
		 	'fech_nac_Secretaria' => $fech_nac_Secretaria,
		 	'user_Secretaria'=> $user_Secretaria,
		 	'pass_Secretaria' => $pass_Secretaria
			);

		 $this->db->where('cedula_Secretaria',$cedula_Secretaria);
		 $this->db->update('Secretaria',$array2);
	}

	
  public function updateUsuario($cedula_Secretaria, $user_Secretaria, $pass_Secretaria, $tipo)

    {
 $array = array(
            'cedula' => $cedula_Secretaria,
            'usuario' => $user_Secretaria,
            'contra' => $pass_Secretaria,
            'tipo' => $tipo
        );

		$this->db->where('cedula_Secretaria',$cedula_Secretaria);
		 $this->db->update('Secretaria',$array);
    }
	public function ConsultaExiste($cedula_Secretaria)
	{

		$query = $this->db->query("select * from Secretaria where cedula_Secretaria=$cedula_Secretaria");
		return $query->result();


	}
}
?>
