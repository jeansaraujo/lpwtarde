create database if not exists lpwt;
use lpwt;
create table if not exists candidatos(
    id integer AUTO_INCREMENT,
    nome VARCHAR(200),
    dtNascimento date,
    email VARCHAR(200),
    senha VARCHAR(200),
    PRIMARY KEY(id)
);
