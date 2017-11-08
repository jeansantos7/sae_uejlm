<?php

class Modelo_Matriculacion extends CI_Model {

    function __construct() {
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

    public function selRepresentante() {
        $query = $this->db->query("select * from Representante");
        return $query->result();
    }

    public function selLectivo() {
        $query = $this->db->query("select * from lectivo");
        return $query->result();
    }

    public function guardar($cedula_Estudiante_matricula, $valorpencion, $lectivo, $cursoselect) {
        $array1 = array(
            'cedula_estudiante_matricula' => $cedula_Estudiante_matricula,
            'lectivo' => $lectivo,
            'id_curso' => $cursoselect
        );
        $array2 = array(
            'pension_Estudiante' => $valorpencion,
            'Estado'=>1
        );
        $this->db->where('cedula_Estudiante', $cedula_Estudiante_matricula);
        $this->db->update('Estudiante', $array2);

        $this->db->insert('matricula', $array1);
    }
    function datos($id_Estudiante) {
        $query = $this->db->query("SELECT nom_Cursos,nom_Cursos,cedula_Estudiante,nom_Estudiante,ape_Estudiante FROM cursos,estudiante,matricula where cedula_Estudiante=cedula_estudiante_matricula and id_Cursos =id_curso and id_curso = ".$id_Estudiante);
        return $query->result();
    }

}

?>