<?php
    session_start();
    include 'dbConnect.php';

    if (isset($_GET["name"]))
    {
        $stmt = $db->prepare("INSERT INTO genre (genre_id, genre_type)
                                    VALUES (nextval('genre_s1'), '" . $_GET["name"] . "');");
        $stmt->execute();
    }

    header("Location: editGenres.php?addedSuccess=true");
    die();
?>