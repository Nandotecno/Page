create database projetojava;
use projetojava;
CREATE TABLE usuario (
id BIGINT(10) auto_increment,
nome varchar(60),
cpf varchar(11),
email varchar(40),
telefone varchar(13),
primary key (id)
);