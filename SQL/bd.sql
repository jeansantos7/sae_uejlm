-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: bd_sae
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asignacion`
--

DROP TABLE IF EXISTS `asignacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asignacion` (
  `id_Asignacion` int(11) NOT NULL AUTO_INCREMENT,
  `id_docente_Asignacion` varchar(45) DEFAULT NULL,
  `id_materias_Asignacion` varchar(45) DEFAULT NULL,
  `id_curso_Asignacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Asignacion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignacion`
--

LOCK TABLES `asignacion` WRITE;
/*!40000 ALTER TABLE `asignacion` DISABLE KEYS */;
INSERT INTO `asignacion` VALUES (1,'2312321','3','1');
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clone_docente`
--

DROP TABLE IF EXISTS `clone_docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clone_docente`
--

LOCK TABLES `clone_docente` WRITE;
/*!40000 ALTER TABLE `clone_docente` DISABLE KEYS */;
INSERT INTO `clone_docente` VALUES (1,1234,'Paz','Luis','09','legend@leg.com','av1','0000-00-00','ass','ass',1,'1234','1','1',1,'Historia','Historia',1,'Primero A','');
/*!40000 ALTER TABLE `clone_docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clone_estudiantes`
--

DROP TABLE IF EXISTS `clone_estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clone_estudiantes`
--

LOCK TABLES `clone_estudiantes` WRITE;
/*!40000 ALTER TABLE `clone_estudiantes` DISABLE KEYS */;
INSERT INTO `clone_estudiantes` VALUES (5,'F3X8M6','2017-11-15 09:47:09',19172997,'Charde','Riley','2002-05-31 05:59:53','Apartado núm.: 332, 7778 Ornare ',NULL,'Sr.',100,'vestibulum.lorem@ridiculusmusDonec.com','BIO90TDA8AP',0,'1','0',1,'19172997','1','1',1,'Primero A','',1,'Historia','Historia',1,1234,'Paz','Luis','09','legend@leg.com','av1','0000-00-00','ass','ass',1,'1','1','1','1234','19172997','10','9','9','7.466666666666668','9','1.8','9.266666666666667','9','9','9','7.2','9','9','9',NULL,NULL,NULL);
/*!40000 ALTER TABLE `clone_estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clone_pensiones`
--

DROP TABLE IF EXISTS `clone_pensiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clone_pensiones`
--

LOCK TABLES `clone_pensiones` WRITE;
/*!40000 ALTER TABLE `clone_pensiones` DISABLE KEYS */;
INSERT INTO `clone_pensiones` VALUES (5,'F3X8M6','2017-11-15 09:47:09',19172997,'Charde','Riley','2002-05-31 05:59:53','Apartado núm.: 332, 7778 Ornare ',NULL,'Sr.',100,'vestibulum.lorem@ridiculusmusDonec.com','BIO90TDA8AP',0,'0','0',1,'19172997','100','100','0',NULL,NULL),(5,'F3X8M6','2017-11-15 09:47:09',19172997,'Charde','Riley','2002-05-31 05:59:53','Apartado núm.: 332, 7778 Ornare ',NULL,'Sr.',100,'vestibulum.lorem@ridiculusmusDonec.com','BIO90TDA8AP',0,'0','0',2,'19172997','100','100','1',NULL,NULL);
/*!40000 ALTER TABLE `clone_pensiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clone_tutoria`
--

DROP TABLE IF EXISTS `clone_tutoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clone_tutoria`
--

LOCK TABLES `clone_tutoria` WRITE;
/*!40000 ALTER TABLE `clone_tutoria` DISABLE KEYS */;
INSERT INTO `clone_tutoria` VALUES (1,1234,'Paz','Luis','09','legend@leg.com','av1','0000-00-00','ass','ass',1,'Primero A','',1,'1','1234','FaltaInjustificada','ASASA NO VINOOOO','2017-11-19 11:10:45',1,'1234','1');
/*!40000 ALTER TABLE `clone_tutoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso_tutor`
--

DROP TABLE IF EXISTS `curso_tutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curso_tutor` (
  `id_curso_tutor` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_Curso_Tutor` varchar(45) DEFAULT NULL,
  `curso_Curso_Tutor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_curso_tutor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso_tutor`
--

LOCK TABLES `curso_tutor` WRITE;
/*!40000 ALTER TABLE `curso_tutor` DISABLE KEYS */;
INSERT INTO `curso_tutor` VALUES (1,'2312321','2');
/*!40000 ALTER TABLE `curso_tutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id_Cursos` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Cursos` varchar(45) DEFAULT NULL,
  `nivel_Cursos` varchar(30) NOT NULL,
  PRIMARY KEY (`id_Cursos`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'primero de basica','E.G .B'),(2,'Segundo','B.G.U Tecnico');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directivo`
--

DROP TABLE IF EXISTS `directivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directivo` (
  `id_Directivo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_Directivo` varchar(45) DEFAULT NULL,
  `ape_Directivo` varchar(45) DEFAULT NULL,
  `nom_Directivo` varchar(45) DEFAULT NULL,
  `telf_Directivo` varchar(45) DEFAULT NULL,
  `correo_Directivo` varchar(45) DEFAULT NULL,
  `direc_Directivo` varchar(45) DEFAULT NULL,
  `fech_nac_Directivo` varchar(45) DEFAULT NULL,
  `user_Directivo` varchar(45) DEFAULT NULL,
  `pass_Directivo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Directivo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directivo`
--

LOCK TABLES `directivo` WRITE;
/*!40000 ALTER TABLE `directivo` DISABLE KEYS */;
INSERT INTO `directivo` VALUES (2,'0987654321673','sssssssssss','ssssssssssss','0999','sd@s.com','dddddd','2017-10-05','as','as'),(3,'123456765432','ASASASASAS','ASASASAS','ASASAS','ASASAS@c.c','ASASASAS','','SASASssss','ASASASAS');
/*!40000 ALTER TABLE `directivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `docente` (
  `id_Docente` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_Docente` int(10) DEFAULT NULL,
  `ape_Docente` varchar(45) DEFAULT NULL,
  `nom_Docente` varchar(45) DEFAULT NULL,
  `telf_Docente` varchar(45) DEFAULT NULL,
  `correo_Docente` varchar(45) DEFAULT NULL,
  `direc_Docente` varchar(45) DEFAULT NULL,
  `fech_nac_Docente` date DEFAULT NULL,
  `user_Docente` varchar(45) DEFAULT NULL,
  `pass_Docente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Docente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,2312321,'moya','malo','8979879','jkhkhkhkj','hkhkhkhkj','2017-11-01','uuu','777');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante` (
  `id_Estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `fech_matricula_Estudiante` datetime DEFAULT NULL,
  `cedula_Estudiante` varchar(10) DEFAULT NULL,
  `ape_Estudiante` varchar(45) DEFAULT NULL,
  `nom_Estudiante` varchar(45) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `fech_nac_Estudiante` varchar(45) DEFAULT NULL,
  `dir_Estudiante` varchar(45) DEFAULT NULL,
  `carnet_Estudiante` int(20) DEFAULT NULL,
  `pension_Estudiante` int(11) NOT NULL,
  `idRepresentante` int(10) DEFAULT NULL,
  `idMadre` int(10) DEFAULT NULL,
  `idPadre` int(10) DEFAULT NULL,
  `user_Estudiante` varchar(45) DEFAULT NULL,
  `pass_Estudiante` varchar(45) DEFAULT NULL,
  `Estado` varchar(45) DEFAULT '0',
  `Estadonotas` varchar(45) DEFAULT '0',
  PRIMARY KEY (`id_Estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (5,'2017-11-24 12:43:58','77668768','olo','jhkhkj','Hombre','','hgjgjghj',0,77,3434343,454545454,777777777,'8884','uuu33','1','0');
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial_pagos`
--

DROP TABLE IF EXISTS `historial_pagos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial_pagos` (
  `idhistorial_pagos` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` varchar(45) DEFAULT NULL,
  `id_mes` varchar(45) DEFAULT NULL,
  `valor_del_pago` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`idhistorial_pagos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial_pagos`
--

LOCK TABLES `historial_pagos` WRITE;
/*!40000 ALTER TABLE `historial_pagos` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial_pagos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lectivo`
--

DROP TABLE IF EXISTS `lectivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lectivo` (
  `idLectivo` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idLectivo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lectivo`
--

LOCK TABLES `lectivo` WRITE;
/*!40000 ALTER TABLE `lectivo` DISABLE KEYS */;
INSERT INTO `lectivo` VALUES (1,'2017-2018');
/*!40000 ALTER TABLE `lectivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id_Materias` int(11) NOT NULL AUTO_INCREMENT,
  `nom_Materias` varchar(45) DEFAULT NULL,
  `nom_corto_Materias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Materias`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (2,'Matematicas','Matematicas'),(3,'Español','Español'),(4,'Astronomía','Astronomía'),(6,'Ed.Artistica','Ed.Artistica'),(7,'Fisica','Fisica'),(8,'Ingles ','Ingles '),(9,'Ed.Fisica','Ed.Fisica'),(10,'Ciencias Sociales','Ciencias Sociales'),(11,'Civica Y Etica','Civica Y Etica'),(12,'Lenguaje','Leng_8vo');
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiasnotas`
--

DROP TABLE IF EXISTS `materiasnotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasnotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `notaexa_MateriasNotas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasnotas`
--

LOCK TABLES `materiasnotas` WRITE;
/*!40000 ALTER TABLE `materiasnotas` DISABLE KEYS */;
INSERT INTO `materiasnotas` VALUES (1,'1','3','1','2312321','77668768','7','8','2.2','4.533333333333334','10','2','6.533333333333334','','','','NaN','','0','NaN',NULL,NULL,NULL);
/*!40000 ALTER TABLE `materiasnotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiasnotasquimetre`
--

DROP TABLE IF EXISTS `materiasnotasquimetre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasnotasquimetre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_estudiante_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_materia_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_curso_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `id_profesor_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `notaQ1_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `notaQ2_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  `total_materiasnotasQuimetre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasnotasquimetre`
--

LOCK TABLES `materiasnotasquimetre` WRITE;
/*!40000 ALTER TABLE `materiasnotasquimetre` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasnotasquimetre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiasnotasquimetrerecu`
--

DROP TABLE IF EXISTS `materiasnotasquimetrerecu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiasnotasquimetrerecu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedu_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `materia_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `curso_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `profe_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notarec_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notareme_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  `notaexa_materiasnotasquimetrerecu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiasnotasquimetrerecu`
--

LOCK TABLES `materiasnotasquimetrerecu` WRITE;
/*!40000 ALTER TABLE `materiasnotasquimetrerecu` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiasnotasquimetrerecu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula`
--

DROP TABLE IF EXISTS `matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_estudiante_matricula` varchar(45) DEFAULT NULL,
  `lectivo` varchar(45) DEFAULT NULL,
  `id_curso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMatricula`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
INSERT INTO `matricula` VALUES (1,'77668768','1','1');
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observacion`
--

DROP TABLE IF EXISTS `observacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_estu_observacion` varchar(45) DEFAULT NULL,
  `cedula_profe_observacion` varchar(45) DEFAULT NULL,
  `descr_observacion` longtext,
  `fecha` datetime DEFAULT CURRENT_TIMESTAMP,
  `Incidencia_observacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observacion`
--

LOCK TABLES `observacion` WRITE;
/*!40000 ALTER TABLE `observacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `observacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observacioncurso`
--

DROP TABLE IF EXISTS `observacioncurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observacioncurso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso_observacioncurso` varchar(45) DEFAULT NULL,
  `cedula_profesor_observacioncurso` varchar(45) DEFAULT NULL,
  `incidencia_observacioncurso` varchar(45) DEFAULT NULL,
  `observ_observacioncurso` longtext,
  `fecha_observacioncurso` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observacioncurso`
--

LOCK TABLES `observacioncurso` WRITE;
/*!40000 ALTER TABLE `observacioncurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `observacioncurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padresfamilia`
--

DROP TABLE IF EXISTS `padresfamilia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `padresfamilia` (
  `id_PadresFamilia` int(11) NOT NULL AUTO_INCREMENT,
  `ced_Madre` int(10) NOT NULL,
  `ced_Padre` int(10) NOT NULL,
  `ape_Madre` varchar(30) NOT NULL,
  `ape_Padre` varchar(30) NOT NULL,
  `nom_Madre` varchar(30) NOT NULL,
  `nom_Padre` varchar(30) NOT NULL,
  `telf_Madre` int(10) NOT NULL,
  `telf_Padre` int(10) NOT NULL,
  `dir_Madre` varchar(20) NOT NULL,
  `dir_Padre` varchar(20) NOT NULL,
  `ocu_Madre` varchar(20) NOT NULL,
  `ocu_Padre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_PadresFamilia`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padresfamilia`
--

LOCK TABLES `padresfamilia` WRITE;
/*!40000 ALTER TABLE `padresfamilia` DISABLE KEYS */;
INSERT INTO `padresfamilia` VALUES (1,666666666,777777777,'alcivar','santo','uuuuu','ooooooo',79897897,97979,'hjghjhgjh','gjhgj','hghjgj','nbmnbmn');
/*!40000 ALTER TABLE `padresfamilia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pensiones`
--

DROP TABLE IF EXISTS `pensiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pensiones` (
  `idPenciones` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiantes` varchar(45) DEFAULT NULL,
  `valor_matricula` varchar(45) DEFAULT NULL,
  `valor_pagado` varchar(45) DEFAULT NULL,
  `mes_pagado` varchar(45) DEFAULT NULL,
  `fecha` varchar(45) DEFAULT NULL,
  `estado1` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPenciones`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pensiones`
--

LOCK TABLES `pensiones` WRITE;
/*!40000 ALTER TABLE `pensiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `pensiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `representante`
--

DROP TABLE IF EXISTS `representante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `representante` (
  `id_Representante` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_Representante` varchar(45) DEFAULT NULL,
  `ape_Representante` varchar(45) DEFAULT NULL,
  `nom_Representante` varchar(45) DEFAULT NULL,
  `telf_Representante` varchar(45) DEFAULT NULL,
  `dir_Representante` varchar(45) DEFAULT NULL,
  `ocu_Representante` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Representante`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representante`
--

LOCK TABLES `representante` WRITE;
/*!40000 ALTER TABLE `representante` DISABLE KEYS */;
INSERT INTO `representante` VALUES (1,'3434343','hjhghgj','jhgjghjgj','8799987','kjhkhhk','kjhkhkhhj'),(2,'788787787','santos','juan','089080','kjhkhk','jkhkjhkkj');
/*!40000 ALTER TABLE `representante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secretaria`
--

DROP TABLE IF EXISTS `secretaria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `secretaria` (
  `id_Secretaria` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_Secretaria` int(10) DEFAULT NULL,
  `ape_Secretaria` varchar(45) DEFAULT NULL,
  `nom_Secretaria` varchar(45) DEFAULT NULL,
  `telf_Secretaria` varchar(45) DEFAULT NULL,
  `correo_Secretaria` varchar(45) DEFAULT NULL,
  `direc_Secretaria` varchar(45) DEFAULT NULL,
  `fech_nac_Secretaria` date DEFAULT NULL,
  `user_Secretaria` varchar(45) DEFAULT NULL,
  `pass_Secretaria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Secretaria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secretaria`
--

LOCK TABLES `secretaria` WRITE;
/*!40000 ALTER TABLE `secretaria` DISABLE KEYS */;
/*!40000 ALTER TABLE `secretaria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tabla_prueba`
--

DROP TABLE IF EXISTS `tabla_prueba`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tabla_prueba` (
  `columna` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tabla_prueba`
--

LOCK TABLES `tabla_prueba` WRITE;
/*!40000 ALTER TABLE `tabla_prueba` DISABLE KEYS */;
INSERT INTO `tabla_prueba` VALUES ('a1'),('a2'),('a3'),('a4'),('a5'),('a6'),('a7'),('a8'),('a9'),('a10'),('a11'),('a12');
/*!40000 ALTER TABLE `tabla_prueba` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `Contra` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'1111111111','directivo','12345','Directivo'),(2,'22222222222','docente','1234','Docente'),(3,'333333333333','secretaria','1234','Secretaria'),(4,'77668768','8844','uuu33','Estudiante'),(5,'0000000000','uuououo','hjkhkjh','Estudiante'),(6,'01111111','uiuui','9999','Estudiante'),(7,'8979879','uuu','888','Estudiante'),(8,'77668768','888','uuu','Estudiante'),(9,'2312321','uuu','777','Docente');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27 15:21:56
