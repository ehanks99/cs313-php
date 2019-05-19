CREATE TABLE movie
(
    movie_id             INTEGER,
    movie_name           VARCHAR(256)        CONSTRAINT nn_movie_name_1 NOT NULL,
    CONSTRAINT pk_movie PRIMARY KEY(movie_id)
);

CREATE SEQUENCE movie_s1 START WITH 1;

------------------------------------------

CREATE TABLE genre
(
    genre_id            INTEGER,
    genre_type          VARCHAR(100)        CONSTRAINT nn_genre_1 NOT NULL,
    CONSTRAINT pk_genre PRIMARY KEY(genre_id)
);

CREATE SEQUENCE genre_s1 START WITH 1;

------------------------------------------

CREATE TABLE director
(
    director_id         INTEGER,
    director_name       VARCHAR(50)         CONSTRAINT nn_director_1 NOT NULL,
    CONSTRAINT pk_director PRIMARY KEY(director_id)
);

CREATE SEQUENCE director_s1 START WITH 1;

------------------------------------------

CREATE TABLE actor
(
    actor_id            INTEGER,
    actor_name          VARCHAR(50)         CONSTRAINT nn_actor_1 NOT NULL,
    CONSTRAINT pk_actor PRIMARY KEY(actor_id)
);

CREATE SEQUENCE actor_s1 START WITH 1;

------------------------------------------

CREATE TABLE movie_genre
(
    movie_genre_id      INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_genre_1 NOT NULL,
    genre_id            INTEGER             CONSTRAINT nn_movie_genre_2 NOT NULL,
    CONSTRAINT pk_movie_genre PRIMARY KEY(movie_genre_id),
    CONSTRAINT fk_movie_genre_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_genre_2 FOREIGN KEY(genre_id) REFERENCES genre(genre_id)
);

CREATE SEQUENCE movie_genre_s1 START WITH 1;

------------------------------------------

CREATE TABLE movie_director
(
    movie_director_id   INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_director_1 NOT NULL,
    director_id         INTEGER             CONSTRAINT nn_movie_director_2 NOT NULL,
    CONSTRAINT pk_movie_director PRIMARY KEY(movie_director_id),
    CONSTRAINT fk_movie_director_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_director_2 FOREIGN KEY(director_id) REFERENCES director(director_id)
);

CREATE SEQUENCE movie_director_s1 START WITH 1;

------------------------------------------

CREATE TABLE movie_actor
(
    movie_actor_id      INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_actor_1 NOT NULL,
    actor_id            INTEGER             CONSTRAINT nn_movie_actor_2 NOT NULL,
    CONSTRAINT pk_movie_actor PRIMARY KEY(movie_actor_id),
    CONSTRAINT fk_movie_director_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_director_2 FOREIGN KEY(actor_id) REFERENCES actor(actor_id)
);

CREATE SEQUENCE movie_actor_s1 START WITH 1;
