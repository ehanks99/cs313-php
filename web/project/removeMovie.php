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

    $movie = test_input($_GET["movie_name"]);

    // should get just one row from this SELECT statement
    $stmt = $db->prepare("SELECT movie_id FROM movie WHERE movie_name = '" . $movie . "'");
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // remove connection from movie to directors (don't remove the directors though!)
    $stmt = $db->prepare("DELETE FROM movie_to_director WHERE movie_id = '" . $rows[0]["movie_id"] . "';");
    $stmt->execute();

    // remove connection from movie to actors (don't remove the actors though!)
    $stmt = $db->prepare("DELETE FROM movie_to_starring_actor WHERE movie_id = '" . $rows[0]["movie_id"] . "';");
    $stmt->execute();

    // remove connection from movie to genres (don't remove the genres though!)
    $stmt = $db->prepare("DELETE FROM movie_to_genre WHERE movie_id = '" . $rows[0]["movie_id"] . "';");
    $stmt->execute();

    // finally, remove the movie from the database
    $stmt = $db->prepare("DELETE FROM movie WHERE movie_id = '" . $rows[0]["movie_id"] . "';");
    $stmt->execute();

    // change the page
    header("Location: mainPage.php?success='" . $movie . "' was removed successfully.");
    die(); // we always include a die after redirects.
?>