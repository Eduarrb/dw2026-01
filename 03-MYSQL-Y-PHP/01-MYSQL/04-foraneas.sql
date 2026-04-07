CREATE TABLE directores (
    dire_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    dire_nombres VARCHAR(50) NOT NULL,
    dire_apellidos VARCHAR(50) NOT NULL
)

INSERT INTO directores (dire_nombres, dire_apellidos) VALUES
    ("Anthony", "Russo"),
    ("Joe", "Russo"),
    ("Christopher", "Nolan"),
    ("Lana", "Wachowski"),
    ("Steven", "Spielberg"),    
    ("James", "Cameron"),
    ("Peter", "Jackson"),
    ("Quentin", "Tarantino"),
    ("Martin", "Scorsese")

ALTER TABLE peliculas ADD COLUMN peli_dire_id INT UNSIGNED AFTER peli_id

INSERT INTO peliculas (peli_nombre, peli_genero, peli_anio, peli_restricciones) VALUES
    ("Avengers: Endgame", "Acción", "2019-04-26", "PG-13"),
    ("The Dark Knight Rises", "Acción", "2012-07-20", "PG-13"),
    ("The Matrix Reloaded", "Ciencia Ficción", "2003-05-15", "R")

UPDATE peliculas SET peli_dire_id = 1 WHERE peli_id = 11
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 1
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 2
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 3
UPDATE peliculas SET peli_dire_id = 3 WHERE peli_id = 12
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 4
UPDATE peliculas SET peli_dire_id = 4 WHERE peli_id = 13
UPDATE peliculas SET peli_dire_id = 7 WHERE peli_id = 9
UPDATE peliculas SET peli_dire_id = 8 WHERE peli_id = 5

-- LLAVES PRIMARIAS Y FORANEAS
-- LO IMPORTANTE ES QUE AL TENER AMBAS, AYUDA EN EL PERFORMACE DE LAS CONSULTAS
-- Para relacionar tablas, los campos deben ser del mismo tipo de dato.

-- ⚡⚡ RESTRICCIONES ⚡⚡
-- RESTRICT: No permite eliminar o actualizar un registro si tiene registros relacionados en otra tabla. Especilamente con la tabla referencial

-- CASCADE: Al actualizar o eliminar un registro, también se actualizan o eliminan los registros relacionados con la tabla dependiente

-- SET NULL: al actualizar o eliminar un registro, los registros relacionados en la tabla dependiente se actualizan para establecer el valor del campo foráneo a NULL

-- NO ACTION: no hace nada

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores(dire_id)
    ON DELETE RESTRICT ON UPDATE RESTRICT

DELETE FROM directores WHERE dire_id = 1

ALTER TABLE peliculas DROP CONSTRAINT fk_direId

ALTER TABLE peliculas
    ADD CONSTRAINT fk_direId FOREIGN KEY (peli_dire_id)
    REFERENCES directores(dire_id)
    ON DELETE CASCADE ON UPDATE CASCADE

DELETE FROM directores WHERE dire_id = 7
