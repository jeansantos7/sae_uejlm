SELECT nom_Estudiante,nom_Cursos FROM matricula,estudiante,cursos where cedula_Estudiante=cedula_estudiante_matricula and id_curso=id_Cursos and cedula_Estudiante=1234;
SELECT nom_Cursos,GROUP_CONCAT(nom_Materias) FROM estudiante,cursos,materias,asignacion where id_curso_Asignacion=id_Cursos and id_Materias=id_materias_Asignacion and id_Cursos=1; 


SELECT nom_Estudiante,nom_Cursos,GROUP_CONCAT(nom_Materias) FROM materias, asignacion,matricula,estudiante,cursos
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion  
and cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_Estudiante=1234;