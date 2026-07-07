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

CREATE TABLE productos (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    catId INT UNSIGNED NOT NULL,
    stock INT UNSIGNED NOT NULL,
    imagen VARCHAR(50) NOT NULL,
    destacado TINYINT(1) NOT NULL DEFAULT 0,
    activo TINYINT(1) NOT NULL DEFAULT 1
)

ALTER TABLE productos
    ADD CONSTRAINT fk_categoria FOREIGN KEY (catId)
    REFERENCES categorias(id)
    ON DELETE CASCADE ON UPDATE CASCADE

CREATE TABLE tallas (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    sigla VARCHAR(5) NOT NULL
)

INSERT INTO tallas (nombre, sigla) VALUES
    ('Small', 'S'),
    ('Medium', 'M'),
    ('Large', 'L'),
    ('ExtraLarge', 'XL');

CREATE TABLE colores (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL
)

INSERT INTO colores (nombre) VALUES
    ('Rojo'),
    ('Azul'),
    ('Verde'),
    ('Negro'),
    ('Blanco');

CREATE TABLE producto_talla (
    productoId INT UNSIGNED NOT NULL,
    tallaId INT UNSIGNED NOT NULL
)

ALTER TABLE producto_talla
    ADD CONSTRAINT fk_producto FOREIGN KEY (productoId)
    REFERENCES productos(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_talla FOREIGN KEY (tallaId)
    REFERENCES tallas(id)
    ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE producto_color (
    productoId INT UNSIGNED NOT NULL,
    colorId INT UNSIGNED NOT NULL
)

ALTER TABLE producto_color
    ADD CONSTRAINT fk_productoC FOREIGN KEY (productoId)
    REFERENCES productos(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_color FOREIGN KEY (colorId)
    REFERENCES colores(id)
    ON DELETE CASCADE ON UPDATE CASCADE

ALTER TABLE productos ADD COLUMN created_at DATE AFTER activo

CREATE TABLE carrito (
    prodId INT UNSIGNED NOT NULL,
    userId INT UNSIGNED NOT NULL,
    cantidad INT UNSIGNED NOT NULL DEFAULT 1,
    tallaId INT UNSIGNED,
    colorId INT UNSIGNED
)

ALTER TABLE carrito
    ADD CONSTRAINT fk_cartProd FOREIGN KEY (prodId)
    REFERENCES productos(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_cartUser FOREIGN KEY (userId)
    REFERENCES usuarios(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_cartTalla FOREIGN KEY (tallaId)
    REFERENCES tallas(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT fk_cartColor FOREIGN KEY (colorId)   
    REFERENCES colores(id)
    ON DELETE CASCADE ON UPDATE CASCADE;
