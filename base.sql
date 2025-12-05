create database tungtung;
use tungtung;

create table usuarios(
id_usuario int auto_increment primary key,
nombre varchar(40) not null,
apellidos varchar(40) not null,
usuario varchar(30) not null,
contra varchar(20) not null,
f_nacimiento date not null
);

