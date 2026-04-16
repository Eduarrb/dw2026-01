CREATE DATABASE tienda;

USE tienda;

CREATE TABLE categorias (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    imagen VARCHAR(255) NOT NULL
);

INSERT INTO categorias (nombre, imagen) VALUES
    ('camisetas', '01.webp'),
    ('pantalones', '03.webp'),
    ('accesorios', '02.webp');