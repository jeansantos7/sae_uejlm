-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2017 a las 06:22:37
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `directivo`
--

INSERT INTO `directivo` (`id_Directivo`, `cedula_Directivo`, `ape_Directivo`, `nom_Directivo`, `telf_Directivo`, `correo_Directivo`, `direc_Directivo`, `fech_nac_Directivo`, `user_Directivo`, `pass_Directivo`) VALUES
(1, '11', ' ggggg', 'gggg', '   11', 'qw@co.co', '   qq', '', '   qq', '   qq');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_Estudiante` int(11) NOT NULL,
  `matricula_Estudiante` int(10) DEFAULT NULL,
  `fech_matricula_Estudiante` varchar(45) DEFAULT NULL,
  `cedula_Estudiante` int(10) DEFAULT NULL,
  `ape_Estudiante` varchar(45) DEFAULT NULL,
  `nom_Estudiante` varchar(45) DEFAULT NULL,
  `fech_nac_Estudiante` varchar(45) DEFAULT NULL,
  `dir_Estudiante` varchar(45) DEFAULT NULL,
  `disc_Estudiante` varchar(45) DEFAULT NULL,
  `carnet_Estudiante` int(20) DEFAULT NULL,
  `cedula_Representante_Estudiante` int(10) DEFAULT NULL,
  `ape_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `nom_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `telf_Representante_Estudiante` int(17) DEFAULT NULL,
  `correo_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `dir_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `parentesco_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `ocup_Representante_Estudiante` varchar(45) DEFAULT NULL,
  `user_Estudiante` varchar(45) DEFAULT NULL,
  `pass_Estudiante` varchar(45) DEFAULT NULL,
  `valorMatricula_Estudiante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `disc_Estudiante`, `carnet_Estudiante`, `cedula_Representante_Estudiante`, `ape_Representante_Estudiante`, `nom_Representante_Estudiante`, `telf_Representante_Estudiante`, `correo_Representante_Estudiante`, `dir_Representante_Estudiante`, `parentesco_Representante_Estudiante`, `ocup_Representante_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `valorMatricula_Estudiante`) VALUES
(1, 123, '2017-10-13', 123, 'pa', 'pa', '1993-12-12', 'pa', 'q', 0, 0, 'q', 'q', 0, 'q', 'q', 'Padre o Madre', 'q', 'qq', 'qq', '40'),
(2, 2, '1219-12-12', 1234, 'paz', 'pez', '1999-09-09', 'piz', '', 0, 12, '3', 'z', 1, 'a', 'a', 'Padre o Madre', 'a', 'a', 'a', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_pagos`
--

CREATE TABLE `historial_pagos` (
  `idHistorial_pagos` int(11) NOT NULL,
  `id_estudiante` varchar(45) DEFAULT NULL,
  `id_mes` varchar(45) DEFAULT NULL,
  `valor_del_pago` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial_pagos`
--

INSERT INTO `historial_pagos` (`idHistorial_pagos`, `id_estudiante`, `id_mes`, `valor_del_pago`, `fecha`) VALUES
(1, '123', '1', '45', '2017-10-20 23:13:55'),
(2, '123', '1', '35', '2017-10-20 23:14:09'),
(3, '123', '2', '24', '2017-10-20 23:14:20'),
(4, '123', '1', '10', '2017-10-20 23:14:29'),
(5, '1234', '1', '24', '2017-10-20 23:16:04'),
(6, '1234', '1', '56', '2017-10-20 23:17:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penciones`
--

CREATE TABLE `penciones` (
  `idPenciones` int(11) NOT NULL,
  `id_estudiantes` varchar(45) DEFAULT NULL,
  `valor_matricula` varchar(45) DEFAULT NULL,
  `valor_pagado` varchar(45) DEFAULT NULL,
  `mes_pagado` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `penciones`
--

INSERT INTO `penciones` (`idPenciones`, `id_estudiantes`, `valor_matricula`, `valor_pagado`, `mes_pagado`, `fecha`, `estado`) VALUES
(1, '123', '90', '90', '1', NULL, NULL),
(2, '123', '45', '24', '2', NULL, NULL),
(3, '1234', '100', '80', '1', NULL, NULL);

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
(1, 233, ' 11111', '122344444', '   23', '11111q@com.com', '   as', '0000-00-00', '  qqqq', '   qw');

--
-- Índices para tablas volcadas
--

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
  ADD PRIMARY KEY (`idHistorial_pagos`);

--
-- Indices de la tabla `penciones`
--
ALTER TABLE `penciones`
  ADD PRIMARY KEY (`idPenciones`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_Secretaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directivo`
--
ALTER TABLE `directivo`
  MODIFY `id_Directivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_Docente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `idHistorial_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `penciones`
--
ALTER TABLE `penciones`
  MODIFY `idPenciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
