SELECT * FROM estudiante,asignacion,matricula,materias,cursos,materiasnotas
where cedula_Estudiante=cedula_estudiante_matricula
and id_Cursos=id_curso
and id_Cursos=id_curso_Asignacion
and id_Materias=id_materias_Asignacion
and cedula_estudiantes_MateriasNotas=cedula_Estudiante
and id_Materias=2 and id_Cursos=1;

