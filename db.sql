CREATE DATABASE v43_db;
CREATE TABLE users (username varchar(8) PRIMARY KEY, password varchar(8), email varchar(32) UNIQUE);
