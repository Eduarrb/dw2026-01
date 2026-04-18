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

CREATE TABLE usuarios (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20) NOT NULL DEFAULT 'user',
    estado TINYINT(1) NOT NULL DEFAULT 0,
    token VARCHAR(255)
)

INSERT INTO usuarios (nombres, apellidos, email, password) VALUES
    ('Eduardo', 'García', 'eduardo.garcia@example.com', '123');