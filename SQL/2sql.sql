SELECT * FROM estudiante,asignacion,matricula,materias,cursos
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and id_Materias=5 and id_Cursos=1;