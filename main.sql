DROP DATABASE IF EXISTS `db_comments_analysis`;

CREATE DATABASE `db_comments_analysis`
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE `db_comments_analysis`;

CREATE TABLE `user`
(
  `id` INT NOT NULL,
  `username` VARCHAR(25) NOT NULL,
  `email` VARCHAR(25),
  `password` VARCHAR(25) NOT NULL,
  `nickname` VARCHAR(25),
  PRIMARY KEY (`id`)
);
