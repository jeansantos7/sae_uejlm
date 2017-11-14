<?php

/**
 * 
 */
class Modelo_EstudiantePensiones extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function selHistoria($param) {

        $query = $this->db->query("SELECT * FROM pensiones where id_estudiantes =" . $param);
        return $query->result();
    }

}

?>