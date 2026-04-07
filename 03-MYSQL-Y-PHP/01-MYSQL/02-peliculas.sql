CREATE TABLE peliculas (
    peli_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    peli_nombre VARCHAR(50) NOT NULL,
    peli_genero VARCHAR(20) NOT NULL,
    peli_anio DATE NOT NULL,
    peli_restricciones VARCHAR(10) NOT NULL
)

INSERT INTO peliculas (peli_nombre, peli_genero, peli_anio, peli_restricciones) VALUES
    ("Inception", "Sci-Fi", "2010-07-16", "PG-13"),
    ("The Dark Knight", "Action", "2008-07-18", "PG-13"),
    ("Interstellar", "Sci-Fi", "2014-11-07", "PG-13"),
    ("The Matrix", "Sci-Fi", "1999-03-31", "R"),
    ("Pulp Fiction", "Crime", "1994-10-14", "R"),
    ("Forrest Gump", "Drama", "1994-07-06", "PG-13"),
    ("The Shawshank Redemption", "Drama", "1994-09-23", "R"),
    ("The Godfather", "Crime", "1972-03-24", "R"),
    ("The Lord of the Rings: The Return of the King", "Fantasy", "2003-12-17", "PG-13"),
    ("Gladiator", "Action", "2000-05-05", "R")

SELECT peli_nombre, peli_genero FROM peliculas

SELECT * FROM peliculas WHERE peli_genero = 'sci-fi'

SELECT * FROM peliculas ORDER BY peli_anio ASC

SELECT * FROM peliculas ORDER BY peli_anio DESC

SELECT COUNT(*), peli_genero FROM peliculas GROUP BY peli_genero


CREATE TABLE actores (
    act_id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
    act_nombre VARCHAR(50) NOT NULL,
    act_apellido VARCHAR(50) NOT NULL
)

CREATE TABLE personajes (
    per_peli_id INT UNSIGNED NOT NULL,
    per_act_id INT UNSIGNED NOT NULL,
    per_nombre VARCHAR(50) NOT NULL
)

INSERT INTO actores (act_nombre, act_apellido) VALUES
    ("Leonardo", "DiCaprio"),
    ("Joseph", "Gordon-Levitt"),
    ("Ellen", "Page"),
    ("Tom", "Hardy"),
    ("Christian", "Bale"),
    ("Heath", "Ledger"),
    ("Aaron", "Eckhart"),
    ("Maggie", "Gyllenhaal"),
    ("Matthew", "McConaughey"),
    ("Anne", "Hathaway"),
    ("Jessica", "Chastain"),
    ("Michael", "Caine"),
    ("Keanu", "Reeves"),
    ("Laurence", "Fishburne"),
    ("Carrie-Anne", "Moss"),
    ("Hugo", "Weaving"),
    ("John", "Travolta"),
    ("Samuel L.", "Jackson"),
    ("Uma", "Thurman"),
    ("Bruce", "Willis")


INSERT INTO personajes (per_peli_id, per_act_id, per_nombre) VALUES
    (1, 1, "Dom Cobb"),
    (1, 2, "Arthur"),
    (1, 3, "Ariadne"),
    (1, 4, "Eames"),
    (2, 5, "Bruce Wayne / Batman"),
    (2, 6, "Joker"),
    (2, 7, "Harvey Dent / Two-Face"),
    (2, 8, "Rachel Dawes"),
    (3, 9, "Cooper"),
    (3, 10, "Brand"),
    (3, 11, "Murph"),
    (3, 12, "Professor Brand"),
    (4, 13, "Neo"),
    (4, 14, "Morpheus"),
    (4, 15, "Trinity"),
    (4, 16, "Agent Smith"),
    (5, 17, "Vincent Vega"),
    (5, 18, "Jules Winnfield"),
    (5, 19, "Mia Wallace"),
    (5, 20, "Butch Coolidge")

SELECT * FROM peliculas, personajes WHERE peli_id = per_peli_id

SELECT * FROM actores, personajes WHERE act_id = per_act_id

