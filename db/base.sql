CREATE DATABASE tungtung;
USE tungtung;

CREATE TABLE usuarios(
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(30) NOT NULL,
    nombre VARCHAR(40) NOT NULL,
    apellidos VARCHAR(40) NOT NULL,
    f_nacimiento DATE NOT NULL,
    contra VARCHAR(20) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);