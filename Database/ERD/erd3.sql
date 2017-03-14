-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ndrrmc
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ndrrmc
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ndrrmc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ndrrmc` ;

-- -----------------------------------------------------
-- Table `ndrrmc`.`NDRMMC Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`NDRMMC Admin` (
  `id` INT UNSIGNED NOT NULL COMMENT '',
  `email` VARCHAR(45) NULL COMMENT '',
  `username` VARCHAR(45) NULL COMMENT '',
  `password` VARCHAR(45) NULL COMMENT '',
  `contact` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Advisory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Advisory` (
  `id` INT NOT NULL COMMENT '',
  `date` VARCHAR(45) NULL COMMENT '',
  `subject` VARCHAR(45) NULL COMMENT '',
  `disaster_category` VARCHAR(45) NULL COMMENT '',
  `NDRMMC Admin_id` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `NDRMMC Admin_id`)  COMMENT '',
  INDEX `fk_Advisory_NDRMMC Admin1_idx` (`NDRMMC Admin_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Advisory_NDRMMC Admin1`
    FOREIGN KEY (`NDRMMC Admin_id`)
    REFERENCES `ndrrmc`.`NDRMMC Admin` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`LGU User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`LGU User` (
  `id` INT NOT NULL COMMENT '',
  `email` VARCHAR(45) NULL COMMENT '',
  `username` VARCHAR(45) NULL COMMENT '',
  `password` VARCHAR(45) NULL COMMENT '',
  `contact` VARCHAR(45) NULL COMMENT '',
  `government_level` VARCHAR(45) NULL COMMENT '',
  `Advisory_id` INT NOT NULL COMMENT '',
  `Advisory_NDRMMC Admin_id` INT UNSIGNED NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `Advisory_id`, `Advisory_NDRMMC Admin_id`)  COMMENT '',
  INDEX `fk_LGU User_Advisory1_idx` (`Advisory_id` ASC, `Advisory_NDRMMC Admin_id` ASC)  COMMENT '',
  CONSTRAINT `fk_LGU User_Advisory1`
    FOREIGN KEY (`Advisory_id` , `Advisory_NDRMMC Admin_id`)
    REFERENCES `ndrrmc`.`Advisory` (`id` , `NDRMMC Admin_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`LGU Information`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`LGU Information` (
  `id` INT NOT NULL COMMENT '',
  `regionName` VARCHAR(45) NULL COMMENT '',
  `cityName` VARCHAR(45) NULL COMMENT '',
  `noOfBarangays` VARCHAR(45) NULL COMMENT '',
  `LGU User_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `LGU User_id`)  COMMENT '',
  INDEX `fk_City Information_LGU User_idx` (`LGU User_id` ASC)  COMMENT '',
  CONSTRAINT `fk_City Information_LGU User`
    FOREIGN KEY (`LGU User_id`)
    REFERENCES `ndrrmc`.`LGU User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`LGU Questionnaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`LGU Questionnaire` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `questions` VARCHAR(45) NULL COMMENT '',
  `LGU Information_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `LGU Information_id`)  COMMENT '',
  INDEX `fk_LGU Questionnaire_LGU Information1_idx` (`LGU Information_id` ASC)  COMMENT '',
  CONSTRAINT `fk_LGU Questionnaire_LGU Information1`
    FOREIGN KEY (`LGU Information_id`)
    REFERENCES `ndrrmc`.`LGU Information` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Advisory Earthquake`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Advisory Earthquake` (
  `Advisory_id` INT NOT NULL COMMENT '',
  `date` VARCHAR(45) NULL COMMENT '',
  `time` VARCHAR(45) NULL COMMENT '',
  `location` VARCHAR(45) NULL COMMENT '',
  `depthofFocus` VARCHAR(45) NULL COMMENT '',
  `origin` VARCHAR(45) NULL COMMENT '',
  `reportedIntensities` VARCHAR(45) NULL COMMENT '',
  `expectingDamage` VARCHAR(45) NULL COMMENT '',
  `expectingAftershocks` VARCHAR(45) NULL COMMENT '',
  `actionTaken` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`Advisory_id`)  COMMENT '',
  INDEX `fk_Advisory Earthquake_Advisory1_idx` (`Advisory_id` ASC)  COMMENT '',
  UNIQUE INDEX `Advisory_id_UNIQUE` (`Advisory_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Advisory Earthquake_Advisory1`
    FOREIGN KEY (`Advisory_id`)
    REFERENCES `ndrrmc`.`Advisory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Advisory Tropical Depression`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Advisory Tropical Depression` (
  `Advisory_id` INT NOT NULL COMMENT '',
  `locationOfEye` VARCHAR(45) NULL COMMENT '',
  `strength` VARCHAR(45) NULL COMMENT '',
  `forecastMovement` VARCHAR(45) NULL COMMENT '',
  `forecastPosition` VARCHAR(45) NULL COMMENT '',
  `tropicalCycloneWaringSignal` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`Advisory_id`)  COMMENT '',
  INDEX `fk_Advisory Tropical Depression_Advisory1_idx` (`Advisory_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Advisory Tropical Depression_Advisory1`
    FOREIGN KEY (`Advisory_id`)
    REFERENCES `ndrrmc`.`Advisory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Advisory Format A`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Advisory Format A` (
  `Advisory_id` INT NOT NULL COMMENT '',
  `type` VARCHAR(45) NULL COMMENT '',
  `situationOverview` VARCHAR(45) NULL COMMENT '',
  `advisory Format Acol` VARCHAR(45) NULL COMMENT '',
  `note` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`Advisory_id`)  COMMENT '',
  INDEX `fk_Advisory Format A_Advisory1_idx` (`Advisory_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Advisory Format A_Advisory1`
    FOREIGN KEY (`Advisory_id`)
    REFERENCES `ndrrmc`.`Advisory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Advisory Flood`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Advisory Flood` (
  `Advisory_id` INT NOT NULL COMMENT '',
  `presentWeather` VARCHAR(45) NULL COMMENT '',
  `rainfallForecast` VARCHAR(45) NULL COMMENT '',
  `publicWarnings` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`Advisory_id`)  COMMENT '',
  INDEX `fk_Advisory Flood_Advisory1_idx` (`Advisory_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Advisory Flood_Advisory1`
    FOREIGN KEY (`Advisory_id`)
    REFERENCES `ndrrmc`.`Advisory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Suggested Supplies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Suggested Supplies` (
  `id` INT NOT NULL COMMENT '',
  `disaster_type` VARCHAR(45) NULL COMMENT '',
  `equipment_name` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc`.`Supplies Needed`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc`.`Supplies Needed` (
  `id` INT NOT NULL COMMENT '',
  `requestedSupply` VARCHAR(45) NULL COMMENT '',
  `quantity` VARCHAR(45) NULL COMMENT '',
  `destination` VARCHAR(45) NULL COMMENT '',
  `LGU User_id` INT NOT NULL COMMENT '',
  `Suggested Supplies_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `LGU User_id`, `Suggested Supplies_id`)  COMMENT '',
  INDEX `fk_Supplies Needed_LGU User1_idx` (`LGU User_id` ASC)  COMMENT '',
  INDEX `fk_Supplies Needed_Suggested Supplies1_idx` (`Suggested Supplies_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Supplies Needed_LGU User1`
    FOREIGN KEY (`LGU User_id`)
    REFERENCES `ndrrmc`.`LGU User` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Supplies Needed_Suggested Supplies1`
    FOREIGN KEY (`Suggested Supplies_id`)
    REFERENCES `ndrrmc`.`Suggested Supplies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
