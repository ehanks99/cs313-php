<?php
    session_start();
    include 'dbConnect.php';

    if (isset($_GET["name"]))
    {
        $stmt = $db->prepare("INSERT INTO director (director_id, director_name)
                                VALUES (nextval('director_s1'), '" . $_GET["name"] . "');");
        $stmt->execute();
    }

    header("Location: editDirectors.php?addedSuccess=true");
    die();
?>