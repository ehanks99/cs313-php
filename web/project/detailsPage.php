<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie Details</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
        include 'grabData.php';
    ?>

</head>
<body>
    <?php
        include 'navbar.php';

        // find the location of the movie name given to us inside the movie array
        $movie = $_GET["movie_name"];
        $location = 0;
        for ($i = 0; $i < count($movies); $i++)
        {
            //if (strcmp($movies[$i]["movie_name"], $movie))
            if ($movies[$i]["movie_name"] == $movie)
            {
                $location = $i;
                break;
            }
        }

        echo '<div class="col-md-2"><p></p></div>
                    <div class="col-md-8">
                    <h3 class = "text-center">' . $movies[$location]['movie_name'] . '</h3><hr>
                        <div class = "pull-left">
                            <img src = "movie_pictures/' . $movies[$location]["picture_filepath"] . '" class = "main-picture">
                        </div>
                        <div>
                            <p>' . $movies[$location]['movie_summary'] . '</p><br/>
                            <h5><b>Director(s): </b>';
                            $directors = $movies[$location]["directors"];
                            for ($j = 0; $j < count($directors); $j++)
                            {
                                echo $directors[$j];
                                if ($j != count($directors) - 1)
                                    echo ', ';
                            }
                            echo '</h5>
                            <h5><b>Starring Actors: </b>';
                            $actors = $movies[$location]["actors"];
                            for ($j = 0; $j < count($actors); $j++)
                            {
                                echo $actors[$j];
                                if ($j != count($actors) - 1)
                                    echo ', ';
                            }
                            echo '</h5>
                            <h5><b>Genres: </b>';
                            $genres = $movies[$location]["genres"];
                            for ($j = 0; $j < count($genres); $j++)
                            {
                                echo $genres[$j];
                                if ($j != count($genres) - 1)
                                    echo ', ';
                            }
                            echo '</h5><br/>
                            
                        </div>
                        <hr>
                    </div>
                </div>';
    ?>
</body>
</html>