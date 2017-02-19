-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ndrrmc2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema ndrrmc2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ndrrmc2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `ndrrmc2` ;

-- -----------------------------------------------------
-- Table `ndrrmc2`.`ndrrmc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`ndrrmc` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(45) NOT NULL COMMENT '',
  `contact` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`advisory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`advisory` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `date` VARCHAR(45) NOT NULL COMMENT '',
  `subject` VARCHAR(45) NOT NULL COMMENT '',
  `disaster_category` VARCHAR(45) NOT NULL COMMENT '',
  `ndrrmc_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `ndrrmc_id`)  COMMENT '',
  INDEX `fk_advisory_ndrrmc_idx` (`ndrrmc_id` ASC)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `fk_advisory_ndrrmc`
    FOREIGN KEY (`ndrrmc_id`)
    REFERENCES `ndrrmc2`.`ndrrmc` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`lgu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`lgu` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `city` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `password` VARCHAR(45) NOT NULL COMMENT '',
  `contact` VARCHAR(45) NOT NULL COMMENT '',
  `advisory_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `advisory_id`)  COMMENT '',
  INDEX `fk_lgu_advisory1_idx` (`advisory_id` ASC)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `fk_lgu_advisory1`
    FOREIGN KEY (`advisory_id`)
    REFERENCES `ndrrmc2`.`advisory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`city_information`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`city_information` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `region_name` VARCHAR(45) NOT NULL COMMENT '',
  `city_name` VARCHAR(45) NOT NULL COMMENT '',
  `no_of_brgy` VARCHAR(45) NOT NULL COMMENT '',
  `lgu_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `lgu_id`)  COMMENT '',
  INDEX `fk_city_information_lgu1_idx` (`lgu_id` ASC)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `fk_city_information_lgu1`
    FOREIGN KEY (`lgu_id`)
    REFERENCES `ndrrmc2`.`lgu` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`city_questionnaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`city_questionnaire` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `question` VARCHAR(100) NOT NULL COMMENT '',
  `city_information_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `city_information_id`)  COMMENT '',
  INDEX `fk_city_questionnaire_city_information1_idx` (`city_information_id` ASC)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `fk_city_questionnaire_city_information1`
    FOREIGN KEY (`city_information_id`)
    REFERENCES `ndrrmc2`.`city_information` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`suggested_supplies`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`suggested_supplies` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `disaster_type` VARCHAR(45) NULL COMMENT '',
  `equipment_name` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ndrrmc2`.`supplies_needed`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ndrrmc2`.`supplies_needed` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `requested_supplies` VARCHAR(45) NULL COMMENT '',
  `quantity` VARCHAR(45) NULL COMMENT '',
  `destination` VARCHAR(45) NULL COMMENT '',
  `lgu_id` INT NOT NULL COMMENT '',
  `lgu_advisory_id` INT NOT NULL COMMENT '',
  `suggested_supplies_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`, `lgu_id`, `lgu_advisory_id`, `suggested_supplies_id`)  COMMENT '',
  INDEX `fk_supplies_needed_lgu1_idx` (`lgu_id` ASC, `lgu_advisory_id` ASC)  COMMENT '',
  INDEX `fk_supplies_needed_suggested_supplies1_idx` (`suggested_supplies_id` ASC)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '',
  CONSTRAINT `fk_supplies_needed_lgu1`
    FOREIGN KEY (`lgu_id` , `lgu_advisory_id`)
    REFERENCES `ndrrmc2`.`lgu` (`id` , `advisory_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_supplies_needed_suggested_supplies1`
    FOREIGN KEY (`suggested_supplies_id`)
    REFERENCES `ndrrmc2`.`suggested_supplies` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
