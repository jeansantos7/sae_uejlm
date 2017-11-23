<?php

/**
 * 
 */
class Modelo_RegistroEstudiante extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function selEstudiante() {

        $query = $this->db->query("SELECT * FROM Estudiante");
        return $query->result();
    }

    public function selRepresentante() {
        $query = $this->db->query("SELECT * FROM representante");
        return $query->result();
    }

    public function inserEstudiante($cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $sexo, $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante, $idRepresentante, $idMadre, $idPadre, $user_Estudiante, $pass_Estudiante) {
        $array1 = array(
            //	'id_Estudiante' => $id_Estudiante,


           
            //'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
            'cedula_Estudiante' => $cedula_Estudiante,
            'ape_Estudiante' => $ape_Estudiante,
            'nom_Estudiante' => $nom_Estudiante,
            'sexo' => $sexo,
            'dir_Estudiante' => $dir_Estudiante,
            'carnet_Estudiante' => $carnet_Estudiante,
           'idRepresentante' => $idRepresentante,
           'idMadre' => $idMadre,
           'idPadre' =>$idPadre,
           'user_Estudiante' => $user_Estudiante,
            'pass_Estudiante' => $pass_Estudiante
            
            
        );

        $this->db->set('fech_matricula_Estudiante', 'NOW()', FALSE);



        $this->db->insert('Estudiante', $array1);
    }

    public function inserUsuario($cedula_Estudiante, $user_Estudiante, $pass_Estudiante, $tipo) {
        $array = array(
            'cedula' => $cedula_Estudiante,
            'usuario' => $user_Estudiante,
            'contra' => $pass_Estudiante,
            'tipo' => $tipo
        );


        
        $this->db->insert('usuario', $array);
    }

    public function listarEstudiante() {

        $query = $this->db->query("select * from Estudiante");
        return $query->result();
    }

    public function deleteEstudiante($id_Estudiante) {
        $this->db->where('id_Estudiante', $id_Estudiante);
        $this->db->delete('Estudiante');
    }

    public function deleteMatricula($cedula_Estudiante)
    {
        $this->db->where('cedula_estudiante_matricula', $cedula_Estudiante);
        $this->db->delete('matricula');
    }

    public function editEstudiante($id_Estudiante) {
        $query = $this->db->query("select * from Estudiante where id_Estudiante=$id_Estudiante");
        return $query->result();
    }

    



    public function updateEstudiante($cedula_Estudiante, $ape_Estudiante, $nom_Estudiante, $sexo, $fech_nac_Estudiante, $dir_Estudiante, $carnet_Estudiante, $idRepresentante, $idMadre, $idPadre,  $user_Estudiante, $pass_Estudiante) {
        $array2 = array(
            
            //	'fech_matricula_Estudiante'=> 			$fech_matricula_Estudiante,
            'cedula_Estudiante' => $cedula_Estudiante,
            'ape_Estudiante' => $ape_Estudiante,
            'nom_Estudiante' => $nom_Estudiante,
            'sexo' => $sexo,
            'fech_nac_Estudiante' => $fech_nac_Estudiante,
            'dir_Estudiante' => $dir_Estudiante,
            'carnet_Estudiante' => $carnet_Estudiante,
            'idRepresentante' => $idRepresentante,
           'idMadre' => $idMadre,
           'idPadre' =>$idPadre,
            
            'user_Estudiante' => $user_Estudiante,
            'pass_Estudiante' => $pass_Estudiante,
            
        );

        $this->db->where('cedula_Estudiante', $cedula_Estudiante);
        $this->db->update('Estudiante', $array2);
    }

    public function ConsultaExiste($cedula_Estudiante) {

        $query = $this->db->query("select * from Estudiante where cedula_Estudiante=$cedula_Estudiante");
        return $query->result();
    }

}
?> 
