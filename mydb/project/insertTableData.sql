

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Drama');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Horror');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Action');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Adventure');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Fantasy');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Romance');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Science Fiction');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Thriller');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Mystery');
    
INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Suspense');

----------------------------------------

INSERT INTO movie (movie_id, movie_name)
    VALUES (nextval('movie_s1'), 'Jurassic World: Fallen Kingdom');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'J.A. Bayona');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT director_id FROM director WHERE director_name = 'J.A. Bayona'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Chris Pratt');
    
INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Bryce Dallas Howard');
    
INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Rafe Spall');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Chris Pratt'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Bryce Dallas Howard'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Rafe Spall'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adventure'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World: Fallen Kingdom'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Suspense'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name)
    VALUES (nextval('movie_s1'), 'Jurassic World');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Colin Trevorrow');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT director_id FROM director WHERE director_name = 'Colin Trevorrow'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Vincent D''Onofrio');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Chris Pratt'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Bryce Dallas Howard'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Vincent D''Onofrio'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Suspense'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Jurassic World'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Drama'));