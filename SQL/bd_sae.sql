-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2017 a las 16:23:14
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion`
--

CREATE TABLE `asignacion` (
  `id_Asignacion` int(11) NOT NULL,
  `id_docente_Asignacion` varchar(45) DEFAULT NULL,
  `id_materias_Asignacion` varchar(45) DEFAULT NULL,
  `id_curso_Asignacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignacion`
--

INSERT INTO `asignacion` (`id_Asignacion`, `id_docente_Asignacion`, `id_materias_Asignacion`, `id_curso_Asignacion`) VALUES
(1, '1234', '1', '1'),
(2, '1234', '1', '2'),
(5, '1234', '2', '2'),
(6, '1234', '2', '10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_Cursos` int(11) NOT NULL,
  `nom_Cursos` varchar(45) DEFAULT NULL,
  `nivel_Cursos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_Cursos`, `nom_Cursos`, `nivel_Cursos`) VALUES
(1, 'Primero A', ''),
(2, 'Primero B', ''),
(3, 'Primero C', ''),
(4, 'Primero D', ''),
(5, 'Segundo A', ''),
(6, 'Segundo B', ''),
(7, 'Segundo C', ''),
(8, 'Segundo D', ''),
(9, '1ero', ''),
(10, '2do', 'B.G.U Ciencias'),
(11, 'Tercero', 'B.G.U Ciencias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_tutor`
--

CREATE TABLE `curso_tutor` (
  `id` int(11) NOT NULL,
  `cedula_Curso_Tutor` varchar(45) DEFAULT NULL,
  `curso_Curso_Tutor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_tutor`
--

INSERT INTO `curso_tutor` (`id`, `cedula_Curso_Tutor`, `curso_Curso_Tutor`) VALUES
(1, '1234', '2'),
(2, '1234', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivo`
--

CREATE TABLE `directivo` (
  `id_Directivo` int(11) NOT NULL,
  `cedula_Directivo` varchar(45) DEFAULT NULL,
  `ape_Directivo` varchar(45) DEFAULT NULL,
  `nom_Directivo` varchar(45) DEFAULT NULL,
  `telf_Directivo` varchar(45) DEFAULT NULL,
  `correo_Directivo` varchar(45) DEFAULT NULL,
  `direc_Directivo` varchar(45) DEFAULT NULL,
  `fech_nac_Directivo` varchar(45) DEFAULT NULL,
  `user_Directivo` varchar(45) DEFAULT NULL,
  `pass_Directivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `directivo`
--

INSERT INTO `directivo` (`id_Directivo`, `cedula_Directivo`, `ape_Directivo`, `nom_Directivo`, `telf_Directivo`, `correo_Directivo`, `direc_Directivo`, `fech_nac_Directivo`, `user_Directivo`, `pass_Directivo`) VALUES
(2, '0987654321673', 'sssssssssss', 'ssssssssssss', '0999', 'sd@s.com', 'dddddd', '2017-10-05', 'as', 'as'),
(3, '123456765432', 'ASASASASAS', 'ASASASAS', 'ASASAS', 'ASASAS@c.c', 'ASASASAS', '', 'SASASssss', 'ASASASAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_Docente` int(11) NOT NULL,
  `cedula_Docente` int(10) DEFAULT NULL,
  `ape_Docente` varchar(45) DEFAULT NULL,
  `nom_Docente` varchar(45) DEFAULT NULL,
  `telf_Docente` varchar(45) DEFAULT NULL,
  `correo_Docente` varchar(45) DEFAULT NULL,
  `direc_Docente` varchar(45) DEFAULT NULL,
  `fech_nac_Docente` date DEFAULT NULL,
  `user_Docente` varchar(45) DEFAULT NULL,
  `pass_Docente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_Docente`, `cedula_Docente`, `ape_Docente`, `nom_Docente`, `telf_Docente`, `correo_Docente`, `direc_Docente`, `fech_nac_Docente`, `user_Docente`, `pass_Docente`) VALUES
(1, 1234, 'Paz', 'Luis', '09', 'legend@leg.com', 'av1', '0000-00-00', 'ass', 'ass');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_Estudiante` int(11) NOT NULL,
  `fech_matricula_Estudiante` datetime DEFAULT NULL,
  `cedula_Estudiante` int(10) DEFAULT NULL,
  `ape_Estudiante` varchar(45) DEFAULT NULL,
  `nom_Estudiante` varchar(45) DEFAULT NULL,
  `fech_nac_Estudiante` date NOT NULL,
  `dir_Estudiante` varchar(45) DEFAULT NULL,
  `carnet_Estudiante` int(20) DEFAULT NULL,
  `pension_Estudiante` int(11) NOT NULL,
  `user_Estudiante` varchar(45) DEFAULT NULL,
  `pass_Estudiante` varchar(45) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT '0',
  `Estadonotas` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `carnet_Estudiante`, `pension_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `Estado`, `Estadonotas`) VALUES
(1, NULL, 1234567890, ' ESTU APEeee', ' ESTU NOMeee', '0000-00-00', ' avo', 1, 100, ' ESTU001', ' ESTU001', '1', '0'),
(2, NULL, 987654321, 'ESTU APE2', 'ESTU NOM2', '0000-00-00', 'AVI', 1, 90, 'ESTU002', 'ESTU002', '1', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_pagos`
--

CREATE TABLE `historial_pagos` (
  `idhistorial_pagos` int(11) NOT NULL,
  `id_estudiante` varchar(45) DEFAULT NULL,
  `id_mes` varchar(45) DEFAULT NULL,
  `valor_del_pago` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_pagos`
--

INSERT INTO `historial_pagos` (`idhistorial_pagos`, `id_estudiante`, `id_mes`, `valor_del_pago`, `fecha`) VALUES
(1, '1234567890', '0', '10', '2017-11-17 08:45:49'),
(2, '1234567890', '0', '22', '2017-11-17 10:20:57'),
(3, '1234567890', '0', '1', '2017-11-17 10:21:50'),
(4, '1234567890', '0', '2', '2017-11-17 10:24:18'),
(5, '1234567890', '0', '3', '2017-11-17 11:27:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lectivo`
--

CREATE TABLE `lectivo` (
  `idLectivo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lectivo`
--

INSERT INTO `lectivo` (`idLectivo`, `descripcion`) VALUES
(1, '2017-2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_Materias` int(11) NOT NULL,
  `nom_Materias` varchar(45) DEFAULT NULL,
  `nom_corto_Materias` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_Materias`, `nom_Materias`, `nom_corto_Materias`) VALUES
(1, 'Matematicas', NULL),
(2, 'Fisica', NULL),
(3, 'Fisica II', NULL),
(4, 'Matematicas II', NULL),
(5, 'Informatica', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasnotas`
--

CREATE TABLE `materiasnotas` (
  `id` int(11) NOT NULL,
  `quimestre_MateriasNotas` varchar(45) DEFAULT NULL,
  `id_materia_MateriasNotas` varchar(45) DEFAULT NULL,
  `id_curso_MateriasNotas` varchar(45) DEFAULT NULL,
  `id_profesor_MateriasNotas` varchar(45) DEFAULT NULL,
  `cedula_estudiantes_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial1q1_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial2q1_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial3q1_MateriasNotas` varchar(45) DEFAULT NULL,
  `porcentajeq1_MateriasNotas` varchar(45) DEFAULT NULL,
  `nota_examenq1_MateriasNotas` varchar(45) DEFAULT NULL,
  `nota_examen_porcentajeq1_MateriasNotas` varchar(45) DEFAULT NULL,
  `promedioq1_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial1q2_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial2q2_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaparcial3q2_MateriasNotas` varchar(45) DEFAULT NULL,
  `porcentajeq2_MateriasNotas` varchar(45) DEFAULT NULL,
  `nota_examenq2_MateriasNotas` varchar(45) DEFAULT NULL,
  `nota_examen_porcentajeq2_MateriasNotas` varchar(45) DEFAULT NULL,
  `promedioq2_MateriasNotas` varchar(45) DEFAULT NULL,
  `notarec_MateriasNotas` varchar(45) DEFAULT NULL,
  `notareme_MateriasNotas` varchar(45) DEFAULT NULL,
  `notaexa_MateriasNotas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `materiasnotas`
--

INSERT INTO `materiasnotas` (`id`, `quimestre_MateriasNotas`, `id_materia_MateriasNotas`, `id_curso_MateriasNotas`, `id_profesor_MateriasNotas`, `cedula_estudiantes_MateriasNotas`, `notaparcial1q1_MateriasNotas`, `notaparcial2q1_MateriasNotas`, `notaparcial3q1_MateriasNotas`, `porcentajeq1_MateriasNotas`, `nota_examenq1_MateriasNotas`, `nota_examen_porcentajeq1_MateriasNotas`, `promedioq1_MateriasNotas`, `notaparcial1q2_MateriasNotas`, `notaparcial2q2_MateriasNotas`, `notaparcial3q2_MateriasNotas`, `porcentajeq2_MateriasNotas`, `nota_examenq2_MateriasNotas`, `nota_examen_porcentajeq2_MateriasNotas`, `promedioq2_MateriasNotas`, `notarec_MateriasNotas`, `notareme_MateriasNotas`, `notaexa_MateriasNotas`) VALUES
(1, '1', '1', '2', '1234', '987654321', '10', '10', '10', '8', '2', '0.4', '8.4', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(2, '1', '1', '2', '1234', '121212', '10', '10', '1', '5.6000000000000005', '3', '0.6000000000000001', '6.200000000000001', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(3, '1', '1', '1', '1234', '1234567890', '5', '7.4', '3', '4', '9', '1.8', '5.8', '0', '0', '0', '0', '', '0', '0', '9', NULL, NULL),
(4, '1', '2', '2', '1234', '987654321', '9', '1', '', 'NaN', '', '0', 'NaN', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(5, '1', '2', '2', '1234', '121212', '9', '1', '', 'NaN', '', '0', 'NaN', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasnotasquimetre`
--

CREATE TABLE `materiasnotasquimetre` (
  `id` int(11) NOT NULL,
  `cedula_estudiante_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_materia_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_curso_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_profesor_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `notaQ1_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `notaQ2_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `total_materiasnotasQuimetre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasnotasquimetrerecu`
--

CREATE TABLE `materiasnotasquimetrerecu` (
  `id` int(11) NOT NULL,
  `cedu_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `materia_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `curso_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `profe_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notarec_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notareme_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notaexa_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL,
  `cedula_estudiante_matricula` varchar(45) DEFAULT NULL,
  `lectivo` varchar(45) DEFAULT NULL,
  `id_curso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`idMatricula`, `cedula_estudiante_matricula`, `lectivo`, `id_curso`) VALUES
(1, '1234567890', '1', '1'),
(2, '987654321', '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacion`
--

CREATE TABLE `observacion` (
  `id` int(11) NOT NULL,
  `cedula_estu_observacion` varchar(45) DEFAULT NULL,
  `cedula_profe_observacion` varchar(45) DEFAULT NULL,
  `descr_observacion` longtext,
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `Incidencia_observacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `observacion`
--

INSERT INTO `observacion` (`id`, `cedula_estu_observacion`, `cedula_profe_observacion`, `descr_observacion`, `fecha`, `Incidencia_observacion`) VALUES
(1, '121212', '1234', 'ppo\r\n', '2017-11-15 17:39:07', NULL),
(2, '987654321', '1234', 'pouo', '2017-11-15 17:57:18', NULL),
(3, '987654321', '1234', 'asASsAS', '2017-11-15 20:06:55', 'FaltaJustificada'),
(4, '', '', '', '2017-11-15 20:32:58', 'FaltaJustificada'),
(5, '987654321', '1234', 'holi', '2017-11-15 21:19:50', 'FaltaInjustificada'),
(6, '987654321', '1234', 'holi', '2017-11-15 21:19:50', 'FaltaInjustificada'),
(7, '987654321', '1234', 'holi', '2017-11-15 21:19:51', 'FaltaInjustificada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observacioncurso`
--

CREATE TABLE `observacioncurso` (
  `id` int(11) NOT NULL,
  `id_curso_observacioncurso` varchar(45) DEFAULT NULL,
  `cedula_profesor_observacioncurso` varchar(45) DEFAULT NULL,
  `incidencia_observacioncurso` varchar(45) DEFAULT NULL,
  `observ_observacioncurso` longtext,
  `fecha_observacioncurso` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `observacioncurso`
--

INSERT INTO `observacioncurso` (`id`, `id_curso_observacioncurso`, `cedula_profesor_observacioncurso`, `incidencia_observacioncurso`, `observ_observacioncurso`, `fecha_observacioncurso`) VALUES
(1, '2', '1234', 'FaltaJustificada', 'as', '0000-00-00 00:00:00'),
(2, '2', '1234', 'FaltaJustificada', 'as', '2017-11-15 20:48:00'),
(3, '2', '1234', 'FaltaJustificada', 'as', '2017-11-15 20:48:39'),
(4, '2', '1234', 'FaltaJustificada', 'as', '2017-11-15 20:48:44'),
(5, '2', '1234', 'FaltaJustificada', 'as', '2017-11-15 20:49:04'),
(6, '2', '1234', 'FaltaInjustificada', 'asasasasas', '2017-11-15 20:49:42'),
(7, '2', '1234', 'FaltaJustificada', 'holi general', '2017-11-15 21:20:09'),
(8, '2', '1234', 'FaltaJustificada', 'holi general', '2017-11-15 21:20:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensiones`
--

CREATE TABLE `pensiones` (
  `idPenciones` int(11) NOT NULL,
  `id_estudiantes` varchar(45) DEFAULT NULL,
  `valor_matricula` varchar(45) DEFAULT NULL,
  `valor_pagado` varchar(45) DEFAULT NULL,
  `mes_pagado` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pensiones`
--

INSERT INTO `pensiones` (`idPenciones`, `id_estudiantes`, `valor_matricula`, `valor_pagado`, `mes_pagado`, `fecha`, `estado`) VALUES
(1, '1234567890', '100', '38', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id_Representante` int(11) NOT NULL,
  `cedula_Representante` varchar(45) DEFAULT NULL,
  `ape_Representante` varchar(45) DEFAULT NULL,
  `nom_Representante` varchar(45) DEFAULT NULL,
  `telf_Representante` varchar(45) DEFAULT NULL,
  `correo_Representante` varchar(45) DEFAULT NULL,
  `dir_Representante` varchar(45) DEFAULT NULL,
  `ocu_Representante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id_Secretaria` int(11) NOT NULL,
  `cedula_Secretaria` int(10) DEFAULT NULL,
  `ape_Secretaria` varchar(45) DEFAULT NULL,
  `nom_Secretaria` varchar(45) DEFAULT NULL,
  `telf_Secretaria` varchar(45) DEFAULT NULL,
  `correo_Secretaria` varchar(45) DEFAULT NULL,
  `direc_Secretaria` varchar(45) DEFAULT NULL,
  `fech_nac_Secretaria` date DEFAULT NULL,
  `user_Secretaria` varchar(45) DEFAULT NULL,
  `pass_Secretaria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_prueba`
--

CREATE TABLE `tabla_prueba` (
  `columna` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tabla_prueba`
--

INSERT INTO `tabla_prueba` (`columna`) VALUES
('a1'),
('a2'),
('a3'),
('a4'),
('a5'),
('a6'),
('a7'),
('a8'),
('a9'),
('a10'),
('a11'),
('a12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `Contra` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `cedula`, `usuario`, `Contra`, `tipo`) VALUES
(1, '0', 'adonis', 'adonis', 'Secretario'),
(2, '1', 'ass1', 'ass1', 'administracion'),
(3, '2', 'qw', 'qw', 'Estudiante'),
(4, '1234', '12', '12', 'Profesor'),
(9, '1234567890', 'ESTU001', 'ESTU001', 'Estudiante'),
(10, '987654321', 'ESTU002', 'ESTU002', 'Estudiante'),
(11, '121212', 'ESTU003', 'ESTU003', 'Estudiante'),
(12, '2231323', 'jean', '1234', 'estudiante'),
(13, '1313131313', 'jean', '1234', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  ADD PRIMARY KEY (`id_Asignacion`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_Cursos`);

--
-- Indices de la tabla `curso_tutor`
--
ALTER TABLE `curso_tutor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivo`
--
ALTER TABLE `directivo`
  ADD PRIMARY KEY (`id_Directivo`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_Docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_Estudiante`);

--
-- Indices de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  ADD PRIMARY KEY (`idhistorial_pagos`);

--
-- Indices de la tabla `lectivo`
--
ALTER TABLE `lectivo`
  ADD PRIMARY KEY (`idLectivo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_Materias`);

--
-- Indices de la tabla `materiasnotas`
--
ALTER TABLE `materiasnotas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiasnotasquimetre`
--
ALTER TABLE `materiasnotasquimetre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materiasnotasquimetrerecu`
--
ALTER TABLE `materiasnotasquimetrerecu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indices de la tabla `observacion`
--
ALTER TABLE `observacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observacioncurso`
--
ALTER TABLE `observacioncurso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pensiones`
--
ALTER TABLE `pensiones`
  ADD PRIMARY KEY (`idPenciones`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id_Representante`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_Secretaria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacion`
--
ALTER TABLE `asignacion`
  MODIFY `id_Asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `curso_tutor`
--
ALTER TABLE `curso_tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `directivo`
--
ALTER TABLE `directivo`
  MODIFY `id_Directivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `idhistorial_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `lectivo`
--
ALTER TABLE `lectivo`
  MODIFY `idLectivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_Materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `materiasnotas`
--
ALTER TABLE `materiasnotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `materiasnotasquimetre`
--
ALTER TABLE `materiasnotasquimetre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materiasnotasquimetrerecu`
--
ALTER TABLE `materiasnotasquimetrerecu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `observacion`
--
ALTER TABLE `observacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `observacioncurso`
--
ALTER TABLE `observacioncurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `pensiones`
--
ALTER TABLE `pensiones`
  MODIFY `idPenciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
