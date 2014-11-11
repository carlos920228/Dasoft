SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `dasoft` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dasoft` ;

-- -----------------------------------------------------
-- Table `dasoft`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dasoft`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rfc` VARCHAR(20) NULL,
  `nombre` VARCHAR(45) NULL,
  `apellidoPaterno` VARCHAR(45) NULL,
  `apellidoMaterno` VARCHAR(45) NULL,
  `colonia` VARCHAR(45) NULL COMMENT '	',
  `calle` VARCHAR(45) NULL,
  `numero` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dasoft`.`abogado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dasoft`.`abogado` (
  `idabogado` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `apellidoPaterno` VARCHAR(45) NULL,
  `apellidoMaterno` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`idabogado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dasoft`.`casos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dasoft`.`casos` (
  `idcasos` INT NOT NULL AUTO_INCREMENT,
  `fechaApertura` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `archivoFisico` VARCHAR(45) NULL,
  `juzgado` VARCHAR(45) NULL,
  `clientes_id` INT NOT NULL,
  `abogado_idabogado` INT NOT NULL,
  PRIMARY KEY (`idcasos`),
  INDEX `fk_casos_clientes_idx` (`clientes_id` ASC),
  INDEX `fk_casos_abogado1_idx` (`abogado_idabogado` ASC),
  CONSTRAINT `fk_casos_clientes`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `dasoft`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_casos_abogado1`
    FOREIGN KEY (`abogado_idabogado`)
    REFERENCES `dasoft`.`abogado` (`idabogado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dasoft`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dasoft`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(45) NULL,
  `contraseña` VARCHAR(45) NULL,
  `rol` VARCHAR(45) NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
