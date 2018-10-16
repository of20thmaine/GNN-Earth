-- noinspection SqlNoDataSourceInspectionForFile

/**
* Bobby Palmer, CSC-465, Main Application Database
* Initialization Instructions
*/
USE rjp7472;

SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS administrators;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS articles;
DROP TABLE IF EXISTS articleDrafts;
SET FOREIGN_KEY_CHECKS=1;

CREATE TABLE administrators (
    username VARCHAR(30),
    password VARCHAR(30) NOT NULL,
    email VARCHAR(40) NOT NULL,
    PRIMARY KEY(username)) ENGINE=INNODB;

CREATE TABLE users (
    email VARCHAR(40),
    password VARCHAR(30) NOT NULL,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    PRIMARY KEY(email)) ENGINE=INNODB;

CREATE TABLE articles (
    id INT NOT NULL AUTO_INCREMENT,
    publicationDate NOT NULL DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(300) NOT NULL,
    imgLink VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    summary TEXT NOT NULL,
    content MEDIUMTEXT NOT NULL,
    views MEDIUMINT UNSIGNED;
    PRIMARY KEY (id)) ENGINE=INNODB;

CREATE TABLE articleDrafts (
    id INT NOT NULL AUTO_INCREMENT,
    publicationDate NOT NULL DEFAULT CURRENT_TIMESTAMP,
    title VARCHAR(300) NOT NULL,
    imgLink VARCHAR(100) NOT NULL,
    author VARCHAR(50) NOT NULL,
    summary TEXT NOT NULL,
    content MEDIUMTEXT NOT NULL,
    views MEDIUMINT UNSIGNED;
    PRIMARY KEY (id)) ENGINE=INNODB;




INSERT INTO articles values(title='"Boris-Bot" Behavior Couldn’t Possibly Be Mistaken As Human',
    imgLink='"https://d.ibtimes.co.uk/en/full/1613711/boris-johnson.jpg"',
    author='Mr. Logic',
    summary='Researcher punished by pan-galactic institutional review board after pulling automaton
        in complex experiment saying "Boris-Bot behavior reached point where it could not possibly
        have been mistaken as being human by observers."',
    content='',
    views=5000
    );


