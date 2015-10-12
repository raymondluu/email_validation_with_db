-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema emailsdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema emailsdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `emailsdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `emailsdb` ;

-- -----------------------------------------------------
-- Table `emailsdb`.`emails`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `emailsdb`.`emails` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `email` VARCHAR(255) NULL COMMENT '',
  `created_at` DATETIME NULL COMMENT '',
  `updated_at` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
