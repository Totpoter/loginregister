CREATE DATABASE v43_db;
CREATE TABLE users (id int(8) PRIMARY KEY AUTO_INCREMENT, username varchar(8) UNIQUE, password varchar(8), email varchar(32) UNIQUE);
