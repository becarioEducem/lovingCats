DROP DATABASE IF EXISTS `lovingcats`;
CREATE DATABASE IF NOT EXISTS `lovingcats`;
USE `lovingcats`;

DROP TABLE IF EXISTS `lovingcats`.`cat`;
CREATE TABLE IF NOT EXISTS `lovingcats`.`cat`(
    `idCat` VARCHAR(64) UNIQUE NOT NULL,
    `tags` VARCHAR(256) NULL,
    PRIMARY KEY (`idCat`)
);