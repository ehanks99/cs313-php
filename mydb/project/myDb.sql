CREATE TABLE movie
(
    movie_id                INTEGER,
    picture_filepath        VARCHAR(50),
    movie_name              VARCHAR(256)        CONSTRAINT nn_movie_1 NOT NULL,
    movie_summary           VARCHAR(1000)       CONSTRAINT nn_movie_2 NOT NULL,
    movie_rating            VARCHAR(6)          CONSTRAINT nn_movie_3 NOT NULL,
    CONSTRAINT pk_movie PRIMARY KEY(movie_id)
);

CREATE SEQUENCE movie_s1 START WITH 1;
-- to create a unique index    ---    CREATE UNIQUE INDEX index_name ON table_name(column_names);
CREATE UNIQUE INDEX ui_movie_1 ON movie(movie_name);

------------------------------------------

CREATE TABLE genre
(
    genre_id            INTEGER,
    genre_type          VARCHAR(100)        CONSTRAINT nn_genre_1 NOT NULL,
    CONSTRAINT pk_genre PRIMARY KEY(genre_id)
);

CREATE SEQUENCE genre_s1 START WITH 1;
CREATE UNIQUE INDEX ui_genre_1 ON genre(genre_type);

------------------------------------------

CREATE TABLE director
(
    director_id         INTEGER,
    director_name       VARCHAR(50)         CONSTRAINT nn_director_1 NOT NULL,
    CONSTRAINT pk_director PRIMARY KEY(director_id)
);

CREATE SEQUENCE director_s1 START WITH 1;
CREATE UNIQUE INDEX ui_director_1 ON director(director_name);

------------------------------------------

CREATE TABLE starring_actor
(
    actor_id            INTEGER,
    actor_name          VARCHAR(50)         CONSTRAINT nn_actor_1 NOT NULL,
    CONSTRAINT pk_starring_actor PRIMARY KEY(actor_id)
);

CREATE SEQUENCE starring_actor_s1 START WITH 1;
CREATE UNIQUE INDEX ui_starring_actor_1 ON starring_actor(actor_name);

------------------------------------------

CREATE TABLE movie_to_genre
(
    movie_genre_id      INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_genre_1 NOT NULL,
    genre_id            INTEGER             CONSTRAINT nn_movie_genre_2 NOT NULL,
    CONSTRAINT pk_movie_to_genre PRIMARY KEY(movie_genre_id),
    CONSTRAINT fk_movie_to_genre_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_to_genre_2 FOREIGN KEY(genre_id) REFERENCES genre(genre_id)
);

CREATE SEQUENCE movie_to_genre_s1 START WITH 1;
CREATE UNIQUE INDEX ui_movie_to_genre_1 ON movie_to_genre(movie_id, genre_id);

------------------------------------------

CREATE TABLE movie_to_director
(
    movie_director_id   INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_director_1 NOT NULL,
    director_id         INTEGER             CONSTRAINT nn_movie_director_2 NOT NULL,
    CONSTRAINT pk_movie_to_director PRIMARY KEY(movie_director_id),
    CONSTRAINT fk_movie_to_director_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_to_director_2 FOREIGN KEY(director_id) REFERENCES director(director_id)
);

CREATE SEQUENCE movie_to_director_s1 START WITH 1;
CREATE UNIQUE INDEX ui_movie_to_director_1 ON movie_to_director(movie_id, director_id);

------------------------------------------

CREATE TABLE movie_to_starring_actor
(
    movie_actor_id      INTEGER,
    movie_id            INTEGER             CONSTRAINT nn_movie_actor_1 NOT NULL,
    actor_id            INTEGER             CONSTRAINT nn_movie_actor_2 NOT NULL,
    CONSTRAINT pk_movie_to_starring_actor PRIMARY KEY(movie_actor_id),
    CONSTRAINT fk_movie_to_starring_actor_1 FOREIGN KEY(movie_id) REFERENCES movie(movie_id),
    CONSTRAINT fk_movie_to_starring_actor_2 FOREIGN KEY(actor_id) REFERENCES starring_actor(actor_id)
);

CREATE SEQUENCE movie_to_starring_actor_s1 START WITH 1;
CREATE UNIQUE INDEX ui_movie_to_starring_actor_1 ON movie_to_starring_actor(movie_id, actor_id);

------------------------------------------

CREATE TABLE login_info
(
    login_info_id       INTEGER,
    username            VARCHAR(70)         CONSTRAINT nn_login_info_1 NOT NULL,
    pswrd               VARCHAR(100)        CONSTRAINT nn_login_info_2 NOT NULL,
    email               VARCHAR(100)        CONSTRAINT nn_login_info_3 NOT NULL,
    first_name          VARCHAR(100)        CONSTRAINT nn_login_info_4 NOT NULL,
    last_name           VARCHAR(100)        CONSTRAINT nn_login_info_5 NOT NULL,
    is_admin            VARCHAR(1)          CONSTRAINT nn_login_info_6 NOT NULL,
    CONSTRAINT pk_login_info PRIMARY KEY(login_info_id)
);

CREATE SEQUENCE login_info_s1 START WITH 1;
CREATE UNIQUE INDEX ui_login_info_1 ON login_info(username);
--CREATE UNIQUE INDEX ui_login_info_2 ON login_info(email);

INSERT INTO login_info (login_info_id, username, pswrd, email, first_name, last_name, is_admin)
    VALUES (nextval('login_info_s1'), 'admin', 'admin', 'fake_email@gmail.com', 'John', 'Smith', 'T');
------------------------------------------


-- to select all the data
SELECT movie.movie_name, movie.movie_summary, movie.movie_rating, movie.picture_filepath,
       genre.genre_type, director.director_name, starring_actor.actor_name
FROM movie
    INNER JOIN movie_to_genre ON movie_to_genre.movie_id = movie.movie_id
    INNER JOIN genre ON movie_to_genre.genre_id = genre.genre_id

    INNER JOIN movie_to_starring_actor ON movie_to_starring_actor.movie_id = movie.movie_id
    INNER JOIN starring_actor ON movie_to_starring_actor.actor_id = starring_actor.actor_id

    INNER JOIN movie_to_director ON movie_to_director.movie_id = movie.movie_id
    INNER JOIN director ON movie_to_director.director_id = director.director_id;
