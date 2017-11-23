-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2017 a las 16:01:53
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
(1, '', '2', '1'),
(2, '1234', '2', '1'),
(3, '1234', '3', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clone_docente`
--

CREATE TABLE `clone_docente` (
  `id_Docente` int(11) NOT NULL DEFAULT '0',
  `cedula_Docente` int(10) DEFAULT NULL,
  `ape_Docente` varchar(45) DEFAULT NULL,
  `nom_Docente` varchar(45) DEFAULT NULL,
  `telf_Docente` varchar(45) DEFAULT NULL,
  `correo_Docente` varchar(45) DEFAULT NULL,
  `direc_Docente` varchar(45) DEFAULT NULL,
  `fech_nac_Docente` date DEFAULT NULL,
  `user_Docente` varchar(45) DEFAULT NULL,
  `pass_Docente` varchar(45) DEFAULT NULL,
  `id_Asignacion` int(11) NOT NULL DEFAULT '0',
  `id_docente_Asignacion` varchar(45) DEFAULT NULL,
  `id_materias_Asignacion` varchar(45) DEFAULT NULL,
  `id_curso_Asignacion` varchar(45) DEFAULT NULL,
  `id_Materias` int(11) NOT NULL DEFAULT '0',
  `nom_Materias` varchar(45) DEFAULT NULL,
  `nom_corto_Materias` varchar(45) DEFAULT NULL,
  `id_Cursos` int(11) NOT NULL DEFAULT '0',
  `nom_Cursos` varchar(45) DEFAULT NULL,
  `nivel_Cursos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clone_docente`
--

INSERT INTO `clone_docente` (`id_Docente`, `cedula_Docente`, `ape_Docente`, `nom_Docente`, `telf_Docente`, `correo_Docente`, `direc_Docente`, `fech_nac_Docente`, `user_Docente`, `pass_Docente`, `id_Asignacion`, `id_docente_Asignacion`, `id_materias_Asignacion`, `id_curso_Asignacion`, `id_Materias`, `nom_Materias`, `nom_corto_Materias`, `id_Cursos`, `nom_Cursos`, `nivel_Cursos`) VALUES
(1, 1234, 'Paz', 'Luis', '09', 'legend@leg.com', 'av1', '0000-00-00', 'ass', 'ass', 1, '1234', '1', '1', 1, 'Historia', 'Historia', 1, 'Primero A', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clone_estudiantes`
--

CREATE TABLE `clone_estudiantes` (
  `id_Estudiante` int(11) NOT NULL DEFAULT '0',
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
  `Representante_id_Representante` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT '0',
  `Estadonotas` varchar(45) DEFAULT '0',
  `idMatricula` int(11) NOT NULL DEFAULT '0',
  `cedula_estudiante_matricula` varchar(45) DEFAULT NULL,
  `lectivo` varchar(45) DEFAULT NULL,
  `id_curso` varchar(45) DEFAULT NULL,
  `id_Cursos` int(11) NOT NULL DEFAULT '0',
  `nom_Cursos` varchar(45) DEFAULT NULL,
  `nivel_Cursos` varchar(30) NOT NULL,
  `id_Materias` int(11) NOT NULL DEFAULT '0',
  `nom_Materias` varchar(45) DEFAULT NULL,
  `nom_corto_Materias` varchar(45) DEFAULT NULL,
  `id_Docente` int(11) NOT NULL DEFAULT '0',
  `cedula_Docente` int(10) DEFAULT NULL,
  `ape_Docente` varchar(45) DEFAULT NULL,
  `nom_Docente` varchar(45) DEFAULT NULL,
  `telf_Docente` varchar(45) DEFAULT NULL,
  `correo_Docente` varchar(45) DEFAULT NULL,
  `direc_Docente` varchar(45) DEFAULT NULL,
  `fech_nac_Docente` date DEFAULT NULL,
  `user_Docente` varchar(45) DEFAULT NULL,
  `pass_Docente` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
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
-- Volcado de datos para la tabla `clone_estudiantes`
--

INSERT INTO `clone_estudiantes` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `carnet_Estudiante`, `parentesco_Estudiante`, `pension_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `Representante_id_Representante`, `Estado`, `Estadonotas`, `idMatricula`, `cedula_estudiante_matricula`, `lectivo`, `id_curso`, `id_Cursos`, `nom_Cursos`, `nivel_Cursos`, `id_Materias`, `nom_Materias`, `nom_corto_Materias`, `id_Docente`, `cedula_Docente`, `ape_Docente`, `nom_Docente`, `telf_Docente`, `correo_Docente`, `direc_Docente`, `fech_nac_Docente`, `user_Docente`, `pass_Docente`, `id`, `quimestre_MateriasNotas`, `id_materia_MateriasNotas`, `id_curso_MateriasNotas`, `id_profesor_MateriasNotas`, `cedula_estudiantes_MateriasNotas`, `notaparcial1q1_MateriasNotas`, `notaparcial2q1_MateriasNotas`, `notaparcial3q1_MateriasNotas`, `porcentajeq1_MateriasNotas`, `nota_examenq1_MateriasNotas`, `nota_examen_porcentajeq1_MateriasNotas`, `promedioq1_MateriasNotas`, `notaparcial1q2_MateriasNotas`, `notaparcial2q2_MateriasNotas`, `notaparcial3q2_MateriasNotas`, `porcentajeq2_MateriasNotas`, `nota_examenq2_MateriasNotas`, `nota_examen_porcentajeq2_MateriasNotas`, `promedioq2_MateriasNotas`, `notarec_MateriasNotas`, `notareme_MateriasNotas`, `notaexa_MateriasNotas`) VALUES
(5, 'F3X8M6', '2017-11-15 09:47:09', 19172997, 'Charde', 'Riley', '2002-05-31 05:59:53', 'Apartado núm.: 332, 7778 Ornare ', NULL, 'Sr.', 100, 'vestibulum.lorem@ridiculusmusDonec.com', 'BIO90TDA8AP', 0, '1', '0', 1, '19172997', '1', '1', 1, 'Primero A', '', 1, 'Historia', 'Historia', 1, 1234, 'Paz', 'Luis', '09', 'legend@leg.com', 'av1', '0000-00-00', 'ass', 'ass', 1, '1', '1', '1', '1234', '19172997', '10', '9', '9', '7.466666666666668', '9', '1.8', '9.266666666666667', '9', '9', '9', '7.2', '9', '9', '9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clone_pensiones`
--

CREATE TABLE `clone_pensiones` (
  `id_Estudiante` int(11) NOT NULL DEFAULT '0',
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
  `Representante_id_Representante` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT '0',
  `Estadonotas` varchar(45) DEFAULT '0',
  `idPenciones` int(11) NOT NULL DEFAULT '0',
  `id_estudiantes` varchar(45) DEFAULT NULL,
  `valor_matricula` varchar(45) DEFAULT NULL,
  `valor_pagado` varchar(45) DEFAULT NULL,
  `mes_pagado` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `estado1` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clone_pensiones`
--

INSERT INTO `clone_pensiones` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `fech_nac_Estudiante`, `dir_Estudiante`, `carnet_Estudiante`, `parentesco_Estudiante`, `pension_Estudiante`, `user_Estudiante`, `pass_Estudiante`, `Representante_id_Representante`, `Estado`, `Estadonotas`, `idPenciones`, `id_estudiantes`, `valor_matricula`, `valor_pagado`, `mes_pagado`, `fecha`, `estado1`) VALUES
(5, 'F3X8M6', '2017-11-15 09:47:09', 19172997, 'Charde', 'Riley', '2002-05-31 05:59:53', 'Apartado núm.: 332, 7778 Ornare ', NULL, 'Sr.', 100, 'vestibulum.lorem@ridiculusmusDonec.com', 'BIO90TDA8AP', 0, '0', '0', 1, '19172997', '100', '100', '0', NULL, NULL),
(5, 'F3X8M6', '2017-11-15 09:47:09', 19172997, 'Charde', 'Riley', '2002-05-31 05:59:53', 'Apartado núm.: 332, 7778 Ornare ', NULL, 'Sr.', 100, 'vestibulum.lorem@ridiculusmusDonec.com', 'BIO90TDA8AP', 0, '0', '0', 2, '19172997', '100', '100', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clone_tutoria`
--

CREATE TABLE `clone_tutoria` (
  `id_Docente` int(11) NOT NULL DEFAULT '0',
  `cedula_Docente` int(10) DEFAULT NULL,
  `ape_Docente` varchar(45) DEFAULT NULL,
  `nom_Docente` varchar(45) DEFAULT NULL,
  `telf_Docente` varchar(45) DEFAULT NULL,
  `correo_Docente` varchar(45) DEFAULT NULL,
  `direc_Docente` varchar(45) DEFAULT NULL,
  `fech_nac_Docente` date DEFAULT NULL,
  `user_Docente` varchar(45) DEFAULT NULL,
  `pass_Docente` varchar(45) DEFAULT NULL,
  `id_Cursos` int(11) NOT NULL DEFAULT '0',
  `nom_Cursos` varchar(45) DEFAULT NULL,
  `nivel_Cursos` varchar(30) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `id_curso_observacioncurso` varchar(45) DEFAULT NULL,
  `cedula_profesor_observacioncurso` varchar(45) DEFAULT NULL,
  `incidencia_observacioncurso` varchar(45) DEFAULT NULL,
  `observ_observacioncurso` longtext,
  `fecha_observacioncurso` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_curso_tutor` int(11) NOT NULL DEFAULT '0',
  `cedula_Curso_Tutor` varchar(45) DEFAULT NULL,
  `curso_Curso_Tutor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clone_tutoria`
--

INSERT INTO `clone_tutoria` (`id_Docente`, `cedula_Docente`, `ape_Docente`, `nom_Docente`, `telf_Docente`, `correo_Docente`, `direc_Docente`, `fech_nac_Docente`, `user_Docente`, `pass_Docente`, `id_Cursos`, `nom_Cursos`, `nivel_Cursos`, `id`, `id_curso_observacioncurso`, `cedula_profesor_observacioncurso`, `incidencia_observacioncurso`, `observ_observacioncurso`, `fecha_observacioncurso`, `id_curso_tutor`, `cedula_Curso_Tutor`, `curso_Curso_Tutor`) VALUES
(1, 1234, 'Paz', 'Luis', '09', 'legend@leg.com', 'av1', '0000-00-00', 'ass', 'ass', 1, 'Primero A', '', 1, '1', '1234', 'FaltaInjustificada', 'ASASA NO VINOOOO', '2017-11-19 11:10:45', 1, '1234', '1');

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
-- Estructura de tabla para la tabla `curso_tutor`
--

CREATE TABLE `curso_tutor` (
  `id_curso_tutor` int(11) NOT NULL,
  `cedula_Curso_Tutor` varchar(45) DEFAULT NULL,
  `curso_Curso_Tutor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_tutor`
--

INSERT INTO `curso_tutor` (`id_curso_tutor`, `cedula_Curso_Tutor`, `curso_Curso_Tutor`) VALUES
(1, '1234', '1'),
(2, '1234', '4');

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
(1, 1234, 'Paz', 'Luis', '09', 'legend@leg.com', 'av1', '0000-00-00', 'ass', 'ass'),
(2, 21733479, 'Reynolds, Keiko M.', 'Armand', '076-940-1313', 'ligula.Aenean@vehicula.org', 'Apdo.:534-3421 Nec Avda.', '1993-12-12', '274915198', '381506500'),
(4, 17460730, 'Rollins, Nasim J.', 'Odysseus', '028-180-2314', 'lobortis.risus.In@loremsit.org', '433-5027 Turpis. Calle', '1991-05-10', '504610122', '388869760'),
(5, 21004510, 'Gillespie, Shellie U.', 'Ivana', '098-276-0902', 'consequat.purus.Maecenas@nonleo.ca', '301-6805 Dapibus Calle', '1993-08-14', '364063602', '002301190'),
(6, 35445327, 'Morin, Aladdin T.', 'Tana', '063-444-1358', 'Quisque.ornare.tortor@elitpellentesque.org', 'Apdo.:685-6189 Magnis C/', '1990-03-20', '610000374', '372205831'),
(7, 35778074, 'Blackburn, Mary I.', 'Nero', '067-204-8194', 'cursus@euelitNulla.org', 'Apdo.:997-2523 Etiam Avda.', '1991-10-22', '255827511', '009957614'),
(8, 20149423, 'Key, Yvonne I.', 'Regina', '063-171-6894', 'Duis@dui.co.uk', 'Apartado núm.: 139, 3085 Orci Avenida', '1994-04-24', '360806319', '338729965'),
(9, 16466071, 'Ortiz, Mara B.', 'Brynne', '011-644-9097', 'tristique@velit.co.uk', 'Apartado núm.: 787, 6956 Et, ', '1990-11-14', '549194249', '852177963'),
(10, 32838665, 'Chase, Palmer B.', 'Tad', '071-081-2227', 'vel.turpis@etultrices.net', '9133 Arcu ', '1990-07-29', '075432708', '635346364'),
(11, 38904557, 'Frye, Georgia T.', 'Murphy', '059-450-6396', 'nulla.ante@ornare.com', 'Apartado núm.: 625, 8797 Lacus. Avda.', '1994-04-12', '244057691', '494683691'),
(12, 43887296, 'Irwin, Britanney N.', 'Christian', '089-808-0373', 'in@cubiliaCurae.ca', '7238 Semper Carretera', '1991-03-02', '449356112', '738688787'),
(13, 14197764, 'Bryant, Phoebe T.', 'Sage', '010-336-0427', 'mi.felis.adipiscing@lectusasollicitudin.edu', 'Apdo.:107-2337 Neque C/', '1993-12-12', '752598904', '693771677'),
(14, 46986424, 'Francis, Ila N.', 'Patrick', '083-946-8114', 'amet@at.org', '104-8008 Eros Ctra.', '1990-12-08', '034490284', '378958912'),
(15, 12314380, 'Sharp, Wesley R.', 'Jared', '028-544-9058', 'Donec@Aliquamnisl.ca', 'Apartado núm.: 935, 6293 Velit Avenida', '1991-03-25', '419192158', '539023705'),
(16, 29016345, 'Sosa, Astra N.', 'Warren', '081-606-5309', 'euismod.mauris.eu@vulputatelacus.net', '754-2675 Non, Carretera', '1990-08-11', '235941531', '689065878'),
(17, 43815371, 'Ramos, Harriet X.', 'Oren', '062-569-9981', 'vitae.risus.Duis@enimEtiamgravida.net', '4153 Augue C/', '1992-08-09', '328900576', '606101392'),
(18, 19641384, 'Savage, Rae U.', 'Miriam', '050-214-7911', 'turpis@Fuscealiquam.org', '8559 Orci C.', '1993-11-27', '064408883', '431982602'),
(19, 48360294, 'Savage, Ava Y.', 'Adena', '090-317-5810', 'tellus.Nunc.lectus@felis.net', '322-295 Vulputate Av.', '1990-11-12', '721996106', '422770313'),
(20, 21116280, 'Sharp, Tyrone D.', 'Hyatt', '016-942-0742', 'diam@elitsedconsequat.ca', '293-3845 Nec C.', '1993-02-28', '134873686', '780212650'),
(21, 41194345, 'Shelton, Melinda A.', 'Omar', '078-930-0315', 'Nam@magnaPhasellus.org', '3536 Nullam C.', '1991-08-13', '570729822', '321298051');

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
  `sexo` varchar(10) DEFAULT NULL,
  `fech_nac_Estudiante` varchar(45) DEFAULT NULL,
  `dir_Estudiante` varchar(45) DEFAULT NULL,
  `carnet_Estudiante` int(20) DEFAULT NULL,
  `parentesco_Estudiante` varchar(45) DEFAULT NULL,
  `pension_Estudiante` int(11) NOT NULL,
  `idRepresentante` int(10) DEFAULT NULL,
  `idMadre` int(10) DEFAULT NULL,
  `idPadre` int(10) DEFAULT NULL,
  `user_Estudiante` varchar(45) DEFAULT NULL,
  `pass_Estudiante` varchar(45) DEFAULT NULL,
  `Representante_id_Representante` int(11) NOT NULL,
  `Estado` varchar(45) DEFAULT '0',
  `Estadonotas` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_Estudiante`, `matricula_Estudiante`, `fech_matricula_Estudiante`, `cedula_Estudiante`, `ape_Estudiante`, `nom_Estudiante`, `sexo`, `fech_nac_Estudiante`, `dir_Estudiante`, `carnet_Estudiante`, `parentesco_Estudiante`, `pension_Estudiante`, `idRepresentante`, `idMadre`, `idPadre`, `user_Estudiante`, `pass_Estudiante`, `Representante_id_Representante`, `Estado`, `Estadonotas`) VALUES
(5, 'F3X8M6', '2017-11-15 09:47:09', 19172997, '  jose', 'sda', NULL, '', '     Apartado núm.: 332, 7778 Ornare ', 223223, 'Sr.', 20, NULL, NULL, NULL, '     vestibulum.lorem@ridiculusmusDonec.com', '     9', 0, '1', '0'),
(6, 'W8X7F2', '2017-10-03 08:04:52', 40770483, 'Yetta', 'Benton', NULL, '2002-11-17 22:21:31', '568-8740 Eu Carretera', NULL, 'Dr.', 100, NULL, NULL, NULL, 'fermentum.vel.mauris@interdum.net', 'WAU74VEW4TF', 0, '1', '0'),
(7, 'L5I4D0', '2016-12-07 12:06:27', 24457663, 'Ingrid', 'Jones', NULL, '2004-06-04 10:42:04', '447-9500 Eu Calle', NULL, 'Sra.', 100, NULL, NULL, NULL, 'magna.et@nonummy.net', 'QIC45YWD3HE', 0, '1', '0'),
(8, 'M4Q6T9', '2017-10-31 07:46:34', 27800214, 'Haviva', 'Welch', NULL, '2004-09-15 15:50:26', 'Apdo.:834-8474 Elit Calle', NULL, 'Srta.', 100, NULL, NULL, NULL, 'tellus.eu.augue@augueut.edu', 'MJV31STR6XY', 0, '0', '0'),
(9, 'Q3V4O3', '2017-01-04 01:33:52', 38978564, 'Walker', 'Leon', NULL, '2004-01-09 15:43:37', '4701 Suspendisse C/', NULL, '', 100, NULL, NULL, NULL, 'natoque@consectetueradipiscing.ca', 'XAQ54IQH9QR', 0, '1', '0'),
(10, 'K5G9B1', '2017-08-19 02:43:55', 48430187, 'Veda', 'Lowe', NULL, '2001-09-11 10:10:23', '1333 Id Carretera', NULL, 'Sra.', 100, NULL, NULL, NULL, 'vitae@in.co.uk', 'NEO17CXY0YR', 0, '1', '0'),
(11, 'C6H4T5', '2017-03-19 09:54:19', 25829789, 'Regina', 'Mccullough', NULL, '2004-03-08 02:34:27', '411-6101 Lacus. C/', NULL, 'Sr.', 100, NULL, NULL, NULL, 'Sed.congue.elit@acorci.ca', 'AIY12QSF1HO', 0, '0', '0'),
(12, 'M7B7R1', '2017-08-23 00:38:32', 15742561, 'Angelica', 'York', NULL, '2002-05-16 12:49:20', '918-5574 Malesuada Av.', NULL, 'Sr.', 100, NULL, NULL, NULL, 'hendrerit.id.ante@acnullaIn.ca', 'QJX65BCJ5TS', 0, '0', '0'),
(13, 'W8V2A5', '2017-05-16 15:37:40', 41486812, 'Karina', 'Johns', NULL, '2000-05-07 21:04:53', 'Apdo.:375-1673 Elit, Avenida', NULL, '', 100, NULL, NULL, NULL, 'a.enim@molestie.co.uk', 'GZA39EVK6AY', 0, '0', '0'),
(14, 'G7E8K7', '2017-07-01 08:39:18', 21442768, 'Garrett', 'Greer', NULL, '2004-03-23 04:27:31', 'Apartado núm.: 666, 8644 Sit Avda.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'pellentesque@Curabiturvellectus.com', 'FUG73RZH2NJ', 0, '0', '0'),
(15, 'J7P7H5', '2017-01-03 13:49:38', 30379226, 'Lael', 'Black', NULL, '2003-06-22 02:56:48', '5747 Suspendisse ', NULL, 'Dr.', 100, NULL, NULL, NULL, 'imperdiet.nec@Donec.net', 'FDO93WYY7WC', 0, '0', '0'),
(16, 'U1Q6S5', '2017-01-31 05:57:38', 11282247, 'Martin', 'Castro', NULL, '2003-10-20 07:18:32', 'Apdo.:865-4257 Vulputate C.', NULL, 'Srta.', 100, NULL, NULL, NULL, 'Quisque.ac.libero@Etiam.net', 'SYQ26RQF2KH', 0, '0', '0'),
(17, 'U9U7E0', '2017-11-16 20:25:58', 8229687, 'Aquila', 'Drake', NULL, '2000-11-04 22:35:50', '8865 Et Ctra.', NULL, '', 100, NULL, NULL, NULL, 'ac.facilisis@Curabiturut.net', 'RUV73IOI4AR', 0, '0', '0'),
(18, 'I4V3A6', '2017-09-23 15:52:16', 5783821, 'Ginger', 'Wolfe', NULL, '2001-11-22 01:33:37', '744-6131 Elit. C.', NULL, 'Dr.', 100, NULL, NULL, NULL, 'Lorem.ipsum@Crasdictum.com', 'OKP00XOW3KY', 0, '0', '0'),
(19, 'T3Q2V6', '2017-07-09 03:37:52', 7596802, 'William', 'Aguirre', NULL, '2002-04-30 12:05:20', 'Apartado núm.: 123, 5877 In C/', NULL, 'Dr.', 100, NULL, NULL, NULL, 'tellus@bibendumDonecfelis.edu', 'LBQ89LPV4FN', 0, '0', '0'),
(20, 'N6E1N4', '2017-07-20 06:06:57', 37287378, 'Jasmine', 'Randolph', NULL, '2003-06-07 08:16:36', '6830 Luctus. ', NULL, 'Sr.', 100, NULL, NULL, NULL, 'luctus.aliquet@faucibuslectusa.ca', 'VGX99WVT1QM', 0, '0', '0'),
(21, 'U9Y6P1', '2017-04-17 16:47:40', 39781466, 'Moses', 'Pollard', NULL, '2004-08-19 13:45:32', 'Apdo.:543-9876 Egestas. Avda.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'lorem.luctus@sociisnatoquepenatibus.net', 'LKA78RKD7HS', 0, '0', '0'),
(22, 'U9U5E6', '2017-03-19 23:23:37', 29740835, 'Luke', 'Odonnell', NULL, '2003-05-10 09:14:59', '757-3379 Vitae, Ctra.', NULL, '', 100, NULL, NULL, NULL, 'facilisis.lorem@Proinegetodio.com', 'NHS83WHA1HA', 0, '0', '0'),
(23, 'V1H5Y2', '2017-05-02 05:48:20', 7917102, 'Ivan', 'Hunt', NULL, '2003-05-08 15:21:50', 'Apdo.:378-6219 Eu Ctra.', NULL, 'Sr.', 100, NULL, NULL, NULL, 'id@sodalesnisi.edu', 'BMT52BXO8JW', 0, '0', '0'),
(24, 'U8K1Z0', '2017-10-08 13:50:17', 47111202, 'Carly', 'Oconnor', NULL, '2002-12-22 05:38:14', '7810 Mattis Carretera', NULL, 'Dr.', 100, NULL, NULL, NULL, 'elit.Curabitur@diam.org', 'EBN82TEH2OQ', 0, '0', '0'),
(25, 'B4R7V7', '2017-06-24 00:30:28', 19695162, 'Deirdre', 'Nixon', NULL, '2001-11-21 21:18:02', 'Apdo.:211-7325 Enim. Ctra.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'bibendum.fermentum.metus@Morbiquis.co.uk', 'AYJ72FRP5UB', 0, '0', '0'),
(26, 'E9L9D4', '2017-05-18 04:31:51', 27766414, 'Sylvester', 'Collier', NULL, '2002-07-30 04:19:48', '4822 Turpis C.', NULL, 'Srta.', 100, NULL, NULL, NULL, 'Integer@rutrum.org', 'TWM28BIB2WS', 0, '0', '0'),
(27, 'J5F4C1', '2017-04-16 09:07:39', 48985977, 'Ria', 'Duke', NULL, '2003-05-04 01:38:44', 'Apartado núm.: 967, 7741 Vulputate, C.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'eget@maurisrhoncusid.ca', 'RVH78GPQ6CU', 0, '0', '0'),
(28, 'A2K4P3', '2017-01-04 12:54:57', 47875959, 'Judith', 'Finley', NULL, '2004-07-23 10:17:59', 'Apdo.:930-7240 Dictum ', NULL, 'Sr.', 100, NULL, NULL, NULL, 'ipsum@inhendreritconsectetuer.org', 'BTC21GWC6KO', 0, '0', '0'),
(29, 'P3S7R8', '2017-07-31 11:00:51', 13860412, 'Ali', 'Farmer', NULL, '2001-01-29 06:18:09', 'Apartado núm.: 711, 8847 Et, Avda.', NULL, '', 100, NULL, NULL, NULL, 'convallis@pede.com', 'TDS15PUS9MW', 0, '0', '0'),
(30, 'J1C2Y5', '2017-09-14 00:38:44', 46249006, 'Paloma', 'Duffy', NULL, '2003-10-19 05:34:04', '6501 Ut, Avenida', NULL, 'Sr.', 100, NULL, NULL, NULL, 'diam@nequeSedeget.co.uk', 'ZPP77AXD1VK', 0, '0', '0'),
(31, 'Z8Y5L4', '2016-12-17 11:47:29', 48967767, 'Elliott', 'Bond', NULL, '2003-10-19 06:59:12', '488-5540 Placerat Avda.', NULL, '', 100, NULL, NULL, NULL, 'et@ultricesaauctor.ca', 'MHL65ZZA9WC', 0, '0', '0'),
(32, 'I2T5H5', '2016-12-06 16:36:19', 30474384, 'Chaney', 'Sims', NULL, '2004-03-08 10:08:09', 'Apartado núm.: 343, 7597 Morbi Carretera', NULL, '', 100, NULL, NULL, NULL, 'ut.sem@nequesed.ca', 'UIR47AIW4RK', 0, '0', '0'),
(33, 'U0L4H7', '2017-09-13 17:43:46', 42120388, 'Linda', 'Silva', NULL, '2003-03-26 02:10:37', 'Apartado núm.: 360, 7442 Pede, C.', NULL, 'Dr.', 100, NULL, NULL, NULL, 'eget@Donectempor.edu', 'LYC45SZL7IC', 0, '0', '0'),
(34, 'U8K4L6', '2017-08-15 10:13:44', 18771049, 'Hector', 'Moon', NULL, '2001-11-10 20:52:44', '4031 Suspendisse Ctra.', NULL, 'Sr.', 100, NULL, NULL, NULL, 'cursus@auctorquistristique.co.uk', 'UWA12FHI2HQ', 0, '0', '0'),
(35, 'F5J2B9', '2017-04-18 13:02:50', 14124832, 'Nehru', 'Shields', NULL, '2003-09-10 21:10:34', '563-8466 In Avenida', NULL, '', 100, NULL, NULL, NULL, 'parturient@egestas.org', 'WJA44EJF7QJ', 0, '0', '0'),
(36, 'H9W3Q2', '2017-04-19 23:27:23', 21725684, 'Nehru', 'Silva', NULL, '2002-09-29 09:58:43', '624-9624 Semper Av.', NULL, '', 100, NULL, NULL, NULL, 'non.feugiat@Phasellusfermentum.org', 'PXB18GSE7GU', 0, '0', '0'),
(37, 'I6H7F2', '2017-01-12 12:18:15', 16697886, 'Hamilton', 'Merrill', NULL, '2002-05-01 12:57:16', '703-1550 Pretium Calle', NULL, 'Dr.', 100, NULL, NULL, NULL, 'tincidunt.pede@Suspendisse.com', 'IKP65NFC5RH', 0, '0', '0'),
(38, 'R2A9K1', '2017-08-09 01:01:08', 27945865, 'Joel', 'Burris', NULL, '2002-02-07 21:31:27', 'Apdo.:858-3608 Nibh. C.', NULL, '', 100, NULL, NULL, NULL, 'vulputate@laciniaatiaculis.ca', 'MGY69OGH7ZD', 0, '0', '0'),
(39, 'B0S7M9', '2017-10-20 08:44:14', 32861817, 'Addison', 'Patrick', NULL, '2003-09-21 03:35:05', '6280 Leo ', NULL, '', 100, NULL, NULL, NULL, 'lobortis@rutrumFusce.edu', 'XMU59CTA9IP', 0, '0', '0'),
(40, 'N1H2U1', '2017-04-24 18:41:11', 33379449, 'Hadley', 'Matthews', NULL, '2005-01-28 23:45:19', '985-3485 Amet Ctra.', NULL, 'Sr.', 100, NULL, NULL, NULL, 'sit.amet@vestibulumloremsit.ca', 'YXO49KJP1NR', 0, '0', '0'),
(41, 'Z7L1U7', '2017-09-25 10:06:41', 33408764, 'Liberty', 'Black', NULL, '2003-02-04 11:15:41', '3707 Nulla. Ctra.', NULL, 'Dr.', 100, NULL, NULL, NULL, 'eget.varius@uterat.edu', 'ZRO39MBZ3RR', 0, '0', '0'),
(42, 'F2W2C5', '2017-03-25 18:59:05', 44952859, 'Xander', 'Nieves', NULL, '2002-09-14 17:08:54', 'Apdo.:678-212 Nunc C.', NULL, '', 100, NULL, NULL, NULL, 'Donec.consectetuer@mi.net', 'NUC20NJF0VU', 0, '0', '0'),
(43, 'V0K7V6', '2017-05-10 11:29:25', 26985730, 'Camden', 'Rowe', NULL, '2000-04-29 07:30:14', '6700 Molestie Av.', NULL, 'Sr.', 100, NULL, NULL, NULL, 'sapien@augueeu.com', 'SMN87YOX7ET', 0, '0', '0'),
(44, 'U6F4H4', '2017-09-08 23:08:10', 39560598, 'Yoshi', 'Grimes', NULL, '2004-12-01 11:06:06', 'Apdo.:197-2177 Natoque Carretera', NULL, 'Sra.', 100, NULL, NULL, NULL, 'consectetuer.mauris@eliteratvitae.com', 'QLF89FKU0WI', 0, '0', '0'),
(45, 'K1L4J0', '2017-01-09 12:21:36', 32656243, 'Harper', 'Greene', NULL, '2000-01-10 02:33:14', '423-4460 Mauris Carretera', NULL, 'Dr.', 100, NULL, NULL, NULL, 'Nullam.suscipit.est@utipsumac.edu', 'BBB74FLH6UK', 0, '0', '0'),
(46, 'M6W6M6', '2016-12-19 17:06:27', 6047331, 'Rafael', 'Fields', NULL, '2001-04-01 23:13:51', 'Apartado núm.: 780, 5865 Tristique Av.', NULL, 'Srta.', 100, NULL, NULL, NULL, 'Integer@penatibusetmagnis.org', 'MBD83EFX4CK', 0, '0', '0'),
(47, 'R5V8J2', '2017-01-07 15:24:47', 36032694, 'Adrian', 'Perry', NULL, '2002-10-01 01:09:01', '4141 Magna C.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'velit.Cras@adlitora.com', 'AJX97QNE6EH', 0, '0', '0'),
(48, 'E9F9X2', '2017-07-02 07:19:07', 44802425, 'Sybill', 'Newton', NULL, '2001-06-26 22:57:49', '4361 Libero. Carretera', NULL, 'Sr.', 100, NULL, NULL, NULL, 'Nullam.vitae.diam@auctorullamcorpernisl.org', 'DMX84CAE3WG', 0, '0', '0'),
(49, 'H9A0L8', '2017-03-26 21:20:41', 15629327, 'Keely', 'Ramos', NULL, '2002-11-11 17:19:51', '180-8312 Nisl. Ctra.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'aliquet@sagittisaugue.org', 'PKF03IUU5OZ', 0, '0', '0'),
(50, 'R7R8P2', '2017-11-19 20:13:44', 14897763, 'Dalton', 'Mcfadden', NULL, '2000-08-24 08:46:48', 'Apartado núm.: 138, 8465 Vitae Carretera', NULL, 'Dr.', 100, NULL, NULL, NULL, 'ipsum.Donec.sollicitudin@vulputate.co.uk', 'WCK40CLT7NN', 0, '0', '0'),
(51, 'E9D5D4', '2017-02-24 23:53:46', 16026405, 'Damian', 'Nixon', NULL, '2004-06-28 03:54:11', 'Apdo.:539-5084 Lorem Avenida', NULL, '', 100, NULL, NULL, NULL, 'elementum.dui@vitaesodalesnisi.net', 'DMF27XDA9UF', 0, '0', '0'),
(52, 'N0D6Y7', '2017-02-22 21:54:19', 34323072, 'Jared', 'Stuart', NULL, '2002-11-30 00:36:21', '876-2252 Felis. Avda.', NULL, 'Srta.', 96, NULL, NULL, NULL, 'dapibus.id@semPellentesque.co.uk', 'ZZR32DXR0OL', 0, '0', '0'),
(53, 'I8K1P1', '2017-10-09 06:17:13', 7418427, 'Owen', 'Colon', NULL, '2003-06-30 01:15:20', '759-8361 Eu ', NULL, 'Srta.', 91, NULL, NULL, NULL, 'In@leoVivamus.ca', 'CVD93DIG9JT', 0, '0', '0'),
(54, 'N1K0K9', '2017-06-28 13:52:48', 26574602, 'Baker', 'Nunez', NULL, '2003-07-11 21:31:55', 'Apdo.:291-629 Nec ', NULL, 'Srta.', 94, NULL, NULL, NULL, 'egestas@Fuscefeugiat.co.uk', 'GSU75AZO6VL', 0, '0', '0'),
(55, 'R0L9H2', '2017-07-13 20:48:48', 15749558, 'Lawrence', 'Donovan', NULL, '2002-12-31 16:22:56', '388-5094 Dictum Calle', NULL, 'Srta.', 93, NULL, NULL, NULL, 'sit@eutellus.ca', 'TTO86VIS8RU', 0, '0', '0'),
(56, 'D7U3C4', '2017-05-03 05:19:11', 41587843, 'Desiree', 'Barnett', NULL, '2000-01-21 04:59:05', '8032 Sed, Calle', NULL, 'Dr.', 98, NULL, NULL, NULL, 'non.lorem@congueelit.co.uk', 'OYO02HWF6XY', 0, '0', '0'),
(57, 'R8Q1H6', '2017-01-23 21:36:49', 46685602, 'Leila', 'Lewis', NULL, '2004-07-30 09:09:07', 'Apdo.:154-5777 Dui, Calle', NULL, 'Sra.', 94, NULL, NULL, NULL, 'malesuada@sitamet.edu', 'RNY94IEF6AW', 0, '0', '0'),
(58, 'P0M7H5', '2017-04-08 00:49:36', 34324003, 'Signe', 'Kirkland', NULL, '2000-02-17 13:37:28', '902-8577 Risus. Ctra.', NULL, '', 91, NULL, NULL, NULL, 'consequat.nec@pede.edu', 'ABN59HUG1UC', 0, '0', '0'),
(59, 'K6P9Y3', '2016-12-07 07:48:40', 10576840, 'Neville', 'Mcdonald', NULL, '2001-02-04 02:31:40', 'Apartado núm.: 705, 8971 Nibh Av.', NULL, 'Srta.', 99, NULL, NULL, NULL, 'nunc.In.at@lectussit.net', 'EZL93ZPI9FV', 0, '0', '0'),
(60, 'F1T4X1', '2017-03-25 14:39:15', 5634111, 'Graham', 'Meyers', NULL, '2000-11-05 22:47:13', 'Apartado núm.: 980, 1833 Interdum C.', NULL, 'Dr.', 95, NULL, NULL, NULL, 'egestas@elementum.net', 'RST96VAX6UE', 0, '0', '0'),
(61, 'P6O0C8', '2017-05-27 09:32:04', 46044622, 'Sebastian', 'Stanley', NULL, '2002-10-24 09:12:07', '8090 Tincidunt Av.', NULL, 'Srta.', 100, NULL, NULL, NULL, 'consequat.auctor.nunc@accumsan.net', 'FUK81QTO1FM', 0, '0', '0'),
(62, 'R9I4X4', '2017-04-18 04:49:04', 5532584, 'Gannon', 'Barnett', NULL, '2000-08-13 03:08:57', 'Apdo.:213-499 Sit Ctra.', NULL, '', 97, NULL, NULL, NULL, 'eu.arcu.Morbi@facilisis.co.uk', 'MYH54XAD0AJ', 0, '0', '0'),
(63, 'I5A8Q1', '2017-04-18 22:57:42', 37316621, 'Uma', 'Mccall', NULL, '2001-07-13 02:25:13', 'Apartado núm.: 244, 7080 Varius. Avenida', NULL, 'Sra.', 96, NULL, NULL, NULL, 'lacus.Ut.nec@Maecenasmalesuada.ca', 'XAU87KTZ7CS', 0, '0', '0'),
(64, 'T1N6R7', '2017-07-24 11:53:48', 45402183, 'Caleb', 'Walsh', NULL, '2003-09-12 21:47:16', '9526 Sapien. C/', NULL, 'Sra.', 98, NULL, NULL, NULL, 'egestas.blandit@purus.com', 'FUH84VBK7EO', 0, '0', '0'),
(65, 'A2I8W0', '2017-06-01 01:16:58', 29259133, 'Hillary', 'Carr', NULL, '2000-10-19 01:33:21', 'Apartado núm.: 557, 6203 Bibendum Carretera', NULL, 'Srta.', 96, NULL, NULL, NULL, 'sollicitudin.a.malesuada@eget.co.uk', 'AIH34WOU2PY', 0, '0', '0'),
(66, 'W0E2L2', '2017-06-22 02:06:52', 23673062, 'Ferris', 'Jones', NULL, '2001-04-28 16:59:03', 'Apartado núm.: 636, 6624 Ornare. Avda.', NULL, 'Sra.', 94, NULL, NULL, NULL, 'erat.volutpat.Nulla@dolorelit.net', 'NRA35JHJ2NF', 0, '0', '0'),
(67, 'Q0M6S3', '2017-02-27 19:10:18', 21932224, 'Autumn', 'Ryan', NULL, '2004-05-23 08:12:26', '295-3884 Vel Avda.', NULL, 'Dr.', 98, NULL, NULL, NULL, 'mi.ac@sedhendrerit.org', 'PRN40XLH5RS', 0, '0', '0'),
(68, 'X9K4O2', '2017-04-22 14:36:00', 29503177, 'Mia', 'Odonnell', NULL, '2001-01-08 10:21:24', 'Apartado núm.: 923, 6424 Lorem, Avda.', NULL, 'Srta.', 91, NULL, NULL, NULL, 'libero.Proin@purusin.edu', 'PNN15VSM2AY', 0, '0', '0'),
(69, 'E8X6W1', '2017-09-28 12:22:16', 47671477, 'Mara', 'Reed', NULL, '2001-05-15 12:26:44', '790-4402 Orci Avenida', NULL, 'Srta.', 94, NULL, NULL, NULL, 'ligula@nullaCraseu.edu', 'IZR31ZXK4WR', 0, '0', '0'),
(70, 'N3G7R9', '2017-11-20 06:56:07', 38403759, 'Felix', 'Brady', NULL, '2003-02-12 11:33:10', '8924 Nisi. C.', NULL, 'Sra.', 97, NULL, NULL, NULL, 'sit.amet.luctus@Maecenasmifelis.ca', 'LGW61XKN8EI', 0, '0', '0'),
(71, 'F1W3H4', '2016-11-27 12:38:51', 42066812, 'Audrey', 'Lloyd', NULL, '2004-03-14 08:26:04', '5257 Et Avenida', NULL, 'Sra.', 92, NULL, NULL, NULL, 'laoreet@lobortis.com', 'MKA74EEZ6MU', 0, '0', '0'),
(72, 'H5K5J7', '2017-08-14 13:34:18', 39135430, 'Brooke', 'Wong', NULL, '2004-10-08 11:11:20', 'Apartado núm.: 632, 3522 Feugiat ', NULL, 'Srta.', 91, NULL, NULL, NULL, 'Cras.eu.tellus@natoquepenatibuset.ca', 'PTF52LRK1KW', 0, '0', '0'),
(73, 'A7T9A7', '2016-12-16 14:02:36', 38490158, 'Heather', 'Riley', NULL, '2001-02-11 18:11:12', 'Apdo.:883-3471 Etiam Avda.', NULL, 'Sra.', 96, NULL, NULL, NULL, 'montes.nascetur.ridiculus@lacus.org', 'NKP29NJG8CD', 0, '0', '0'),
(74, 'A6G0Y8', '2017-01-15 15:38:15', 22458762, 'Scott', 'Wagner', NULL, '2002-12-24 18:57:43', '9424 Tempor ', NULL, 'Srta.', 99, NULL, NULL, NULL, 'tristique.pellentesque@Maurisvel.net', 'LEZ48PNH5CR', 0, '0', '0'),
(75, 'P4X9S2', '2017-09-04 04:46:58', 34250368, 'Rafael', 'Knapp', NULL, '2005-01-28 16:55:04', '302-8716 Sem Av.', NULL, 'Srta.', 97, NULL, NULL, NULL, 'eu.metus@egetipsum.org', 'TOV86GYO4GH', 0, '0', '0'),
(76, 'G5B1O0', '2017-07-24 07:19:10', 30437248, 'Deacon', 'Reeves', NULL, '2003-06-13 10:37:28', 'Apdo.:472-1710 Interdum C/', NULL, '', 98, NULL, NULL, NULL, 'Cras.dictum.ultricies@porttitorscelerisqueneq', 'IAO31HKF5SA', 0, '0', '0'),
(77, 'X0T5N6', '2017-04-13 12:32:11', 26697643, 'Kelsie', 'Warner', NULL, '2002-09-15 10:07:06', '5213 Sed C/', NULL, '', 91, NULL, NULL, NULL, 'dui.Fusce@nec.co.uk', 'YZD07HOH0MO', 0, '0', '0'),
(78, 'T0H0V9', '2017-02-20 12:12:38', 16419947, 'Caryn', 'Mccarthy', NULL, '2004-07-20 21:12:57', 'Apartado núm.: 993, 3150 Et ', NULL, 'Sr.', 99, NULL, NULL, NULL, 'Cum.sociis.natoque@Donecporttitor.edu', 'GKU69HQD0VR', 0, '0', '0'),
(79, 'T8D8O6', '2017-09-18 21:10:48', 26180169, 'Constance', 'Joseph', NULL, '2004-06-07 19:39:35', 'Apartado núm.: 189, 6742 Phasellus ', NULL, 'Sra.', 100, NULL, NULL, NULL, 'est.congue@tellus.ca', 'ISU17DQB5OT', 0, '0', '0'),
(80, 'K0F1D7', '2017-02-05 21:47:51', 18340162, 'Beck', 'Brock', NULL, '2004-06-11 01:30:44', 'Apartado núm.: 238, 1896 Vel, Ctra.', NULL, 'Sr.', 91, NULL, NULL, NULL, 'quam.a.felis@Integeraliquam.ca', 'HGV33UAD1UH', 0, '0', '0'),
(81, 'P2Z3W6', '2016-12-18 05:38:32', 16516795, 'Elijah', 'Cash', NULL, '2003-05-11 22:59:40', 'Apdo.:232-3713 Donec Av.', NULL, 'Dr.', 98, NULL, NULL, NULL, 'aliquam.iaculis.lacus@Nunclectus.org', 'UYL07YTQ9QY', 0, '0', '0'),
(82, 'W2P7Y5', '2017-03-19 17:40:01', 13440880, 'Cairo', 'Robinson', NULL, '2001-04-05 19:23:24', 'Apartado núm.: 768, 1142 Ligula. C.', NULL, 'Dr.', 92, NULL, NULL, NULL, 'in@Sedneque.net', 'DDK44NOJ9JU', 0, '0', '0'),
(83, 'V0B3W1', '2017-02-20 12:43:19', 36692365, 'Hanae', 'Mooney', NULL, '2004-10-14 22:31:42', 'Apartado núm.: 761, 1640 Feugiat Avenida', NULL, 'Dr.', 94, NULL, NULL, NULL, 'dis.parturient@urnaVivamusmolestie.org', 'GED17YPT8PZ', 0, '0', '0'),
(84, 'I8U2O2', '2017-07-11 10:18:18', 40983534, 'Jade', 'Finley', NULL, '2003-02-26 19:43:11', 'Apartado núm.: 436, 5228 Viverra. C/', NULL, '', 99, NULL, NULL, NULL, 'porta.elit.a@euneque.org', 'QGM27VSG1WQ', 0, '0', '0'),
(85, 'N4X8B1', '2017-05-12 10:26:49', 31094413, 'Vivian', 'Shepherd', NULL, '2003-06-19 14:34:07', '823-8193 Et ', NULL, 'Sra.', 99, NULL, NULL, NULL, 'iaculis@eu.ca', 'KTD37UAU4HP', 0, '0', '0'),
(86, 'E0B4P1', '2017-02-02 14:07:19', 37298501, 'Fredericka', 'Clemons', NULL, '2004-09-04 07:44:07', 'Apartado núm.: 951, 8314 Sapien. Ctra.', NULL, 'Dr.', 97, NULL, NULL, NULL, 'faucibus.id.libero@aliquetmagnaa.ca', 'GTN73ORU8EG', 0, '0', '0'),
(88, 'H4J2S5', '2017-08-09 00:39:59', 6427765, 'Kamal', 'Mullins', NULL, '2000-01-09 09:52:24', '2780 Libero C/', NULL, '', 98, NULL, NULL, NULL, 'Cras@litora.com', 'EUF66RSA1KM', 0, '0', '0'),
(89, 'T7F9R2', '2017-07-14 02:03:55', 28290099, 'Pandora', 'Nelson', NULL, '2002-02-23 09:35:42', 'Apartado núm.: 700, 406 Aenean Avenida', NULL, 'Sr.', 100, NULL, NULL, NULL, 'tempor.diam@Phasellusin.com', 'ZPH71KZP0RO', 0, '0', '0'),
(90, 'I8F2A0', '2017-10-02 16:26:31', 49547905, 'Dalton', 'Lindsey', NULL, '2003-07-01 12:17:27', '415-5981 Eu ', NULL, 'Srta.', 95, NULL, NULL, NULL, 'cursus.et@arcu.edu', 'YPS38WBZ0HQ', 0, '0', '0'),
(91, 'W8K8E0', '2017-10-29 01:22:31', 29006247, 'Aretha', 'Conway', NULL, '2000-02-21 12:24:50', 'Apdo.:707-8398 Lacinia Avda.', NULL, '', 92, NULL, NULL, NULL, 'nec.tellus@odioapurus.org', 'JYN22ZVO7BM', 0, '0', '0'),
(92, 'L2P9M8', '2017-05-30 11:36:29', 11003159, 'Dacey', 'Moran', NULL, '2002-11-29 05:34:07', '952-5067 Molestie Calle', NULL, 'Sr.', 93, NULL, NULL, NULL, 'bibendum.ullamcorper.Duis@enimCurabiturmassa.', 'RHO05QRL2ML', 0, '0', '0'),
(93, 'C7Y5Y0', '2017-09-28 13:24:50', 21423144, 'Ebony', 'Warner', NULL, '2003-03-21 00:17:11', '735-532 At, Carretera', NULL, 'Srta.', 98, NULL, NULL, NULL, 'tempor@lacusQuisqueimperdiet.co.uk', 'WZW66OCF1PM', 0, '0', '0'),
(94, 'U9N2X8', '2017-11-02 07:28:53', 13097892, 'Hanae', 'Webb', NULL, '2001-05-09 01:26:11', 'Apdo.:300-393 Elit, C/', NULL, 'Sra.', 96, NULL, NULL, NULL, 'diam.Duis.mi@necluctus.org', 'JVD87MCA9NR', 0, '0', '0'),
(95, 'G1U6J9', '2016-12-10 19:36:13', 41077107, 'Camden', 'Abbott', NULL, '2000-03-10 07:20:34', '897-1173 Cras C/', NULL, 'Srta.', 96, NULL, NULL, NULL, 'Morbi@ut.com', 'FQU49TDA4BT', 0, '0', '0'),
(96, 'F4H9R6', '2017-07-10 01:48:47', 32483143, 'Brian', 'Santana', NULL, '2001-02-02 10:39:28', 'Apdo.:553-1998 Facilisis Carretera', NULL, 'Sr.', 90, NULL, NULL, NULL, 'convallis.convallis.dolor@atiaculis.edu', 'TYH82YEF7PY', 0, '0', '0'),
(97, 'P9D5D5', '2017-08-23 06:03:33', 8729131, 'Daphne', 'Fowler', NULL, '2004-01-11 17:44:56', 'Apdo.:553-4624 Posuere Avda.', NULL, 'Sr.', 94, NULL, NULL, NULL, 'Cras.lorem@ametluctus.co.uk', 'PTT14ERJ9OT', 0, '0', '0'),
(98, 'E2P7R6', '2017-08-10 20:55:06', 28083360, 'Nerea', 'Bridges', NULL, '2004-07-03 03:17:36', 'Apartado núm.: 760, 9625 Ut C.', NULL, 'Dr.', 94, NULL, NULL, NULL, 'semper.erat.in@Nuncquisarcu.com', 'KFO89MEG6IK', 0, '0', '0'),
(99, 'B5I4P3', '2017-08-28 03:32:15', 40123309, 'Talon', 'Alexander', NULL, '2002-02-27 06:56:39', 'Apdo.:284-1693 Arcu Carretera', NULL, 'Sra.', 91, NULL, NULL, NULL, 'mi@ornare.co.uk', 'KJC42IFU1PH', 0, '0', '0'),
(100, 'E9F6M1', '2017-10-18 11:51:07', 35759016, 'Nigel', 'Buck', NULL, '2002-06-16 15:37:31', 'Apartado núm.: 800, 7919 Nec C.', NULL, 'Sr.', 99, NULL, NULL, NULL, 'Cras.eget@euismodurna.org', 'GRQ98PII9UD', 0, '0', '0'),
(101, 'S2F8H1', '2017-05-28 02:55:56', 45341096, 'Ebony', 'Montgomery', NULL, '2003-06-11 20:01:18', '9819 Pede. C.', NULL, 'Dr.', 90, NULL, NULL, NULL, 'Donec.tincidunt.Donec@auctorMauris.co.uk', 'WNE08PGQ2NP', 0, '0', '0'),
(102, 'R0U3A1', '2017-06-18 02:43:06', 48761924, 'Bree', 'Sosa', NULL, '2005-01-25 14:34:40', 'Apdo.:146-6743 Diam. ', NULL, '', 97, NULL, NULL, NULL, 'dui.nec@turpis.ca', 'UVB24LSW8RW', 0, '0', '0'),
(103, 'P7W3P6', '2017-08-04 18:45:03', 45084699, 'Julian', 'Little', NULL, '2002-07-13 00:14:38', 'Apartado núm.: 996, 5795 Faucibus Ctra.', NULL, 'Sra.', 100, NULL, NULL, NULL, 'metus.Aenean@urna.ca', 'FOS23BHO9ZD', 0, '0', '0'),
(104, 'I3S0U1', '2017-08-14 18:24:46', 36284901, 'Jade', 'Sparks', NULL, '2000-12-22 13:41:59', '858-246 Augue Calle', NULL, 'Sr.', 99, NULL, NULL, NULL, 'hendrerit.a.arcu@enimgravida.ca', 'AVZ43QPZ5GG', 0, '0', '0'),
(105, NULL, '2017-11-20 16:15:39', 2147483647, 'santos', 'jean', NULL, NULL, 'sdsds', 0, NULL, 0, NULL, NULL, NULL, 'jean', '1234', 0, '0', '0');

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
(1, '19172997', '0', '100', '2017-11-19 01:34:30'),
(2, '19172997', '1', '100', '2017-11-19 01:34:42'),
(3, '40770483', '0', '70', '2017-11-19 01:35:05'),
(4, '40770483', '0', '30', '2017-11-19 01:35:11'),
(5, '19172997', '0', '90', '2017-11-19 11:00:03'),
(6, '19172997', '0', '10', '2017-11-19 11:00:09'),
(7, '19172997', '1', '100', '2017-11-19 11:00:15'),
(8, '40770483', '0', '44', '2017-11-19 16:57:03'),
(9, '40770483', '0', '12', '2017-11-19 16:57:18'),
(10, '19172997', '0', '11', '2017-11-19 16:57:26'),
(11, '19172997', '0', '4', '2017-11-19 17:03:45'),
(12, '19172997', '0', '3', '2017-11-19 17:05:01');

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
(1, 'Historia', 'Historia'),
(2, 'Matematicas', 'Matematicas'),
(3, 'Español', 'Español'),
(4, 'Astronomía', 'Astronomía'),
(5, 'Quimica', 'Quimica'),
(6, 'Ed.Artistica', 'Ed.Artistica'),
(7, 'Fisica', 'Fisica'),
(8, 'Ingles ', 'Ingles '),
(9, 'Ed.Fisica', 'Ed.Fisica'),
(10, 'Ciencias Sociales', 'Ciencias Sociales'),
(11, 'Civica Y Etica', 'Civica Y Etica');

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
(1, '1', '2', '1', '1234', '40770483', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(2, '1', '2', '1', '1234', '40770483', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(3, '1', '2', '1', '1234', '24457663', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(4, '1', '2', '1', '1234', '24457663', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(5, '1', '2', '1', '1234', '38978564', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(6, '1', '2', '1', '1234', '38978564', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(7, '1', '2', '1', '1234', '48430187', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(8, '1', '2', '1', '1234', '48430187', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL),
(9, '1', '3', '1', '1234', '40770483', '2', '5', '5', '3.2', '6', '1.2000000000000002', '4.4', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(10, '1', '3', '1', '1234', '24457663', '4', '', '', 'NaN', '', '0', 'NaN', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(11, '1', '3', '1', '1234', '38978564', '3', '', '', 'NaN', '', '0', 'NaN', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL),
(12, '1', '3', '1', '1234', '48430187', '3', '', '', 'NaN', '', '0', 'NaN', '', '', '', 'NaN', '', '0', 'NaN', NULL, NULL, NULL);

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
(1, '19172997', '1', '8'),
(2, '48430187', '1', '1'),
(3, '40770483', '1', '1'),
(4, '24457663', '1', '1'),
(5, '38978564', '1', '1');

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
(1, '19172997', '1234', 'sdsddddddddddddddddd', '2017-11-19 11:10:27', 'FaltaJustificada');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padresfamilia`
--

CREATE TABLE `padresfamilia` (
  `id_PadresFamilia` int(11) NOT NULL,
  `ced_Madre` int(10) NOT NULL,
  `ced_Padre` int(10) NOT NULL,
  `ape_Madre` int(30) NOT NULL,
  `ape_Padre` int(30) NOT NULL,
  `nom_Madre` int(30) NOT NULL,
  `nom_Padre` int(30) NOT NULL,
  `telf_Madre` int(10) NOT NULL,
  `telf_Padre` int(10) NOT NULL,
  `dir_Madre` int(20) NOT NULL,
  `dir_Padre` int(20) NOT NULL,
  `ocu_Madre` int(20) NOT NULL,
  `ocu_Padre` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `estado1` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pensiones`
--

INSERT INTO `pensiones` (`idPenciones`, `id_estudiantes`, `valor_matricula`, `valor_pagado`, `mes_pagado`, `fecha`, `estado1`) VALUES
(1, '40770483', '100', '56', '0', NULL, NULL),
(2, '19172997', '20', '18', '0', NULL, NULL);

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

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`id_Representante`, `cedula_Representante`, `ape_Representante`, `nom_Representante`, `telf_Representante`, `correo_Representante`, `dir_Representante`, `ocu_Representante`) VALUES
(1, '3434343', 'hjhghgj', 'jhgjghjgj', '8799987', 'khkjhkhk', 'kjhkhhk', 'kjhkhkhhj');

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
(9, '19172997', 'ESTU001', 'ESTU001', 'Estudiante'),
(10, '987654321', 'ESTU002', 'ESTU002', 'Estudiante'),
(11, '121212', 'ESTU003', 'ESTU003', 'Estudiante'),
(12, '12225455', 'vestibulum.lorem@ridiculusmusDonec.com', 'BIO90TDA8AP', 'Estudiante'),
(13, '40770483', 'fermentum.vel.mauris@interdum.net', 'WAU74VEW4TF', 'Estudiante'),
(14, '24457663', 'magna.et@nonummy.net', 'QIC45YWD3HE', 'Estudiante'),
(15, '27800214', 'tellus.eu.augue@augueut.edu', 'MJV31STR6XY', 'Estudiante'),
(16, '38978564', 'natoque@consectetueradipiscing.ca', 'XAQ54IQH9QR', 'Estudiante'),
(17, '48430187', 'vitae@in.co.uk', 'NEO17CXY0YR', 'Estudiante'),
(18, '25829789', 'Sed.congue.elit@acorci.ca', 'AIY12QSF1HO', 'Estudiante'),
(19, '15742561', 'hendrerit.id.ante@acnullaIn.ca', 'QJX65BCJ5TS', 'Estudiante'),
(20, '41486812', 'a.enim@molestie.co.uk', 'GZA39EVK6AY', 'Estudiante'),
(21, '21442768', 'pellentesque@Curabiturvellectus.com', 'FUG73RZH2NJ', 'Estudiante'),
(22, '30379226', 'imperdiet.nec@Donec.net', 'FDO93WYY7WC', 'Estudiante'),
(23, '11282247', 'Quisque.ac.libero@Etiam.net', 'SYQ26RQF2KH', 'Estudiante'),
(24, '8229687', 'ac.facilisis@Curabiturut.net', 'RUV73IOI4AR', 'Estudiante'),
(25, '5783821', 'Lorem.ipsum@Crasdictum.com', 'OKP00XOW3KY', 'Estudiante'),
(26, '7596802', 'tellus@bibendumDonecfelis.edu', 'LBQ89LPV4FN', 'Estudiante'),
(27, '37287378', 'luctus.aliquet@faucibuslectusa.ca', 'VGX99WVT1QM', 'Estudiante'),
(28, '39781466', 'lorem.luctus@sociisnatoquepenatibus.net', 'LKA78RKD7HS', 'Estudiante'),
(29, '29740835', 'facilisis.lorem@Proinegetodio.com', 'NHS83WHA1HA', 'Estudiante'),
(30, '7917102', 'id@sodalesnisi.edu', 'BMT52BXO8JW', 'Estudiante'),
(31, '47111202', 'elit.Curabitur@diam.org', 'EBN82TEH2OQ', 'Estudiante'),
(32, '19695162', 'bibendum.fermentum.metus@Morbiquis.co.uk', 'AYJ72FRP5UB', 'Estudiante'),
(33, '27766414', 'Integer@rutrum.org', 'TWM28BIB2WS', 'Estudiante'),
(34, '48985977', 'eget@maurisrhoncusid.ca', 'RVH78GPQ6CU', 'Estudiante'),
(35, '47875959', 'ipsum@inhendreritconsectetuer.org', 'BTC21GWC6KO', 'Estudiante'),
(36, '13860412', 'convallis@pede.com', 'TDS15PUS9MW', 'Estudiante'),
(37, '46249006', 'diam@nequeSedeget.co.uk', 'ZPP77AXD1VK', 'Estudiante'),
(38, '48967767', 'et@ultricesaauctor.ca', 'MHL65ZZA9WC', 'Estudiante'),
(39, '30474384', 'ut.sem@nequesed.ca', 'UIR47AIW4RK', 'Estudiante'),
(40, '42120388', 'eget@Donectempor.edu', 'LYC45SZL7IC', 'Estudiante'),
(41, '18771049', 'cursus@auctorquistristique.co.uk', 'UWA12FHI2HQ', 'Estudiante'),
(42, '14124832', 'parturient@egestas.org', 'WJA44EJF7QJ', 'Estudiante'),
(43, '21725684', 'non.feugiat@Phasellusfermentum.org', 'PXB18GSE7GU', 'Estudiante'),
(44, '16697886', 'tincidunt.pede@Suspendisse.com', 'IKP65NFC5RH', 'Estudiante'),
(45, '27945865', 'vulputate@laciniaatiaculis.ca', 'MGY69OGH7ZD', 'Estudiante'),
(46, '32861817', 'lobortis@rutrumFusce.edu', 'XMU59CTA9IP', 'Estudiante'),
(47, '33379449', 'sit.amet@vestibulumloremsit.ca', 'YXO49KJP1NR', 'Estudiante'),
(48, '33408764', 'eget.varius@uterat.edu', 'ZRO39MBZ3RR', 'Estudiante'),
(49, '44952859', 'Donec.consectetuer@mi.net', 'NUC20NJF0VU', 'Estudiante'),
(50, '26985730', 'sapien@augueeu.com', 'SMN87YOX7ET', 'Estudiante'),
(51, '39560598', 'consectetuer.mauris@eliteratvitae.com', 'QLF89FKU0WI', 'Estudiante'),
(52, '32656243', 'Nullam.suscipit.est@utipsumac.edu', 'BBB74FLH6UK', 'Estudiante'),
(53, '6047331', 'Integer@penatibusetmagnis.org', 'MBD83EFX4CK', 'Estudiante'),
(54, '36032694', 'velit.Cras@adlitora.com', 'AJX97QNE6EH', 'Estudiante'),
(55, '44802425', 'Nullam.vitae.diam@auctorullamcorpernisl.org', 'DMX84CAE3WG', 'Estudiante'),
(56, '15629327', 'aliquet@sagittisaugue.org', 'PKF03IUU5OZ', 'Estudiante'),
(57, '14897763', 'ipsum.Donec.sollicitudin@vulputate.co.uk', 'WCK40CLT7NN', 'Estudiante'),
(58, '16026405', 'elementum.dui@vitaesodalesnisi.net', 'DMF27XDA9UF', 'Estudiante'),
(59, '34323072', 'dapibus.id@semPellentesque.co.uk', 'ZZR32DXR0OL', 'Estudiante'),
(60, '7418427', 'In@leoVivamus.ca', 'CVD93DIG9JT', 'Estudiante'),
(61, '26574602', 'egestas@Fuscefeugiat.co.uk', 'GSU75AZO6VL', 'Estudiante'),
(62, '15749558', 'sit@eutellus.ca', 'TTO86VIS8RU', 'Estudiante'),
(63, '41587843', 'non.lorem@congueelit.co.uk', 'OYO02HWF6XY', 'Estudiante'),
(64, '46685602', 'malesuada@sitamet.edu', 'RNY94IEF6AW', 'Estudiante'),
(65, '34324003', 'consequat.nec@pede.edu', 'ABN59HUG1UC', 'Estudiante'),
(66, '10576840', 'nunc.In.at@lectussit.net', 'EZL93ZPI9FV', 'Estudiante'),
(67, '5634111', 'egestas@elementum.net', 'RST96VAX6UE', 'Estudiante'),
(68, '46044622', 'consequat.auctor.nunc@accumsan.net', 'FUK81QTO1FM', 'Estudiante'),
(69, '5532584', 'eu.arcu.Morbi@facilisis.co.uk', 'MYH54XAD0AJ', 'Estudiante'),
(70, '37316621', 'lacus.Ut.nec@Maecenasmalesuada.ca', 'XAU87KTZ7CS', 'Estudiante'),
(71, '45402183', 'egestas.blandit@purus.com', 'FUH84VBK7EO', 'Estudiante'),
(72, '29259133', 'sollicitudin.a.malesuada@eget.co.uk', 'AIH34WOU2PY', 'Estudiante'),
(73, '23673062', 'erat.volutpat.Nulla@dolorelit.net', 'NRA35JHJ2NF', 'Estudiante'),
(74, '21932224', 'mi.ac@sedhendrerit.org', 'PRN40XLH5RS', 'Estudiante'),
(75, '29503177', 'libero.Proin@purusin.edu', 'PNN15VSM2AY', 'Estudiante'),
(76, '47671477', 'ligula@nullaCraseu.edu', 'IZR31ZXK4WR', 'Estudiante'),
(77, '38403759', 'sit.amet.luctus@Maecenasmifelis.ca', 'LGW61XKN8EI', 'Estudiante'),
(78, '42066812', 'laoreet@lobortis.com', 'MKA74EEZ6MU', 'Estudiante'),
(79, '39135430', 'Cras.eu.tellus@natoquepenatibuset.ca', 'PTF52LRK1KW', 'Estudiante'),
(80, '38490158', 'montes.nascetur.ridiculus@lacus.org', 'NKP29NJG8CD', 'Estudiante'),
(81, '22458762', 'tristique.pellentesque@Maurisvel.net', 'LEZ48PNH5CR', 'Estudiante'),
(82, '34250368', 'eu.metus@egetipsum.org', 'TOV86GYO4GH', 'Estudiante'),
(83, '30437248', 'Cras.dictum.ultricies@porttitorscelerisqueneq', 'IAO31HKF5SA', 'Estudiante'),
(84, '26697643', 'dui.Fusce@nec.co.uk', 'YZD07HOH0MO', 'Estudiante'),
(85, '16419947', 'Cum.sociis.natoque@Donecporttitor.edu', 'GKU69HQD0VR', 'Estudiante'),
(86, '26180169', 'est.congue@tellus.ca', 'ISU17DQB5OT', 'Estudiante'),
(87, '18340162', 'quam.a.felis@Integeraliquam.ca', 'HGV33UAD1UH', 'Estudiante'),
(88, '16516795', 'aliquam.iaculis.lacus@Nunclectus.org', 'UYL07YTQ9QY', 'Estudiante'),
(89, '13440880', 'in@Sedneque.net', 'DDK44NOJ9JU', 'Estudiante'),
(90, '36692365', 'dis.parturient@urnaVivamusmolestie.org', 'GED17YPT8PZ', 'Estudiante'),
(91, '40983534', 'porta.elit.a@euneque.org', 'QGM27VSG1WQ', 'Estudiante'),
(92, '31094413', 'iaculis@eu.ca', 'KTD37UAU4HP', 'Estudiante'),
(93, '37298501', 'faucibus.id.libero@aliquetmagnaa.ca', 'GTN73ORU8EG', 'Estudiante'),
(94, '37329784', 'a.enim.Suspendisse@sit.org', 'JNI89MLR6NF', 'Estudiante'),
(95, '6427765', 'Cras@litora.com', 'EUF66RSA1KM', 'Estudiante'),
(96, '28290099', 'tempor.diam@Phasellusin.com', 'ZPH71KZP0RO', 'Estudiante'),
(97, '49547905', 'cursus.et@arcu.edu', 'YPS38WBZ0HQ', 'Estudiante'),
(98, '29006247', 'nec.tellus@odioapurus.org', 'JYN22ZVO7BM', 'Estudiante'),
(99, '11003159', 'bibendum.ullamcorper.Duis@enimCurabiturmassa.', 'RHO05QRL2ML', 'Estudiante'),
(100, '21423144', 'tempor@lacusQuisqueimperdiet.co.uk', 'WZW66OCF1PM', 'Estudiante'),
(101, '13097892', 'diam.Duis.mi@necluctus.org', 'JVD87MCA9NR', 'Estudiante'),
(102, '41077107', 'Morbi@ut.com', 'FQU49TDA4BT', 'Estudiante'),
(103, '32483143', 'convallis.convallis.dolor@atiaculis.edu', 'TYH82YEF7PY', 'Estudiante'),
(104, '8729131', 'Cras.lorem@ametluctus.co.uk', 'PTT14ERJ9OT', 'Estudiante'),
(105, '28083360', 'semper.erat.in@Nuncquisarcu.com', 'KFO89MEG6IK', 'Estudiante'),
(106, '40123309', 'mi@ornare.co.uk', 'KJC42IFU1PH', 'Estudiante'),
(107, '35759016', 'Cras.eget@euismodurna.org', 'GRQ98PII9UD', 'Estudiante'),
(108, '45341096', 'Donec.tincidunt.Donec@auctorMauris.co.uk', 'WNE08PGQ2NP', 'Estudiante'),
(109, '48761924', 'dui.nec@turpis.ca', 'UVB24LSW8RW', 'Estudiante'),
(110, '45084699', 'metus.Aenean@urna.ca', 'FOS23BHO9ZD', 'Estudiante'),
(111, '36284901', 'hendrerit.a.arcu@enimgravida.ca', 'AVZ43QPZ5GG', 'Estudiante'),
(139, '1234', 'ass', 'ass', 'Profesor'),
(140, '21733479', '274915198', '381506500', 'Profesor'),
(141, '50177821', '470194861', '151420718', 'Profesor'),
(142, '17460730', '504610122', '388869760', 'Profesor'),
(143, '21004510', '364063602', '002301190', 'Profesor'),
(144, '35445327', '610000374', '372205831', 'Profesor'),
(145, '35778074', '255827511', '009957614', 'Profesor'),
(146, '20149423', '360806319', '338729965', 'Profesor'),
(147, '16466071', '549194249', '852177963', 'Profesor'),
(148, '32838665', '075432708', '635346364', 'Profesor'),
(149, '38904557', '244057691', '494683691', 'Profesor'),
(150, '43887296', '449356112', '738688787', 'Profesor'),
(151, '14197764', '752598904', '693771677', 'Profesor'),
(152, '46986424', '034490284', '378958912', 'Profesor'),
(153, '12314380', '419192158', '539023705', 'Profesor'),
(154, '29016345', '235941531', '689065878', 'Profesor'),
(155, '43815371', '328900576', '606101392', 'Profesor'),
(156, '19641384', '064408883', '431982602', 'Profesor'),
(157, '48360294', '721996106', '422770313', 'Profesor'),
(158, '21116280', '134873686', '780212650', 'Profesor'),
(159, '41194345', '570729822', '321298051', 'Profesor'),
(160, '657577656756', 'jean', '1234', 'estudiante');

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
  ADD PRIMARY KEY (`id_curso_tutor`);

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
-- Indices de la tabla `padresfamilia`
--
ALTER TABLE `padresfamilia`
  ADD PRIMARY KEY (`id_PadresFamilia`);

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
  MODIFY `id_Asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Cursos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `curso_tutor`
--
ALTER TABLE `curso_tutor`
  MODIFY `id_curso_tutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `directivo`
--
ALTER TABLE `directivo`
  MODIFY `id_Directivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_Docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT de la tabla `historial_pagos`
--
ALTER TABLE `historial_pagos`
  MODIFY `idhistorial_pagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `lectivo`
--
ALTER TABLE `lectivo`
  MODIFY `idLectivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_Materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `materiasnotas`
--
ALTER TABLE `materiasnotas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `observacioncurso`
--
ALTER TABLE `observacioncurso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `padresfamilia`
--
ALTER TABLE `padresfamilia`
  MODIFY `id_PadresFamilia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pensiones`
--
ALTER TABLE `pensiones`
  MODIFY `idPenciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
