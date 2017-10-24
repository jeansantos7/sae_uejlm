-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2017 a las 17:29:41
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
(1, '8978987987979', 'bailon', 'carlos', 'y67868', 'hkhkhk@jhkhkj', 'hgjgjh', '2017-10-19', '7757', 'gjhjgjhg');

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
(1, 444444444, 'alcivar', 'margarita', '77987987', 'khkhkjh@jhkhk', 'khkhk', '0000-00-00', '97979', 'hkhkj');

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
  `pension_Estudiante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `disc_Estudiante`, `carnet_Estudiante`, `cedula_Representante_Estudiante`, `ape_Representante_Estudiante`, `nom_Representante_Estudiante`, `telf_Representante_Estudiante`, `correo_Representante_Estudiante`, `dir_Representante_Estudiante`, `parentesco_Representante_Estudiante`, `ocup_Representante_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `pension_Estudiante`) VALUES
(1, 1, '2017-10-03', 1316031937, 'santos alcivar', 'jean', '2017-10-12', 'uuoioi', '57657657', 57657657, 6456546, 'jghgjgh', 'jhgjgjh', 8979, 'hkhkhk', 'hjgjgj', 'Padre o Madre', 'fgfghfhj', 'jean', '1234', '400 '),
(2, 2, '2017-10-05', 222222222, 'sornoza', 'ciela', '2017-10-05', 'nnnn,mn,m', '12', 12, 32131231, 'sasdsad', 'sdadsa', 90890, 'kkjkhjkh', '908080', 'Padre o Madre', 'jkhjkhk', 'yuyiyuiy', 'bhjjhk', '29');

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
(24, '1316031937', '1', '100', '2017-10-23 08:53:18'),
(25, '1316031937', '1', '20', '2017-10-23 08:55:38'),
(26, '222222222', '1', '1.9', '2017-10-23 09:05:46'),
(27, '1316031937', '1', '90', '2017-10-23 09:06:32'),
(28, '222222222', '1', '9', '2017-10-23 09:06:50'),
(29, '1316031937', '1', '90.5', '2017-10-23 09:07:12');

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
  `fecha` datetime DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pensiones`
--

INSERT INTO `pensiones` (`idPenciones`, `id_estudiantes`, `valor_matricula`, `valor_pagado`, `mes_pagado`, `fecha`, `estado`) VALUES
(9, '1316031937', '400', '300.5', '1', '2017-10-23 09:07:12', NULL),
(10, '222222222', '29', '10.9', '1', '2017-10-23 09:06:50', NULL);

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
(1, 2147483647, 'ella es ', 'secretaria uejlm', '089798798', 'jkhkjhkj@uyiuyi.com', 'kjhkjhkhk', '2017-10-04', 'jhjkhk', '767868');

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
  ADD PRIMARY KEY (`idhistorial_pagos`);

--
-- Indices de la tabla `pensiones`
--
ALTER TABLE `pensiones`
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
  MODIFY `id_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `idhistorial_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `pensiones`
--
ALTER TABLE `pensiones`
  MODIFY `idPenciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
