-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2017 a las 20:05:45
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
(2, NULL, NULL, NULL),
(9, '0', '1', '1'),
(10, '0', '4', '5'),
(11, '12', '2', '1'),
(13, '0', '5', '1'),
(14, '0', '5', '5');

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
(10, '2do', 'B.G.U Ciencias');

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
(1, 0, 'ape', 'nom', '123', 'a@a.com', 'd', '0000-00-00', 'as12', 'as12'),
(2, 12, 'qwe', 'we', '321', 'sas@qw.com', 'de', '1212-12-12', 'qwe123', 'asd12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_Estudiante` int(11) NOT NULL,
  `matricula_Estudiante` varchar(45) DEFAULT NULL,
  `fech_matricula_Estudiante` datetime DEFAULT NULL,
  `cedula_Estudiante` int(10) DEFAULT NULL,
  `ape_Estudiante` varchar(45) DEFAULT NULL,
  `nom_Estudiante` varchar(45) DEFAULT NULL,
  `fech_nac_Estudiante` varchar(45) DEFAULT NULL,
  `dir_Estudiante` varchar(45) DEFAULT NULL,
  `carnet_Estudiante` int(20) DEFAULT NULL,
  `parentesco_Estudiante` varchar(45) DEFAULT NULL,
  `pension_Estudiante` int(11) NOT NULL,
  `user_Estudiante` varchar(45) DEFAULT NULL,
  `pass_Estudiante` varchar(45) DEFAULT NULL,
  `Representante_id_Representante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `carnet_Estudiante`, `parentesco_Estudiante`, `pension_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `Representante_id_Representante`) VALUES
(2, '1234', '2017-10-05 00:00:00', 123454444, 'ass', 'ass', 'ass', 'asss|', NULL, 'asas', 90, 'ass', 'ass', 2),
(3, '111111', '2017-10-28 20:38:34', 122222, 'oas', 'APS', NULL, 'AS', 1234, 'Padre o Madre', 12, 'ASS', 'ass', 12345),
(4, '1233', '2017-11-02 11:33:47', 123445, '123445', '123445', NULL, '123445', 123445, 'Padre o Madre', 123445, '123445', '', 0),
(5, '12121212', '2017-11-02 11:42:36', 12121212, '12121212', '12121212', NULL, '12121212', 12121212, 'Padre o Madre', 12345, '12121212', '12121212', 0),
(6, '1234512345', '2017-11-02 11:44:38', 1234512345, '1234512345', '1234512345', NULL, '1234512345', 1234512345, 'Padre o Madre', 1234512345, '1234512345', '1234512345', 0);

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
(1, '123456789', '1', '40', '2017-10-28 00:49:50'),
(2, '123456789', '4', '40', '2017-10-28 00:52:50'),
(3, '123456789', '5', '20', '2017-10-28 00:53:10'),
(4, '123456789', '5', '20', '2017-10-28 00:53:17'),
(5, '123456789', '3', '40', '2017-10-28 00:54:01'),
(6, '123454444', '1', '90', '2017-10-28 00:56:00'),
(7, '123454444', '2', '90', '2017-10-28 01:50:20'),
(8, '123456789', '2', '5', '2017-10-28 09:25:06'),
(9, '123456789', '2', '1', '2017-10-28 09:25:35'),
(10, '123454444', '3', '91', '2017-10-28 09:28:02'),
(11, '123454444', '4', '23', '2017-10-28 14:31:29'),
(12, '122222', '1', '12', '2017-10-28 20:38:50'),
(13, '122222', '2', '12', '2017-10-28 20:39:05'),
(14, '123456789', '0', '40', '2017-10-28 20:41:04'),
(15, '122222', '0', '12', '2017-10-28 20:41:14'),
(16, '122222', '0', '12', '2017-10-28 21:06:30'),
(17, '123456789', '0', '40', '2017-10-28 21:07:47'),
(18, '123454444', '0', '89', '2017-11-02 15:39:25'),
(19, '123454444', '0', '1', '2017-11-02 15:39:35'),
(20, '122222', '0', '12', '2017-11-02 15:39:46'),
(21, '123454444', '1', '91', '2017-11-02 15:40:10');

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
(1, '123456789', '40', '40', '0', NULL, NULL),
(2, '123454444', '90', '90', '0', NULL, NULL),
(3, '122222', '12', '12', '0', NULL, NULL),
(4, '123454444', '90', '91', '1', NULL, NULL);

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

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id_Secretaria`, `cedula_Secretaria`, `ape_Secretaria`, `nom_Secretaria`, `telf_Secretaria`, `correo_Secretaria`, `direc_Secretaria`, `fech_nac_Secretaria`, `user_Secretaria`, `pass_Secretaria`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'as', 'as');

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
(1, NULL, 'adonis', 'adonis', 'Secretario'),
(2, NULL, 'ass', 'ass', 'administracion'),
(3, NULL, 'qw', 'qw', 'Estudiante'),
(4, NULL, '12', '12', 'Profesor'),
(5, NULL, '3', '3', 'Padre'),
(6, '1234512345', '1234512345', '1234512345', 'Estudiante');

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
  ADD PRIMARY KEY (`id_Estudiante`),
  ADD KEY `fk_Estudiante_Representante_idx` (`Representante_id_Representante`);

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
  MODIFY `id_Asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `directivo`
--
ALTER TABLE `directivo`
  MODIFY `id_Directivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `idhistorial_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
-- AUTO_INCREMENT de la tabla `pensiones`
--
ALTER TABLE `pensiones`
  MODIFY `idPenciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
