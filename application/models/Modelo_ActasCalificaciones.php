<?php

/**
 * 
 */
class Modelo_ActasCalificaciones extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function selMaterias() {

        $query = $this->db->query("SELECT * FROM materias");
        return $query->result();
    }

    public function ListaCurso() {
        $query = $this->db->query("SELECT * FROM cursos");
        return $query->result();
    }

    public function ListaMateriasXCurso($id) {
        $query = $this->db->query("SELECT id_Materias,nom_Cursos,nom_Materias
FROM cursos,materias,asignacion 
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion
and id_Cursos=". $id);
        return $query->result();
    }
    public function ConsultaAlumnosSub($id_materia,$id_curso) {
        $query = $this->db->query("SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_Materias=$id_materia and id_Cursos=$id_curso;");
        return $query->result();
    }

}

?>