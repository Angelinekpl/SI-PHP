create database SIFEV;

CREATE TABLE `SIFEV`.`article`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL,
    `author`VARCHAR(50) NOT NULL,
    `date` DATE NOT NULL,
    `content` text NOT NULL,
    `url` VARCHAR(60) NOT NULL,
    PRIMARY KEY (`id`)
);



CREATE TABLE `SIFEV`.`categories`(
  category_id   INT NOT NULL,
  category_name VARCHAR(25) NULL,
  PRIMARY KEY (`category_id`)
);