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
    function ConsultaAlumnosSub($idmateria, $idcurso) {
        $sql = "SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotasquimetre
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and cedula_estudiante_materiasnotasQuimetre=cedula_Estudiante
and id_Materias=$idmateria and id_Cursos=$idcurso;";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function InserNotas($quimestre, $materia, $curso, $profesor, $cedu, $notaParcial1, $notaParcial2, $notaParcial3, $porcenta, $notaexamen, $porcentaexamen, $promediototal) {



        $array1 = array(
            'quimestre_MateriasNotas' => $quimestre,
            'id_materia_MateriasNotas' => $materia,
            'id_curso_MateriasNotas' => $curso,
            'id_profesor_MateriasNotas' => $profesor,
            'cedula_estudiantes_MateriasNotas' => $cedu,
            'notaparcial1_MateriasNotas' => $notaParcial1,
            'notaparcial2_MateriasNotas' => $notaParcial2,
            'notaparcial3_MateriasNotas' => $notaParcial3,
            'porcentaje_MateriasNotas' => $porcenta,
            'nota_examen_MateriasNotas' => $notaexamen,
            'nota_examen_porcentaje_MateriasNotas' => $porcentaexamen,
            'promedio_MateriasNotas' => $promediototal
        );
        $this->db->insert('materiasnotas', $array1);
    }

    public function InserNotasQ1($cedu, $materia, $curso, $profesor, $promediototal) {
        $array1 = array(
            'cedula_estudiante_materiasnotasQuimetre' => $cedu,
            'id_materia_materiasnotasQuimetre' => $materia,
            'id_curso_materiasnotasQuimetre' => $curso,
            'id_profesor_materiasnotasQuimetre' => $profesor,
            'notaQ1_materiasnotasQuimetre' => $promediototal
        );
        $this->db->insert('materiasnotasquimetre', $array1);
    }

    public function UpdateNotasQ2($cedu, $promediototal) {
        $array1 = array(
            'notaQ2_materiasnotasQuimetre' => $promediototal
        );
        $this->db->where('cedula_estudiante_materiasnotasQuimetre', $cedu);

        $this->db->update('materiasnotasquimetre', $array1);
        //echo $this->db->last_query();
    }

}
