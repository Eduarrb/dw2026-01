-- SELECT * FROM peliculas, personajes WHERE peli_id = per_peli_id
-- SELECT * FROM peliculas, personajes WHERE id = id

SELECT * FROM peliculas INNER JOIN personajes ON peli_id = per_peli_id

SELECT * FROM actores INNER JOIN personajes ON act_id = per_act_id

-- ALIAS DE TABLAS

SELECT * FROM peliculas AS a INNER JOIN personajes AS b ON a.peli_id = b.per_peli_id

SELECT
    a.peli_nombre,
    b.per_nombre
    FROM peliculas AS a
    INNER JOIN personajes AS b ON a.peli_id = b.per_peli_id
    ORDER BY b.per_nombre DESC

SELECT * FROM actores AS a INNER JOIN personajes AS b ON a.act_id = b.per_act_id

SELECT
    a.act_nombre,
    a.act_apellido,
    b.per_nombre
    FROM actores AS a 
    INNER JOIN personajes AS b 
    ON a.act_id = b.per_act_id

SELECT
    CONCAT(a.act_nombre, " ", a.act_apellido),
    b.per_nombre
    FROM actores AS a 
    INNER JOIN personajes AS b 
    ON a.act_id = b.per_act_id

-- ALIAS DE COLUMNAS

SELECT
    CONCAT(a.act_nombre, " ", a.act_apellido) AS actor,
    b.per_nombre AS personaje
    FROM actores AS a 
    INNER JOIN personajes AS b 
    ON a.act_id = b.per_act_id

-- LEFT JOIN
SELECT * FROM actores AS a LEFT JOIN personajes AS b ON a.act_id = b.per_act_id

SELECT * FROM actores AS a RIGHT JOIN personajes AS b ON a.act_id = b.per_act_id

-- 3 TABLAS
SELECT * 
    FROM peliculas AS a 
    INNER JOIN personajes AS b 
        ON a.peli_id = b.per_peli_id
    INNER JOIN actores AS c
        ON b.per_act_id = c.act_id

SELECT * 
    FROM peliculas AS a 
    INNER JOIN personajes AS b 
        ON a.peli_id = b.per_peli_id
    RIGHT JOIN actores AS c
        ON b.per_act_id = c.act_id