<?php
    session_start();
    include 'dbConnect.php';

    if (isset($_GET["name"]))
    {
        $stmt = $db->prepare("INSERT INTO starring_actor (actor_id, actor_name)
                                    VALUES (nextval('starring_actor_s1'), '" . $_GET["name"] . "');");
        $stmt->execute();
    }

    header("Location: editActors.php?addedSuccess=true");
    die();
?>