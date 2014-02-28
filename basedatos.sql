create database sena;

use sena;

create table personas(
cedula bigint,
nombre varchar(50),
direccion varchar(50),
telefono int,
celular bigint,
primary key (cedula));

SELECT * FROM personas;
