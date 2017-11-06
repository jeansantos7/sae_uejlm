<?php




class Modelo_Matriculacion extends CI_Model
{
	
	function __construct()
	{
		 parent::__construct();
        $this->load->database();
	}

public function selEstudiante() {

        $query = $this->db->query("select * from Estudiante");
        return $query->result();
    }

     public function selCursos() {

        $query = $this->db->query("select * from Cursos");
        return $query->result();
    }

    public function selRepresentante()
    {
    	$query = $this->db->query("select * from Representante");
        return $query->result();
    }

     public function selLectivo()
    {
    	$query = $this->db->query("select * from Representante");
        return $query->result();
    }

}




?>