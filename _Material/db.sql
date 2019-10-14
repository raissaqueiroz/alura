CREATE DATABASE IF NOT EXISTS ESTOQUE;

USE ESTOQUE;

CREATE TABLE IF NOT EXISTS PRODUTOS (
    id          int(11)       not null    auto_increment    primary key,
    nome        varchar(255)  not null,
    descricao   text not null,
    preco       decimal(10,2) not null
);

INSERT INTO PRODUTOS (NOME, DESCRICAO, PRECO) VALUES ('Iphone 6 plus', 'Celular bem caro', '3600');

CREATE TABLE IF NOT EXISTS users (
	id          int(11)       not null    auto_increment    primary key,
	username    varchar(255)  not null,
	password    varchar(255)  not null
);

INSERT INTO users (username, password) VALUES ('admin', 'admin');	