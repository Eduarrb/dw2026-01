mysql -u root -p

-- no es key sensitive

show databases

SHOW DATABASES

CREATE DATABASE stream

USE stream

SHOW TABLES

-- RELACIONES-> LLAVES PRIMARIAS Y FORANEAS
CREATE TABLE personas (
    id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT, -- no es un numero de orden
    nombres VARCHAR(30) NOT NULL,
    apellidos VARCHAR(30) NOT NULL,
    dni CHAR(8) NOT NULL,
    fechaNac DATE
)

DESC personas

DROP TABLE personas -- 💥💥💥NO LO HAGAN EN PRODUCCIÓN


-- BACKEND --> CRUD
-- CREATE
INSERT INTO personas (nombres, apellidos, dni, fechaNac) VALUES
    ('Juan', 'Perez', '12345678', '1990-01-01')

-- READ
SELECT * FROM personas

INSERT INTO personas (nombres, apellidos, dni, fechaNac) VALUES
    ('Maria', 'Gomez', '87654321', '1992-02-02'),
    ('Carlos', 'Lopez', '11223344', '1985-03-03'),  
    ('Ana', 'Martinez', '44332211', '1995-04-04'),
    ('Luis', 'Garcia', '55667788', '1988-05-05')


-- UPDATE
UPDATE personas SET dni = "99999999", apellidos = "Rodriguez" WHERE id = 3

-- DELETE 💥💥 CON MUCHO, MUCHO, MUCHOOOOOOOOOOOOOOOOOOOOOO CUIDADO
DELETE FROM personas WHERE id = 3

TRUNCATE personas -- 💥💥 CON MUCHO, MUCHO, MUCHOOOOOOOOOOOOOOOOOOOOOO CUIDADO

SELECT nombres, apellidos FROM personas

SELECT CONCAT(nombres, ' ', apellidos) AS usuario FROM personas

