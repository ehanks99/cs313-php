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

    /*
    $stmt = $db->prepare(
        'UPDATE movie
         SET movie.movie_name = :movieName, movie.movie_summary = :movieSummary, movie.movie_rating = :movieRating
         WHERE movie.movie_id = :id');
    $stmt->execute(array(':movieName' => $movieName, ':movieSummary' => $summary, ':movieRating' => $rated, ':id' => $movie_id));
    */

    
    /*
UPDATE Customers
SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
WHERE CustomerID = 1;
    */
?>