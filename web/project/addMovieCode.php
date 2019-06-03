<?php
    session_start();
    include 'dbConnect.php';

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $directors = $_POST["director"];
    foreach ($directors as $dir)
    {
        $dir = test_input($dir);
    }

    $actors = $_POST["actor"];
    foreach ($actors as $act)
    {
        $act = test_input($act);
    }

    $movieName = test_input($_POST["movieName"]);
    $summary = test_input(str_replace("'", "''", $_POST["summary"]));
    $rated = test_input($_POST["rated"]);
    $genres = $_POST["genre"];

    $stmt = $db->prepare("SELECT movie_name FROM movie WHERE movie_name = '" . $movieName . "';");
    $stmt->execute();
    $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($resultSet))
    {
        //header("Location: addMovie.php?error=Movie exists in database already.");
    }
    else
    {
    $stmt = $db->prepare("INSERT INTO movie (movie_id, movie_name, movie_rating, picture_filepath, movie_summary)
                            VALUES (nextval('movie_s1'), '" . $movieName . "', '" . $rated . "', '', '" . $summary . "');");
    $stmt->execute();
    }

    // add the directors, if needed, to the director table
    foreach ($directors as $director)
    {
        $stmt = $db->prepare("SELECT director_name FROM director WHERE director_name = '" . $director . "'");
        $stmt->execute();

        $found = false;
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row)
        {
            if (strcmp($row["director_name"], $director) == 0)
            {
                $found = true;
                break;
            }
        }

        if (!$found)
        {
            $stmt = $db->prepare("INSERT INTO director (director_id, director_name)
                                    VALUES (nextval('director_s1'), '" . $director . "');");
            $stmt->execute();
        }
    }

    // add the actors, if needed, to the actor table
    foreach ($actors as $actor)
    {
        $stmt = $db->prepare("SELECT actor_name FROM starring_actor WHERE actor_name = '" . $actor . "'");
        $stmt->execute();

        $found = false;
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($rows as $row)
        {
            if (strcmp($row["actor_name"], $actor) == 0)
            {
                $found = true;
                break;
            }
        }

        if (!$found)
        {
            $stmt = $db->prepare("INSERT INTO starring_actor (actor_id, actor_name)
                                    VALUES (nextval('starring_actor_s1'), '" . $actor . "');");
            $stmt->execute();
        }
    }

    // connect the directors to the movie
    /*foreach ($directors as $director)
    {
        $stmt = $db->prepare("INSERT INTO movie_to_director (movie_director_id, movie_id, director_id)
                                VALUES (nextval('movie_to_director_s1'), (SELECT movie_id FROM movie WHERE movie_name = '" . $movieName . "'),
                                       (SELECT director_id FROM director WHERE director_name = '" . $director . "'));");
        $stmt->execute();
    }*/

    // connect the actors to the movie
    foreach ($actors as $actor)
    {
        $stmt = $db->prepare("INSERT INTO movie_to_starring_actor (movie_actor_id, movie_id, actor_id)
                                VALUES (nextval('movie_to_starring_actor_s1'), (SELECT movie_id FROM movie WHERE movie_name = '" . $movieName . "'),
                                       (SELECT actor_id FROM starring_actor WHERE actor_name = '" . $actor . "'));");
        $stmt->execute();
    }

    // connect the movie to its genres
    foreach ($genres as $genre)
    {
        $stmt = $db->prepare("INSERT INTO movie_to_genre (movie_genre_id, movie_id, genre_id)
                                VALUES (nextval('movie_to_genre_s1'), (SELECT movie_id FROM movie WHERE movie_name = '" . $movieName . "'),
                                       (SELECT genre_id FROM genre WHERE genre_type = '" . $genre . "'));");
        $stmt->execute();
    }

    header("Location: addMovie.php?success=Movie successfully added.");
?>