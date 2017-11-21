<?php

class Modelo_MateriasNotas extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    function lista_materias($cedula) {
        $query = $this->db->query("SELECT id_Asignacion,id_Materias,id_materias_Asignacion,nom_Materias,nom_Cursos,id_cursos FROM asignacion,materias,cursos where id_Materias=id_materias_Asignacion and id_Cursos=id_curso_Asignacion and id_docente_Asignacion=" . $cedula);
        return $query->result();
    }
    function lista_materiasDirectivo() {
        $query = $this->db->query("SELECT id_Asignacion,id_Materias,id_materias_Asignacion,nom_Materias,nom_Cursos,id_cursos FROM asignacion,materias,cursos where id_Materias=id_materias_Asignacion and id_Cursos=id_curso_Asignacion");
        return $query->result();
    }

    function ConsultaAlumnos($idmateria, $idcurso) {
        $sql = "SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
And id_materia_MateriasNotas=id_Materias
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_Materias=$idmateria and id_Cursos=$idcurso;";
        $query = $this->db->query($sql);
        $row = $query->row();
        if (isset($row)) {
            return $query->result();
           
        } else {
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

    function ConsultaAlumnosSub($idmateria, $idcurso) {
        $sql = "SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_materia_MateriasNotas=id_Materias
and id_Materias=$idmateria and id_Cursos=$idcurso;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function InserNotasQ1($quimestre, $materia, $curso, $profesor, $cedu, $notaparcial1q1) {



        $array1 = array(
            'quimestre_MateriasNotas' => $quimestre,
            'id_materia_MateriasNotas' => $materia,
            'id_curso_MateriasNotas' => $curso,
            'id_profesor_MateriasNotas' => $profesor,
            'cedula_estudiantes_MateriasNotas' => $cedu,
            'notaparcial1q1_MateriasNotas' => $notaparcial1q1
        );
        $this->db->insert('materiasnotas', $array1);
    }

    function InserNotasQ2($quimestre, $materia, $curso, $profesor, $cedu, $notaparcial1q1, $notaparcial2q1, $notaparcial3q1, $porcentaq1, $notaexamenq1, $porcentaexamenq1,
            $promediototalq1,$notaparcial1q2,$notaparcial2q2,$notaparcial3q2,$porcentaq2,$notaexamenq2,$porcentaexamenq2,$promediototalq2) {



        $array1 = array(
            'notaparcial1q1_MateriasNotas' => $notaparcial1q1,
            'notaparcial2q1_MateriasNotas' => $notaparcial2q1,
            'notaparcial3q1_MateriasNotas' => $notaparcial3q1,
            'porcentajeq1_MateriasNotas' => $porcentaq1,
            'nota_examenq1_MateriasNotas' => $notaexamenq1,
            'nota_examen_porcentajeq1_MateriasNotas' => $porcentaexamenq1,
            'promedioq1_MateriasNotas' => $promediototalq1,
            'notaparcial1q2_MateriasNotas' => $notaparcial1q2,
            'notaparcial2q2_MateriasNotas' => $notaparcial2q2,
            'notaparcial3q2_MateriasNotas' => $notaparcial3q2,
            'porcentajeq2_MateriasNotas' => $porcentaq2,
            'nota_examenq2_MateriasNotas' => $notaexamenq2,
            'nota_examen_porcentajeq2_MateriasNotas' => $porcentaexamenq2,
            'promedioq2_MateriasNotas' => $promediototalq2
        );
        $this->db->where('cedula_estudiantes_MateriasNotas', $cedu);
        $this->db->where('id_materia_MateriasNotas', $materia);
//
        $this->db->update('materiasnotas', $array1);
    }

    public function inserSup($cedu, $materia, $curso, $profesor, $promediototal) {
        $array1 = array(
            'notarec_MateriasNotas' => $promediototal
        );
        $this->db->where('cedula_estudiantes_MateriasNotas', $cedu);

        $this->db->update('materiasnotas', $array1);

//echo $this->db->last_query();
    }

    public function UpSup($cedu, $materia, $curso, $profesor, $promediototal) {
        $array1 = array(
            'notareme_MateriasNotas' => $promediototal
        );
        $this->db->where('cedula_estudiantes_MateriasNotas', $cedu);

        $this->db->update('materiasnotas', $array1);
        //echo $this->db->last_query();
    }

    public function UpSup2($cedu, $materia, $curso, $profesor, $promediototal) {
        $array1 = array(
            'notaexa_MateriasNotas' => $promediototal
        );
        $this->db->where('cedula_estudiantes_MateriasNotas', $cedu);

        $this->db->update('materiasnotas', $array1);
        //echo $this->db->last_query();
    }

}
