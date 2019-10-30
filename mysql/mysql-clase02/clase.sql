-- Consulta con Where
SELECT movies.title, movies.rating, movies.genre_id, genres.name
FROM movies, genres
WHERE movies.genre_id = genres.id;

-- Consulta con JOIN
SELECT movies.title, movies.rating, movies.genre_id, 
COALESCE(genres.name, "sin genero")
FROM movies
-- INNER JOIN genres ON movies.genre_id = genres.id; -- Devuelve coincidencias.
LEFT JOIN genres ON movies.genre_id = genres.id; -- Devuelve coincidencias.

SELECT movies.title, movies.rating, movies.genre_id, genres.name
FROM genres
-- INNER JOIN genres ON movies.genre_id = genres.id; -- Devuelve coincidencias.
LEFT JOIN movies ON movies.genre_id = genres.id;


SELECT movies.title, actors.first_name, actors.last_name
FROM movies
LEFT JOIN actor_movie ON movies.id = actor_movie.movie_id
LEFT JOIN actors ON actor_movie.actor_id = actors.id;


SELECT CONCAT(first_name, ", ", last_name) as "nombre completo"
FROM actors;


SELECT DATEDIFF(NOW(), release_date ) as dias
FROM movies;

SELECT count(*) as genero
FROM genres;


SELECT count(title) as total, genres.name
FROM genres
LEFT JOIN movies ON movies.genre_id = genres.id
GROUP BY genres.name
HAVING name LIKE "%on%";

SELECT COUNT(*) as total, name
FROM genres;



-- Mostrar por cada capítulo (episodes) el número de temporada (seasons),
-- el nombre de la serie (series), el género (genres)
--  y la cantidad de actores (actors) que tiene.

SELECT episodes.title, seasons.number as seasonNumber, series.title as tituloSerie,
genres.name as genero, COUNT(actors.first_name) as totalActores
FROM episodes
INNER JOIN seasons ON episodes.season_id = seasons.id
INNER JOIN series ON seasons.serie_id = series.id
INNER JOIN genres ON series.genre_id = genres.id
INNER JOIN actor_episode ON episodes.id = actor_episode.episode_id
INNER JOIN actors ON actor_episode.actor_id = actors.id
GROUP BY episodes.title;


-- 4 Mostrar las películas (movies) con sus géneros (genres) si los posee y
-- los géneros con todas las películas que le corresponden, 
-- ambas en una sola consulta, sin ordenamiento.
-- Mostrar: title y name.

-- Mostrar también este informe utilizando un ordenamiento por título 
-- de la película (title), y por nombre del género (name).
-- Luego viceversa, por nombre del género (name) y por título de película (title).
(SELECT movies.title, movies.genre_id, genres.name as genero
FROM movies
LEFT JOIN genres ON movies.genre_id = genres.id)
UNION
(SELECT movies.title, movies.genre_id, genres.name
FROM genres
LEFT JOIN movies ON movies.genre_id = genres.id)
-- ORDER BY genero;
ORDER BY title;
