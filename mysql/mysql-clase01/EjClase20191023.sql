-- Obtener las películas (movies) y sus géneros (genres), 
-- ordenado por nombre de pelicula (usar title).
SELECT title, genre_id, genres.name
FROM movies, genres
WHERE movies.genre_id = genres.id
ORDER BY title ASC;


-- Obtener las películas (movies) con sus actores (actors), 
-- ordenar por nombre de pelicula y nombre de los actores (usar title y first_name).
SELECT movies.title, actors.first_name, actors.last_name -- lista de campos a ver en la consulta. 
FROM movies, actor_movie, actors
WHERE movies.id = actor_movie.movie_id
AND actor_movie.actor_id = actors.id
ORDER BY title ASC, first_name ASC;

-- Obtener las películas (movies) que sean de la saga de “Toy Story” 
-- y las películas de la saga de “Harry Potter” con duración de 2 horas.
SELECT *
FROM movies
WHERE (title LIKE "Toy Story%" OR title LIKE "Harry Potter%")
AND length > 120;

-- Obtener todas las películas (movies) que tengan de rating “8.3”, “9.1” y “9.0”.
-- Ordenarlas como desee (usar rating).
SELECT *
FROM movies
WHERE rating = 8.3 OR rating = 9.1 OR rating = 9.0
ORDER BY rating ASC;

-- Obtener los campos “id” como “id_genero”, “name” como “nombre_genero” 
-- de la tabla generos (genres). Ordenarlo por nombre_genero de menor a mayor.
SELECT id as id_genero, name as nombre_genero
FROM genres
ORDER BY nombre_genero ASC
