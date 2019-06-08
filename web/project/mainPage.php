<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Rentals</title>

    <link rel = "stylesheet" type = "text/css" href = "new.css">

</head>
<body>
    <?php
        include 'navbar.php';

        if (isset($_GET["success"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>' . $_GET["success"] . '</strong>
            </div>';
        }
    ?>

    <h2 class = "text-center">Movie Selections</h2><br/><br/><hr>

    <?php
        $p = 0;
        $admin = false;
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true && $_SESSION["isAdmin"] == "T")
        {
            $admin = true;
        }

        foreach ($movies as $rows)
        {
            echo '<div class="row">
                <div class="col-md-2"><p></p></div>
                    <div class="col-md-8">
                        <div class = "pull-left">
                            <img src = "movie_pictures/' . $rows["picture_filepath"] . '" class = "picture">
                        </div>
                        <div>
                            <button class = "pull-right" style="font-size:20px; margin-bottom:50px;" onclick="editMovie(\'' . $rows['movie_name'] . '\')"><i class="fa fa-edit"></i></button>
                            <h4>' . $rows['movie_name'] . '</h4><hr>
                            <h5><b>Director(s): </b>';
                            $directors = $rows["directors"];
                            for ($j = 0; $j < count($directors); $j++)
                            {
                                echo $directors[$j];
                                if ($j != count($directors) - 1)
                                    echo ', ';
                            }
                            echo '</h5>
                            <h5><b>Starring Actors: </b>';
                            $actors = $rows["actors"];
                            for ($j = 0; $j < count($actors); $j++)
                            {
                                echo $actors[$j];
                                if ($j != count($actors) - 1)
                                    echo ', ';
                            }
                            echo '</h5>
                            <h5><b>Genres: </b>';
                            $genres = $rows["genres"];
                            for ($j = 0; $j < count($genres); $j++)
                            {
                                echo $genres[$j];
                                if ($j != count($genres) - 1)
                                    echo ', ';
                            }
                            echo '</h5><br/>
                            
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="button" class="btn btn-secondary" onclick="goToDetails(\'' . $rows['movie_name'] . '\')">View Details</button>
                            ';
                            if ($admin)
                            {
                                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" onclick="removeMovie(\'' . $rows['movie_name'] . '\')">Delete Movie</button>';
                            }
                        echo '</div>
                        <hr>
                    </div>
                </div>';
            $p++;
        }
    ?>
</body>
</html>