create database base_datos_jardineria;

create table contacto(
	id int auto_increment primary key,
	nombre varchar(30) not null,
	telefono varchar(15) not null,
    correo varchar(150) not null,
    mensaje varchar(255) not null
);