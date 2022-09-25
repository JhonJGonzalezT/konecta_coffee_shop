-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema konecta_coffee_shop
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema konecta_coffee_shop
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `konecta_coffee_shop` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `konecta_coffee_shop` ;

-- -----------------------------------------------------
-- Table `konecta_coffee_shop`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `konecta_coffee_shop`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `productName` VARCHAR(45) NOT NULL,
  `productRef` VARCHAR(45) NOT NULL,
  `price` INT NOT NULL,
  `weight` INT NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `stock` INT NOT NULL,
  `createdAt` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `konecta_coffee_shop`.`sales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `konecta_coffee_shop`.`sales` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quantity` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
