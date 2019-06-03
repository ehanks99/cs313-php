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
    $genres = $_POST["genre"];


?>