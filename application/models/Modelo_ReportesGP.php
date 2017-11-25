
<?php

class Modelo_ReportesGP extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /* Devuelve la lista de alumnos que se encuentran en la tabla tblalumno */

    function obtenerListaAlumnos($materia, $curso) {
        $this->load->database();
        $query = $this->db->query("SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
And id_materia_MateriasNotas=id_Materias
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_Materias=$materia and id_Cursos=$curso;");
        return $query->result();
    }

}
?>;
