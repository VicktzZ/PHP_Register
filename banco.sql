
CREATE database IF NOT EXISTS `contato` DEFAULT CHARACTER SET utf8 ;
USE `contato` ;


CREATE TABLE IF NOT EXISTS `contato`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NULL,
  `senha` VARCHAR(32) NULL,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;



