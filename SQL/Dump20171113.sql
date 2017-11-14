CREATE DATABASE  IF NOT EXISTS `bd_sae` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bd_sae`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_sae
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
INSERT INTO `asignacion` VALUES (1,'1234','1','1');
/*!40000 ALTER TABLE `asignacion` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Primero A',''),(2,'Primero B',''),(3,'Primero C',''),(4,'Primero D',''),(5,'Segundo A',''),(6,'Segundo B',''),(7,'Segundo C',''),(8,'Segundo D',''),(9,'1ero',''),(10,'2do','B.G.U Ciencias');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` VALUES (1,1234,'Paz','Luis','09','legend@leg.com','av1','0000-00-00','ass','ass');
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
  PRIMARY KEY (`id_Estudiante`),
  KEY `fk_Estudiante_Representante_idx` (`Representante_id_Representante`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (1,'001',NULL,1234567890,'ESTU APE','ESTU NOM','12','avo',1,'PADRE',100,'ESTU001','ESTU001',1,'1','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (1,'Matematicas',NULL),(2,'Fisica',NULL),(3,'Fisica II',NULL),(4,'Matematicas II',NULL),(5,'Informatica',NULL);
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
INSERT INTO `materiasnotas` VALUES (1,'Q1','1','1','1234','1234567890','10','9','9','7.466666666666668','6','1.2000000000000002','8.666666666666668',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `materiasnotas` ENABLE KEYS */;
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
INSERT INTO `matricula` VALUES (1,'1234567890','1','1');
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
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
  `estado` varchar(45) DEFAULT NULL,
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
  `id_Representante` int(11) NOT NULL,
  `cedula_Representante` varchar(45) DEFAULT NULL,
  `ape_Representante` varchar(45) DEFAULT NULL,
  `nom_Representante` varchar(45) DEFAULT NULL,
  `telf_Representante` varchar(45) DEFAULT NULL,
  `correo_Representante` varchar(45) DEFAULT NULL,
  `dir_Representante` varchar(45) DEFAULT NULL,
  `ocu_Representante` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Representante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `representante`
--

LOCK TABLES `representante` WRITE;
/*!40000 ALTER TABLE `representante` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
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
INSERT INTO `usuario` VALUES (1,'0','adonis','adonis','Secretario'),(2,'1','ass1','ass1','administracion'),(3,'2','qw','qw','Estudiante'),(4,'1234','12','12','Profesor'),(9,'1234567890','ESTU001','ESTU001','Estudiante');
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

-- Dump completed on 2017-11-13 20:57:05
