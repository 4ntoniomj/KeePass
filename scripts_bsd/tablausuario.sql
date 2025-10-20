create database if not exists keepass;
use keepass;
create table if not exists usuario (
    nombreusuario varchar(20) primary key,
    contraseña varchar(60) not null,
    fechacreacion date not null
);