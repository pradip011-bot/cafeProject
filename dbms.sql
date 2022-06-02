CREATE DATABASE cafe;

CREATE TABLE tbl_users(
                          id int AUTO_INCREMENT PRIMARY KEY,
                          name varchar(100) not null,
                          username varchar(100) UNIQUE,
                          email varchar(100) UNIQUE,
                          password varchar(100) NOT null,
                          user_type ENUM ('user','admin') DEFAULT 'user',
                          STATUS int DEFAULT '0',
                          image varchar(100) not null
);