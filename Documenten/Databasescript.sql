-- MySQL Script generated by MySQL Workbench
-- Sat Dec  7 16:12:54 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`login`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`login` (
  `iduser` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC),
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`bedrijf_gegevens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`bedrijf_gegevens` (
  `iduser` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `naam` VARCHAR(45) NOT NULL,
  `plaats` VARCHAR(45) NULL,
  `Bedrijf` VARCHAR(45) NULL,
  `postcode` VARCHAR(12) NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  PRIMARY KEY (`iduser`),
  INDEX `iduser_idx` (`iduser` ASC),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `idlogin`
    FOREIGN KEY (`iduser`)
    REFERENCES `mydb`.`login` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`opdrachten`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`opdrachten` (
  `idopdracht` INT NOT NULL,
  `iduser` INT NOT NULL,
  `titel` VARCHAR(45) NOT NULL,
  `loon` VARCHAR(45) NOT NULL,
  `tot_uur` VARCHAR(45) NOT NULL,
  `datum` VARCHAR(45) NOT NULL,
  `beschrijving` TEXT NOT NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  PRIMARY KEY (`idopdracht`, `iduser`),
  INDEX `iduser_idx` (`iduser` ASC),
  CONSTRAINT `iduser`
    FOREIGN KEY (`iduser`)
    REFERENCES `mydb`.`bedrijf_gegevens` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`factuur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`factuur` (
  `idfactuur` INT NOT NULL,
  `idopdracht` INT NOT NULL,
  `prijs_ex` INT NOT NULL,
  `prijs_inc` INT NOT NULL,
  `btw` INT NULL,
  `tot_uur` INT NOT NULL,
  `loon` DECIMAL NOT NULL,
  `datum` DATETIME NOT NULL,
  `factuurdatum` DATETIME NOT NULL,
  `vervaldatum` DATETIME NOT NULL,
  `bank` VARCHAR(100) NOT NULL,
  `iban` VARCHAR(100) NOT NULL,
  `bic` VARCHAR(100) NOT NULL,
  `btwnr` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idfactuur`),
  INDEX `idopdracht_idx` (`idopdracht` ASC),
  CONSTRAINT `idopdracht`
    FOREIGN KEY (`idopdracht`)
    REFERENCES `mydb`.`opdrachten` (`idopdracht`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rollen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`rollen` (
  `idrollen` INT NOT NULL,
  `titel` VARCHAR(45) NOT NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  PRIMARY KEY (`idrollen`),
  UNIQUE INDEX `idrollen_UNIQUE` (`idrollen` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`student_gegvens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`student_gegvens` (
  `iduser` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `naam` VARCHAR(45) NOT NULL,
  `tussenvoegsel` VARCHAR(45) NULL,
  `achternaam` VARCHAR(45) NOT NULL,
  `woonplaats` VARCHAR(45) NULL,
  `straat` VARCHAR(45) NULL,
  `huisnummer` INT NULL,
  `cv` BLOB NULL,
  `postcode` VARCHAR(12) NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  PRIMARY KEY (`iduser`),
  INDEX `iduser_idx` (`iduser` ASC) VISIBLE,
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC),
  CONSTRAINT `iduser`
    FOREIGN KEY (`iduser`)
    REFERENCES `mydb`.`login` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`opdrachten_reacties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`opdrachten_reacties` (
  `idopdracht` INT NOT NULL,
  `iduser` INT NOT NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  PRIMARY KEY (`idopdracht`, `iduser`),
  INDEX `idopdracht_idx` (`idopdracht` ASC),
  INDEX `iduser_idx` (`iduser` ASC),
  CONSTRAINT `idopdracht`
    FOREIGN KEY (`idopdracht`)
    REFERENCES `mydb`.`opdrachten` (`idopdracht`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `iduser`
    FOREIGN KEY (`iduser`)
    REFERENCES `mydb`.`student_gegvens` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rollen_link`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`rollen_link` (
  `iduser` INT NOT NULL,
  `idrollen` INT NOT NULL,
  `createDate` DATETIME NOT NULL,
  `updateDate` DATETIME NOT NULL,
  INDEX `idrollen_idx` (`idrollen` ASC),
  PRIMARY KEY (`iduser`, `idrollen`),
  CONSTRAINT `idrollen`
    FOREIGN KEY (`idrollen`)
    REFERENCES `mydb`.`rollen` (`idrollen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `iduser`
    FOREIGN KEY (`iduser`)
    REFERENCES `mydb`.`login` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`table2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table2` (
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
