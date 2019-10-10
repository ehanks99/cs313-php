
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

INSERT INTO rating (rating_id, rating_name)
    VALUES (nextval('rating_s1'), 'PG');

INSERT INTO rating (rating_id, rating_name)
    VALUES (nextval('rating_s1'), 'PG-13');

INSERT INTO rating (rating_id, rating_name)
    VALUES (nextval('rating_s1'), 'G');

INSERT INTO rating (rating_id, rating_name)
    VALUES (nextval('rating_s1'), 'TV-MA');
    
INSERT INTO rating (rating_id, rating_name)
    VALUES (nextval('rating_s1'), 'NC-17');

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Jurassic World: Fallen Kingdom', 'PG-13', 'jurassic_world_2.jpg',
            'Three years after the destruction of the Jurassic World theme park, Owen Grady and Claire Dearing return to the island of Isla Nublar to save the remaining dinosaurs from a volcano that''s about to erupt. They soon encounter terrifying new breeds of gigantic dinosaurs, while uncovering a conspiracy that threatens the entire planet.');

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Jurassic World', 'PG-13', 'jurassic_world_1.jpg',
            'Located off the coast of Costa Rica, the Jurassic World luxury resort provides a habitat for an array of genetically engineered dinosaurs, including the vicious and intelligent Indominus rex. When the massive creature escapes, it sets off a chain reaction that causes the other dinos to run amok. Now, it''s up to a former military man and animal expert (Chris Pratt) to use his special skills to save two young brothers and the rest of the tourists from an all-out, prehistoric assault.');

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Guardians of the Galaxy', 'PG-13', 'guardians_of_the_galaxy.jpg',
            'Brash space adventurer Peter Quill (Chris Pratt) finds himself the quarry of relentless bounty hunters after he steals an orb coveted by Ronan, a powerful villain. To evade Ronan, Quill is forced into an uneasy truce with four disparate misfits: gun-toting Rocket Raccoon, treelike-humanoid Groot, enigmatic Gamora, and vengeance-driven Drax the Destroyer. But when he discovers the orb''s true power and the cosmic threat it poses, Quill must rally his ragtag group to save the universe.');

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'The Apple Dumpling Gang', 'G', 'apple_dumpling_gang.jpg', 
            'After three poor orphans are sent to live with gambler Russell Donovan (Bill Bixby), they discover they have actually inherited a large fortune from their dead father. Soon a series of greedy undesirables shows up. They try to get their hands on the money, so, in order to keep things uncomplicated, the kids decide to give their inheritance to a lovable outlaw duo, Theodore (Don Knotts) and Amos (Tim Conway). But there is only one problem -- the gold is locked away in a bank vault.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Norman Tokar');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT director_id FROM director WHERE director_name = 'Norman Tokar'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Don Knotts');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Tim Conway');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Susan Clark');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Bill Bixby');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Don Knotts'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Apple Dumpling Gang'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Tim Conway'));

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'The Cat From Outer Space', 'G', 'cat_from_outer_space.jpg',
            'A UFO captained by a cat-like extraterrestrial (Ronnie Schell) is intercepted by the U.S. Military. The spacecraft''s feline pilot, who goes by the human name Jake, reveals to his captors that he must locate a substance called "Org 12" to restore his battered spacecraft and reunite with his mothership. With help from scientist Frank Wilson (Ken Berry), Jake figures out the Earth equivalent of Org 12 -- gold -- and then activates his collar''s technological capabilities to help retrieve it.');

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Rise Of the Guardians', 'PG', 'rise_of_the_guardians.jpg',
            'Generation after generation, immortal Guardians like Santa Claus (Alec Baldwin), the Easter Bunny (Hugh Jackman) and the Tooth Fairy (Isla Fisher) protect the world''s children from darkness and despair. However, an evil boogeyman named Pitch Black (Jude Law) schemes to overthrow the Guardians by obliterating children''s belief in them. It falls to a winter sprite named Jack Frost (Chris Pine) to thwart Pitch''s plans and save the Guardians from destruction.');

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

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'The Mummy (1999)', 'PG-13', 'the_mummy.jpg',
            'The Mummy is a rousing, suspenseful and horrifying epic about an expedition of treasure-seeking explorers in the Sahara Desert in 1925. Stumbling upon an ancient tomb, the hunters unwittingly set loose a 3,000-year-old legacy of terror, which is embodied in the vengeful reincarnation of an Egyptian priest who had been sentenced to an eternity as one of the living dead.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Stephen Sommers');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT director_id FROM director WHERE director_name = 'Stephen Sommers'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Brendan Fraser');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Rachel Weisz');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'John Hannah');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Brendan Fraser'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Rachel Weisz'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'John Hannah'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adventure'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Drama'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Horror'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Mummy (1999)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Suspense'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Star Trek (2009)', 'PG-13', 'star_trek.jpg',
            'Aboard the USS Enterprise, the most-sophisticated starship ever built, a novice crew embarks on its maiden voyage. Their path takes them on a collision course with Nero (Eric Bana), a Romulan commander whose mission of vengeance threatens all mankind. If humanity would survive, a rebellious young officer named James T. Kirk (Chris Pine) and a coolly logical Vulcan named Spock (Zachary Quinto) must move beyond their rivalry and find a way to defeat Nero before it is too late.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'J.J. Abrams');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT director_id FROM director WHERE director_name = 'J.J. Abrams'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Zachary Quinto');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Simon Pegg');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Chris Pine'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Zachary Quinto'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Simon Pegg'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Drama'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Star Trek (2009)'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'The Lord Of The Rings: The Fellowship Of The Ring', 'PG-13', 'lord_of_the_rings_1.jpg',
            'The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Peter Jackson');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT director_id FROM director WHERE director_name = 'Peter Jackson'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Elijah Wood');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Ian Mckellen');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Liv Tyler');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Elijah Wood'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Ian Mckellen'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Liv Tyler'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord Of The Rings: The Fellowship Of The Ring'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Lord of the Rings: The Two Towers', 'PG-13', 'lord_of_the_rings_2.jpg',
            'The sequel to the Golden Globe-nominated and AFI Award-winning "The Lord of the Rings: The Fellowship of the Ring," "The Two Towers" follows the continuing quest of Frodo (Elijah Wood) and the Fellowship to destroy the One Ring. Frodo and Sam (Sean Astin) discover they are being followed by the mysterious Gollum. Aragorn (Viggo Mortensen), the Elf archer Legolas and Gimli the Dwarf encounter the besieged Rohan kingdom, whose once great King Theoden has fallen under Saruman''s deadly spell.');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT director_id FROM director WHERE director_name = 'Peter Jackson'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Elijah Wood'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Ian Mckellen'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Liv Tyler'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Science Fiction'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Lord of the Rings: The Two Towers'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'The Lord of the Rings: The Return of the King', 'PG-13', 'lord_of_the_rings_3.jpg',
            'The culmination of nearly 10 years'' work and conclusion to Peter Jackson''s epic trilogy based on the timeless J.R.R. Tolkien classic, "The Lord of the Rings: The Return of the King" presents the final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Hobbits Frodo and Sam reach Mordor in their quest to destroy the ''one ring'', while Aragorn leads the forces of good against Sauron''s evil army at the stone city of Minas Tirith.');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT director_id FROM director WHERE director_name = 'Peter Jackson'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Elijah Wood'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Ian Mckellen'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Liv Tyler'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adventure'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'The Lord of the Rings: The Return of the King'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Fantasy'));

----------------------------------------

INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
    VALUES (nextval('movie_s1'), 'Kung Fu Panda', 'PG', 'kung_fu_panda.jpg',
            'Po might just be the laziest, clumsiest panda in the Valley of Peace, but he secretly dreams of becoming a kung fu legend. When the villainous snow leopard Tai Lung threatens Po''s homeland, the hapless panda is chosen to fulfil an ancient prophecy and defend the Valley from attack. Training under Master Shifu, Po embarks on an epic high-kicking adventure as he sets out to thwart Tai Lung''s evil plans.');

INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'Mark Osborne');
    
INSERT INTO director (director_id, director_name)
    VALUES (nextval('director_s1'), 'John Stevenson');

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT director_id FROM director WHERE director_name = 'Mark Osborne'));

INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
    VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT director_id FROM director WHERE director_name = 'John Stevenson'));

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Jack Black');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Dustin Hoffman');

INSERT INTO starring_actor (actor_id, actor_name)
    VALUES (nextval('starring_actor_s1'), 'Angelina Jolie');

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Jack Black'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Dustin Hoffman'));

INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
    VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT actor_id FROM starring_actor WHERE actor_name = 'Angelina Jolie'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Action'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Adventure'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Comedy'));

INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
    VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = 'Kung Fu Panda'),
            (SELECT genre_id FROM genre WHERE genre_type = 'Kids'));

----------------------------------------








