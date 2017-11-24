<?php
defined("BASEPATH") OR die("El acceso al script no está permitido");

class Pdf_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProvincias()
    {
        $query = $this->db->get('estudiante');
        return $query->result();
        
    }
    public function getMateriasDatos($mp,$mp1)
    {
        $query = $this->db->query("SELECT *, @rownum:=@rownum+1 as id FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas, (SELECT @rownum:=0) R
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
And id_materia_MateriasNotas=id_Materias
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_Materias=$mp1 and id_Cursos=$mp;");
        return $query->result();
        
    }
    public function getMateriasDatos3()
    {
        $query = $this->db->query("SELECT *
FROM estudiante,cursos,materias,materiasnotas,matricula
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_curso_MateriasNotas=id_Cursos
and id_materia_MateriasNotas=id_Materias");
        return $query->result();
        
    }
    public function getMateriasDatos2($mp)
    {
        $query = $this->db->query("SELECT *, @rownum:=@rownum+1 as id FROM estudiante,cursos,matricula, (SELECT @rownum:=0) R
where cedula_Estudiante=cedula_estudiante_matricula
and id_curso=id_Cursos
and id_curso=$mp;");
        return $query->result();
        
    }
}
/* End of file pdf_model.php */
/* Location: ./application/models/pdf_model.php */
