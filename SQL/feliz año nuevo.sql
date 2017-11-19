
INSERT INTO clone_estudiantes 
SELECT *  FROM estudiante,matricula,cursos,materias,docente,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and cedula_Docente=id_profesor_MateriasNotas
and id_Materias=id_materia_MateriasNotas
and cedula_estudiantes_MateriasNotas=cedula_Estudiante;

UPDATE estudiante
SET Estado = 0;


INSERT INTO clone_docente
SELECT * FROM docente,asignacion,materias,cursos
where id_docente_Asignacion=cedula_Docente
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion;

INSERT INTO clone_pensiones
SELECT * FROM estudiante,pensiones
where cedula_Estudiante=id_estudiantes;

INSERT INTO clone_tutoria
SELECT * 
FROM docente,cursos,observacioncurso,curso_tutor
where cedula_Docente=cedula_Curso_Tutor
and id_Cursos=curso_Curso_Tutor
and cedula_profesor_observacioncurso=cedula_Docente
and id_curso_observacioncurso=curso_Curso_Tutor;


TRUNCATE matricula;
TRUNCATE materiasnotas;
TRUNCATE asignacion;
TRUNCATE pensiones;
TRUNCATE observacioncurso;
TRUNCATE curso_tutor;




