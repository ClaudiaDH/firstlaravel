CREATE DATABASE laravel;
USE laravel;

CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100)
);

INSERT INTO usuarios VALUES (null, 'Maria');
INSERT INTO usuarios VALUES (null, 'Pedro');
INSERT INTO usuarios VALUES (null, 'Amanda');