<?php

class Modelo_MateriasNotas extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    function lista_materias($cedula) {
        $query = $this->db->query("SELECT id_Asignacion,id_Materias,id_materias_Asignacion,nom_Materias,nom_Cursos,id_cursos FROM asignacion,materias,cursos where id_Materias=id_materias_Asignacion and id_Cursos=id_curso_Asignacion and id_docente_Asignacion=" . $cedula);
        return $query->result();
    }

    function ConsultaAlumnos($idmateria, $idcurso) {
        $sql = "SELECT * FROM estudiante,asignacion,matricula,materias,cursos
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and id_Materias=$idmateria and id_Cursos=$idcurso;";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
