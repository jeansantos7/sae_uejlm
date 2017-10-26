-- MySQL Script generated by MySQL Workbench
-- Tue Oct 24 16:11:20 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bd_sae
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_sae
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_sae` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
USE `bd_sae` ;

-- -----------------------------------------------------
-- Table `bd_sae`.`Directivo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Directivo` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Directivo` (
  `id_Directivo` INT NOT NULL AUTO_INCREMENT,
  `cedula_Directivo` VARCHAR(45) NULL,
  `ape_Directivo` VARCHAR(45) NULL,
  `nom_Directivo` VARCHAR(45) NULL,
  `telf_Directivo` VARCHAR(45) NULL,
  `correo_Directivo` VARCHAR(45) NULL,
  `direc_Directivo` VARCHAR(45) NULL,
  `fech_nac_Directivo` VARCHAR(45) NULL,
  `user_Directivo` VARCHAR(45) NULL,
  `pass_Directivo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Directivo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Docente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Docente` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Docente` (
  `id_Docente` INT NOT NULL AUTO_INCREMENT,
  `cedula_Docente` INT(10) NULL,
  `ape_Docente` VARCHAR(45) NULL,
  `nom_Docente` VARCHAR(45) NULL,
  `telf_Docente` VARCHAR(45) NULL,
  `correo_Docente` VARCHAR(45) NULL,
  `direc_Docente` VARCHAR(45) NULL,
  `fech_nac_Docente` DATE NULL,
  `user_Docente` VARCHAR(45) NULL,
  `pass_Docente` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Docente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Secretaria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Secretaria` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Secretaria` (
  `id_Secretaria` INT NOT NULL AUTO_INCREMENT,
  `cedula_Secretaria` INT(10) NULL,
  `ape_Secretaria` VARCHAR(45) NULL,
  `nom_Secretaria` VARCHAR(45) NULL,
  `telf_Secretaria` VARCHAR(45) NULL,
  `correo_Secretaria` VARCHAR(45) NULL,
  `direc_Secretaria` VARCHAR(45) NULL,
  `fech_nac_Secretaria` DATE NULL,
  `user_Secretaria` VARCHAR(45) NULL,
  `pass_Secretaria` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Secretaria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Representante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Representante` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Representante` (
  `id_Representante` INT NOT NULL,
  `cedula_Representante` VARCHAR(45) NULL,
  `ape_Representante` VARCHAR(45) NULL,
  `nom_Representante` VARCHAR(45) NULL,
  `telf_Representante` VARCHAR(45) NULL,
  `correo_Representante` VARCHAR(45) NULL,
  `dir_Representante` VARCHAR(45) NULL,
  `ocu_Representante` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Representante`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Estudiante`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Estudiante` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Estudiante` (
  `id_Estudiante` INT NOT NULL AUTO_INCREMENT,
  `matricula_Estudiante` VARCHAR(45) NULL,
  `fech_matricula_Estudiante` DATETIME NULL,
  `cedula_Estudiante` INT(10) NULL,
  `ape_Estudiante` VARCHAR(45) NULL,
  `nom_Estudiante` VARCHAR(45) NULL,
  `fech_nac_Estudiante` VARCHAR(45) NULL,
  `dir_Estudiante` VARCHAR(45) NULL,
  `carnet_Estudiante` INT(20) NULL,
  `parentesco_Estudiante` VARCHAR(45) NULL,
  `user_Estudiante` VARCHAR(45) NULL,
  `pass_Estudiante` VARCHAR(45) NULL,
  `Representante_id_Representante` INT NOT NULL,
  PRIMARY KEY (`id_Estudiante`),
  INDEX `fk_Estudiante_Representante_idx` (`Representante_id_Representante` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Pensiones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Pensiones` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Pensiones` (
  `idPenciones` INT NOT NULL AUTO_INCREMENT,
  `id_estudiantes` VARCHAR(45) NULL,
  `valor_matricula` VARCHAR(45) NULL,
  `valor_pagado` VARCHAR(45) NULL,
  `mes_pagado` VARCHAR(45) NULL,
  `fecha` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  PRIMARY KEY (`idPenciones`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`historial_pagos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`historial_pagos` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`historial_pagos` (
  `idhistorial_pagos` INT NOT NULL AUTO_INCREMENT,
  `id_estudiante` VARCHAR(45) NULL,
  `id_mes` VARCHAR(45) NULL,
  `valor_del_pago` VARCHAR(45) NULL,
  `fecha` DATETIME NULL,
  PRIMARY KEY (`idhistorial_pagos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Cursos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Cursos` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Cursos` (
  `id_Cursos` INT NOT NULL AUTO_INCREMENT,
  `nom_Cursos` VARCHAR(45) NULL,
  `nom_corto_Cursos` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Cursos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_sae`.`Materias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_sae`.`Materias` ;

CREATE TABLE IF NOT EXISTS `bd_sae`.`Materias` (
  `id_Materias` INT NOT NULL AUTO_INCREMENT,
  `nom_Materias` VARCHAR(45) NULL,
  `nom_corto_Materias` VARCHAR(45) NULL,
  `id_Cursos` INT NULL,
  PRIMARY KEY (`id_Materias`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
