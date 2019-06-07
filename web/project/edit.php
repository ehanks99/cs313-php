<?php
    // check if there's a change to be made
    if (isset($_GET["id"]) && isset($_GET["name"]))
    {
        if (isset($_GET["director"]))
        {
            $stmt = $db->prepare(
                'UPDATE director
                 SET director_name = :dName
                 WHERE director_id = :id');
            $stmt->execute(array(':dName' => $_GET["name"], ':id' => $_GET["id"]));
        }
        echo $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>