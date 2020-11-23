#opdract 3 broken authentication

CREATE DATABASE brokenauth;

SELECT DATABASE():
USE brokenauth;

CREATE TABLE user(
    id int(15) NOT NULL AUTO_INCREMENT,
    email VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL,
    PRIMARY KEY(id)
);

