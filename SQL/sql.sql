SELECT nom_Estudiante,nom_Cursos 
FROM matricula,estudiante,cursos 
where cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_Estudiante=122222;

SELECT nom_Cursos,GROUP_CONCAT(nom_Materias) 
FROM estudiante,cursos,materias,asignacion 
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion 
and id_Cursos=1; 

SELECT nom_Cursos,nom_Materias
FROM cursos,materias,asignacion 
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion
and id_Cursos=1; 

SELECT nom_Estudiante,nom_Cursos,GROUP_CONCAT(nom_Materias) FROM materias, asignacion,matricula,estudiante,cursos
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion  
and cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_Estudiante=1234;

SELECT nom_Estudiante,nom_Cursos,nom_Materias FROM materias, asignacion,matricula,estudiante,cursos
where id_curso_Asignacion=id_Cursos 
and id_Materias=id_materias_Asignacion  
and cedula_Estudiante=cedula_estudiante_matricula 
and id_curso=id_Cursos 
and cedula_Estudiante=1234;

SELECT nom_Cursos, GROUP_CONCAT(CONCAT_WS(',',cedula_Estudiante,nom_Estudiante,ape_Estudiante)) as nombre 
FROM cursos,estudiante,matricula 
where cedula_Estudiante=cedula_estudiante_matricula 
and id_Cursos =id_curso
and id_curso =1;

SELECT nom_Cursos,cedula_Estudiante,nom_Estudiante,ape_Estudiante
FROM cursos,estudiante,matricula 
where cedula_Estudiante=cedula_estudiante_matricula 
and id_Cursos =id_curso
and id_curso =1;

