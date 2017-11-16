<?php

/**
 * 
 */
class Modelo_RegistroDocente extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function selDocente() {

        $query = $this->db->query("select * from Docente");
        return $query->result();
    }

    public function inserDocente($cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente) {
        $array1 = array(
            //	'id_Docente' => $id_Docente,
            'cedula_Docente' => $cedula_Docente,
            'ape_Docente' => $ape_Docente,
            'nom_Docente' => $nom_Docente,
            'telf_Docente' => $telf_Docente,
            'correo_Docente' => $correo_Docente,
            'direc_Docente' => $direc_Docente,
            'fech_nac_Docente' => $fech_nac_Docente,
            'user_Docente' => $user_Docente,
            'pass_Docente' => $pass_Docente
        );


        $this->db->insert('Docente', $array1);
    }

    public function listarDocente() {

        $query = $this->db->query("select * from Docente");
        return $query->result();
    }

    public function deleteDocente($id_Docente) {
        $this->db->where('id_Docente', $id_Docente);
        $this->db->delete('Docente');
    }

    public function editDocente($id_Docente) {
        $query = $this->db->query("select * from Docente where id_Docente=$id_Docente");
        return $query->result();
    }

    public function updateDocente($cedula_Docente, $ape_Docente, $nom_Docente, $telf_Docente, $correo_Docente, $direc_Docente, $fech_nac_Docente, $user_Docente, $pass_Docente) {
        $array2 = array(
            'cedula_Docente' => $cedula_Docente,
            'ape_Docente' => $ape_Docente,
            'nom_Docente' => $nom_Docente,
            'telf_Docente' => $telf_Docente,
            'correo_Docente' => $correo_Docente,
            'direc_Docente' => $direc_Docente,
            'fech_nac_Docente' => $fech_nac_Docente,
            'user_Docente' => $user_Docente,
            'pass_Docente' => $pass_Docente
        );

        $this->db->where('cedula_Docente', $cedula_Docente);
        $this->db->update('Docente', $array2);
    }

    public function ConsultaExiste($cedula_Docente) {

        $query = $this->db->query("select * from Docente where cedula_Docente=$cedula_Docente");
        return $query->result();
    }

    function MateriasLista($cedula) {
        $query = $this->db->query("SELECT * FROM asignacion,materias,cursos where id_Materias=id_materias_Asignacion and id_Cursos=id_curso_Asignacion and id_docente_Asignacion=" . $cedula);
        return $query->result();
    }

    function inserUsuario($cedula_Docente, $user_Docente, $pass_Docente, $Profesor) {
        $array1 = array(
            //	'id_Docente' => $id_Docente,
            'cedula' => $cedula_Docente,
            'usuario' => $user_Docente,
            'Contra' => $pass_Docente,
            'tipo' => $Profesor
        );


        $this->db->insert('usuario', $array1);
    }

    function Estudiascurso($param) {
        $query = $this->db->query("SELECT *
FROM cursos,estudiante,matricula,curso_tutor
where cedula_Estudiante=cedula_estudiante_matricula 
and id_Cursos =id_curso
and id_curso =curso_Curso_Tutor
and cedula_Curso_Tutor=$param;");
        return $query->result();
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

    function setObser($profeob, $cedulaob, $Incidencia, $observ) {
        $array1 = array(
            //	'id_Docente' => $id_Docente,
            'cedula_estu_observacion' => $cedulaob,
            'cedula_profe_observacion' => $profeob,
            'descr_observacion' => $observ,
            'Incidencia_observacion' => $Incidencia
        );


        $this->db->insert('observacion', $array1);
        //$this->db->last_query();
    }

    function setObser12($curso12, $profeob12, $Incidencia12, $observ12) {
        $array1 = array(
            //	'id_Docente' => $id_Docente,
            'id_curso_observacioncurso' => $curso12,
            'cedula_profesor_observacioncurso' => $profeob12,
            'incidencia_observacioncurso' => $Incidencia12,
            'observ_observacioncurso' => $observ12
        );


        $this->db->insert('observacioncurso', $array1);
    }

}

?>
