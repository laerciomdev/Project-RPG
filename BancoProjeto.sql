create database ProjectRpg
default character set utf8
default collate utf8_general_ci;

use ProjectRpg;

create table usuarios(
idUser int (11) primary key not null,
login varchar (20) not null,
senha varchar (30) not null,
nome varchar (20) not null,
sobrenome varchar (60) not null,
email varchar (60) not null,
telefone int (20) not null,
primary key (idUser)
);