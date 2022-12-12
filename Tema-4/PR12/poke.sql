CREATE DATABASE IF NOT EXISTs poke;
USE poke;
CREATE TABLE poke (
	ID INT primary key auto_increment,
	Nombre VARCHAR(10),
	Peso DECIMAL(5,2),
	Altura DECIMAL(5,2),
	Encuentro DATE
);
INSERT INTO poke VALUES (1,'Pikachu',6,0.4,'2018-04-12');