<?php

/**
 * 
 */
class Modelo_EstudianteNotas extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function selmateriasnotas($param) {
        $query = $this->db->query("SELECT * FROM materias, asignacion,matricula,estudiante,cursos,materiasnotas
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion  
and cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_materia_MateriasNotas=id_Materias
and cedula_Estudiante=$param;");
        return $query->result();
    }

}

?>