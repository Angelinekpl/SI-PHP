# SI-PHP : Projet Dev Learn

## Description
Dev Learn est une application web de veille quotidenne. Chaque jour les articles sont mis à jour et sont classés par thème.

## Définition
Notre base de données SIFEV est composée de deux tables : Article et Categories.

  Article représente notre liste d'articles :
  * **id** *INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,*
  * **title** *VARCHAR(100) NOT NULL,*
  * **author** *VARCHAR(50) NOT NULL,*
  * **date** *DATE NOT NULL,*
  * **content** *TEXT NOT NULL,*
  * **url** *VARCHAR(60) NOT NULL,*
  * **category_id** *INT(2) NOT NULL,*
  * *PRIMARY KEY (id)*


  Categories représente les différentes catégories des articles présentés sur le site :
  * **category_id** *INT(2) NOT NULL,*
  * **category_name** *VARCHAR(25) NOT NULL,*
  * *PRIMARY KEY (category_id)*


## Sitemap

![Dev Learn Site Map](https://www.zupimages.net/up/18/07/t2eg.png)

## CRUD

### Create

  * Formulaire

  GET /create.php

  * Ajout à la base de données
  ```sql
  INSERT INTO article(title, author, date, content, url, category_id) VALUES(:title, :author, :date, :content, :url, :category_id));
  ```
### Read

  * Lister
  ```sql
  SELECT title, author, date, content, url, category_id FROM article WHERE id=:id;
  ```

  * Visualiser les détails

### UPDATE

  * Formulaire

  * Modifier les données
  ```sql
  UPDATE article SET title=:title, author=:author, date=:date, content=:content, url=:url, category_id=:category_id WHERE id=:id;
  ```

### DELETE

 * Demande de confirmation

 GET /delete.php

 * Effacer dans la base

 ```sql
 DELETE FROM article WHERE id=:id;
 ```

 ### NOTES

**PDO**

PDO signifie Php Data Object et constitue une couche d'abstraction entre l'application PHP et l'application MySQL d'un serveur.
PDO représente une connexion entre PHP et un serveur de base de données.

**FETCH :**

La méthode FETCH contrôle comment la prochaine ligne sera retournée à l'appelant. Cette valeur doit être une des constantes PDO::FETCH_*.

  * PDO::FETCH_ASSOC: retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats

  * PDO::FETCH_OBJ : retourne un objet anonyme avec les noms de propriétés qui correspondent aux noms des colonnes retournés dans le jeu de résultats

**GET & POST METHODS :**  

  * **GET METHOD :**

  La méthode GET en PHP permet de récupérer des données depuis une source préalablement spécifiée (ici, des données dans les tables de notre base de données SIFEV).

  * **POST METHOD :**

  La méthode POST en PHP permet de soumettre des données à une source spécifiée.

**SQL CONSTRAINTS :**

  * **NOT NULL**

  S'assure qu'une colonne ne peut pas avoir de valeur NULL.

  * **UNIQUE**

  S'assure que toutes les valeurs d'une colonne sont différentes.

  * **PRIMARY KEY**

  Combinaison de NOT NULL et UNIQUE. Identifie de manière unique chaque ligne d'une table.

  * **FOREIGN KEY**

  Identifie de manière unique une ligne ou un enregistrement dans une autre table.
