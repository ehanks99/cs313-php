

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

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Comedy');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Kids');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Western');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Animation');

INSERT INTO genre (genre_id, genre_type)
    VALUES (nextval('genre_s1'), 'Adult Interest');

----------------------------------------

INSERT INTO movie (movie_id, movie_name)
    VALUES (nextval('movie_s1'), 'Jurassic World: Fallen Kingdom', 'Three years after the destruction of the Jurassic World theme park, Owen Grady and Claire Dearing return to the island of Isla Nublar to save the remaining dinosaurs from a volcano that''s about to erupt. They soon encounter terrifying new breeds of gigantic dinosaurs, while uncovering a conspiracy that threatens the entire planet.');

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

INSERT INTO movie (movie_id, movie_name, movie_summary)
    VALUES (nextval('movie_s1'), 'Jurassic World', 'Located off the coast of Costa Rica, the Jurassic World luxury resort provides a habitat for an array of genetically engineered dinosaurs, including the vicious and intelligent Indominus rex. When the massive creature escapes, it sets off a chain reaction that causes the other dinos to run amok. Now, it''s up to a former military man and animal expert (Chris Pratt) to use his special skills to save two young brothers and the rest of the tourists from an all-out, prehistoric assault.');

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

----------------------------------------

INSERT INTO movie (movie_id, movie_name)
    VALUES (nextval('movie_s1'), 'Guardians of the Galaxy', 'Brash space adventurer Peter Quill (Chris Pratt) finds himself the quarry of relentless bounty hunters after he steals an orb coveted by Ronan, a powerful villain. To evade Ronan, Quill is forced into an uneasy truce with four disparate misfits: gun-toting Rocket Raccoon, treelike-humanoid Groot, enigmatic Gamora, and vengeance-driven Drax the Destroyer. But when he discovers the orb''s true power and the cosmic threat it poses, Quill must rally his ragtag group to save the universe.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'James Gunn');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT director_id FROM director WHERE director_name = 'James Gunn'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Zoe Saldana');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Dave Bautista');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Chris Pratt'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Zoe Saldana'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Dave Bautista'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Guardians of the Galaxy'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adventure'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_summary)
    VALUES (nextval('movie_s1'), 'The Apple Dumpling Gang', 'After three poor orphans are sent to live with gambler Russell Donovan (Bill Bixby), they discover they have actually inherited a large fortune from their dead father. Soon a series of greedy undesirables shows up. They try to get their hands on the money, so, in order to keep things uncomplicated, the kids decide to give their inheritance to a lovable outlaw duo, Theodore (Don Knotts) and Amos (Tim Conway). But there is only one problem -- the gold is locked away in a bank vault.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Norman Tokar');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT director_id FROM director WHERE director_name = 'Norman Tokar'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Don Knotts');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Susan Clark');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Bill Bixby');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Don Knotts'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Susan Clark'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Bill Bixby'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Kids'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Western'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_summary)
    VALUES (nextval('movie_s1'), 'The Cat From Outer Space', 'A UFO captained by a cat-like extraterrestrial (Ronnie Schell) is intercepted by the U.S. Military. The spacecraft''s feline pilot, who goes by the human name Jake, reveals to his captors that he must locate a substance called "Org 12" to restore his battered spacecraft and reunite with his mothership. With help from scientist Frank Wilson (Ken Berry), Jake figures out the Earth equivalent of Org 12 -- gold -- and then activates his collar''s technological capabilities to help retrieve it.');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT director_id FROM director WHERE director_name = 'Norman Tokar'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Ken Berry');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Sandy Duncan');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Harry Morgan');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Ken Berry'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Sandy Duncan'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Harry Morgan'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Kids'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Comedy'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Cat From Outer Space'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_summary)
    VALUES (nextval('movie_s1'), 'Rise Of the Guardians', 'Generation after generation, immortal Guardians like Santa Claus (Alec Baldwin), the Easter Bunny (Hugh Jackman) and the Tooth Fairy (Isla Fisher) protect the world''s children from darkness and despair. However, an evil boogeyman named Pitch Black (Jude Law) schemes to overthrow the Guardians by obliterating children''s belief in them. It falls to a winter sprite named Jack Frost (Chris Pine) to thwart Pitch''s plans and save the Guardians from destruction.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Peter Ramsey');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT director_id FROM director WHERE director_name = 'Peter Ramsey'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Chris Pine');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Alec Baldwin');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Jude Law');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Chris Pine'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Alec Baldwin'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Jude Law'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Kids'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Animation'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adult Interest'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Rise Of the Guardians'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

----------------------------------------


