CREATE TABLE users
(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    login varchar(255) NOT NULL,
    password varchar(255) NOT NULL
);

INSERT INTO users (login,password) VALUES ('123','123');