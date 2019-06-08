<?php
    session_start();
    include 'dbConnect.php';

    // check if there's a change to be made
    if (isset($_GET["id"]) && isset($_GET["name"]))
    {
        $stmt = $db->prepare(
            'UPDATE movie
             SET movie_name = :dName
             WHERE movie_id = :id');
        $stmt->execute(array(':dName' => $_GET["name"], ':id' => $_GET["id"]));
        header("Location: editMovieNames.php?success=true");
        die();
    }
    
    $stmt = $db->prepare(
        'SELECT movie.movie_name, movie.movie_id
         FROM movie');
    $stmt->execute();
    $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // get the search bar working right
    $search = false;
    if(isset($_GET["search"]))
    {
        $word = strtolower($_GET["search"]);
        $search = true;
    }

    if($search)
    {
        $i = 0;
        foreach ($movies as $rows)
        {
            if ((strpos(strtolower($rows["movie_name"]), $word) !== false))
            {
                $movies2[$i] = $rows;

                $i++;
            }
        }

        $movies = $movies2;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Movie Names</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

    <script>
        function editMovieName(movieId)
        {
            var name = prompt("Enter the name that you would like to change it to.");
            if (name != null)
            {
                var update = confirm("Are you sure you want to change the movie's name to '" + name + "?");

                if (update)
                {
                    window.location.href = "editMovieNames.php?id=" + movieId + "&name=" + name;
                }
            }
        }
    </script>
</head>
<body>
    <?php
        include 'navbar.php';
        echo '<script>document.getElementById("navbarSearch").action = "editMovieNames.php";</script>';
        
        if (isset($_GET["success"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>Successfully changed movie name.</strong>
            </div>';
        }

        echo '
        <div class="container">
            <h2 id="heading" class="text-center">Edit Movie Names</h2><br/>
            ';
                $i = 0;
                while ($i < sizeof($movies))
                {
                    echo '
                    <div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="movie' . $i . '" value="' . $movies[$i]["movie_name"] . '" onkeydown="return false;">
                        </div>
                        <div class="col-sm-3">
                            <button class="pull-left" style="font-size:20px; margin-bottom:50px;" onclick="editMovieName(\'' . $movies[$i]["movie_id"] . '\')"><i class="fa fa-edit"></i></button>
                        </div>
                    </div>';
                    $i++;
                }

            echo '
        </div>';
    ?>

</body>
</html>