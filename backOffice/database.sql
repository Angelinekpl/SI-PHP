create database SIFEV;

-- use SIFEV;

-- create table article(
-- 	id int(10) auto_increment primary key,
-- 	title varchar(100) not null,
-- 	author varchar(50) not null, 
-- 	date datetime, not null,
-- 	content text, not null,
-- 	url varchar(2000), not null
-- );

CREATE TABLE `SIFEV`.`article`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL,
    `author`VARCHAR(50) NOT NULL,
    `date` DATETIME NOT NULL,
    `content` text NOT NULL,
    `url` VARCHAR(2000) NOT NULL,
    PRIMARY KEY (`id`)
);