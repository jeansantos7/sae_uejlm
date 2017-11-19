<?php

/**
 * 
 */
class Modelo_Directivo extends CI_Model {

    function __construct() {

        function __construct() {
            parent::__construct();
            $this->load->database();
        }

    }
    function Eliminar() {
        $query = $this->db->query("INSERT INTO clone_estudiantes 
SELECT *  FROM estudiante,matricula,cursos,materias,docente,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and cedula_Docente=id_profesor_MateriasNotas
and id_Materias=id_materia_MateriasNotas
and cedula_estudiantes_MateriasNotas=cedula_Estudiante;");
        
        $query = $this->db->query("UPDATE estudiante SET Estado = 0;");
        $query = $this->db->query("INSERT INTO clone_docente
SELECT * FROM docente,asignacion,materias,cursos
where id_docente_Asignacion=cedula_Docente
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion;");
        
        $query = $this->db->query("INSERT INTO clone_pensiones
SELECT * FROM estudiante,pensiones
where cedula_Estudiante=id_estudiantes;");
        
        $query = $this->db->query("INSERT INTO clone_tutoria
SELECT * 
FROM docente,cursos,observacioncurso,curso_tutor
where cedula_Docente=cedula_Curso_Tutor
and id_Cursos=curso_Curso_Tutor
and cedula_profesor_observacioncurso=cedula_Docente
and id_curso_observacioncurso=curso_Curso_Tutor;");
              
        $query = $this->db->query("TRUNCATE matricula;");
        $query = $this->db->query("TRUNCATE materiasnotas;");
        $query = $this->db->query("TRUNCATE asignacion;");
        $query = $this->db->query("TRUNCATE pensiones;");
        $query = $this->db->query("TRUNCATE observacioncurso;");
        $query = $this->db->query("TRUNCATE curso_tutor;");
        if (!$query) {
            print_r($query);
        }
    }

}

?>