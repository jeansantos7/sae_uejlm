<?php

/**
 * 
 */
class Modelo_Asignacion extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ListaDocentes() {
        $query = $this->db->query("SELECT * FROM docente");
        return $query->result();
    }

    public function ListaMaterias() {
        $query = $this->db->query("SELECT * FROM materias");
        return $query->result();
    }

    public function ListaCurso() {
        $query = $this->db->query("SELECT * FROM cursos");
        return $query->result();
    }

    public function inserAsignacion($docente, $materia, $curso) {

        $array = array(
            'id_docente_Asignacion' => $docente,
            'id_materias_Asignacion' => $materia,
            'id_curso_Asignacion' => $curso
        );
        $this->db->insert('asignacion', $array);
    }
    public function inserAsignacionTutor($docenteselect, $cursoselect) {

        $array = array(
            'cedula_Curso_Tutor' => $docenteselect,
            'curso_Curso_Tutor' => $cursoselect
            
        );
        $this->db->insert('curso_tutor', $array);
    }

    public function MateriasLista($cedula_docente) {

        $query = $this->db->query("SELECT id_Asignacion,id_materias_Asignacion,nom_Materias,nom_Cursos FROM asignacion,materias,cursos where id_Materias=id_materias_Asignacion and id_Cursos=id_curso_Asignacion and id_docente_Asignacion=" . $cedula_docente);
        return $query->result();
    }
    public function CursoTutor() {

        $query = $this->db->query("SELECT * FROM
docente,curso_tutor,cursos
where id_Cursos=id_curso_tutor
and cedula_Docente=cedula_Curso_Tutor;");
        return $query->result();
    }

    public function materiaborrar($id) {
        $this->db->where('id_Asignacion', $id);
        $this->db->delete('asignacion');
    }

}
?> 
