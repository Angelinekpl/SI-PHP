DROP DATABASE IF EXISTS SIFEV;

CREATE DATABASE IF NOT EXISTS SIFEV;

DROP TABLE IF EXISTS categories;

CREATE TABLE categories
(
  category_id   INT         NOT NULL PRIMARY KEY,
  category_name VARCHAR(25) NOT NULL
)
  ENGINE = innodb;

DROP TABLE IF EXISTS article;

CREATE TABLE IF NOT EXISTS article
(
  id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  title       VARCHAR(100) NOT NULL,
  author      VARCHAR(50)  NOT NULL,
  date        DATE         NOT NULL,
  content     TEXT         NOT NULL,
  url         VARCHAR(60)  NOT NULL,
  category_id INT          NOT NULL,
  CONSTRAINT fk_category_id FOREIGN KEY (category_id) REFERENCES
    SIFEV.categories (category_id)
)
  ENGINE = innodb;

CREATE INDEX fk_category_id
  ON article (category_id);
