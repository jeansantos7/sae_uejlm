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

    function Bitacora($param) {

        $query = $this->db->query("SELECT * FROM matricula,estudiante,cursos,observacioncurso
where cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and id_curso_observacioncurso=id_Cursos
and cedula_Estudiante=$param;");
        return $query->result();
    }
    function BitacoraDirec($param) {

        $query = $this->db->query("SELECT * FROM observacioncurso,cursos,docente
where id_curso_observacioncurso=id_Cursos
and cedula_profesor_observacioncurso=cedula_Docente
order by fecha_observacioncurso DESC;");
        return $query->result();
    }
    function BitacoraIndi($param) {

        $query = $this->db->query("SELECT * FROM matricula,estudiante,cursos,observacion
where cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_estu_observacion=cedula_Estudiante
and cedula_Estudiante=$param;");
        return $query->result();
    }
    function BitacoraIndiDirec($param) {

        $query = $this->db->query("SELECT * FROM matricula,estudiante,cursos,observacion
where cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_estu_observacion=cedula_Estudiante;");
        return $query->result();
    }

}

?>