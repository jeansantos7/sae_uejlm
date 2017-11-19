SELECT *  FROM estudiante,matricula,cursos,materias,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and cedula_Estudiante=19172997
and id_Cursos=id_curso
and id_Materias=id_materia_MateriasNotas
and cedula_estudiantes_MateriasNotas=cedula_Estudiante;



datos estudiantes
INSERT INTO 
CREATE TABLE
INSERT INTO  clone_estudiantes 
SELECT *  FROM estudiante,matricula,cursos,materias,docente,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and cedula_Docente=id_profesor_MateriasNotas
and id_Materias=id_materia_MateriasNotas
and cedula_estudiantes_MateriasNotas=cedula_Estudiante;


dtos docentes

INSERT INTO 
CREATE TABLE  clone_docente
SELECT * FROM docente,asignacion,materias,cursos
where id_docente_Asignacion=cedula_Docente
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and cedula_Docente=1234

datos docentes
INSERT INTO 
CREATE TABLE  clone_pensiones

SELECT * FROM estudiante,pensiones
where cedula_Estudiante=id_estudiantes


