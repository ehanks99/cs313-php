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

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

    <?php
        include 'grabData.php';

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
                if ((strpos(strtolower($rows["movie_name"]), $word) !== false) || 
                    (strpos(strtolower($rows["movie_summary"]), $word) !== false) ||
                    (strpos(strtolower($rows["movie_rating"]), $word) !== false))
                {
                    $movies2[$i] = $rows;
                }
                else
                {
                    foreach($rows["directors"] as $data)
                    {
                        if (strpos(strtolower($data), $word) !== false)
                        {
                            $movies2[$i] = $rows;
                        }
                    }
                    foreach($rows["actors"] as $data)
                    {
                        if (strpos(strtolower($data), $word) !== false)
                        {
                            echo strtolower($data);
                            $movies2[$i] = $rows;
                        }
                    }
                    foreach($rows["genres"] as $data)
                    {
                        if (strpos(strtolower($data), $word) !== false)
                        {
                            $movies2[$i] = $rows;
                        }
                    }
                }

                $i++;
            }

            $movies = $movies2;
        }
    ?>
    <script>
        function goToDetails(movie_name)
        {
            window.location.href = ("detailsPage.php?movie_name=" + movie_name);
        }

        function removeMovie(movie_name)
        {
            var del = confirm("Are you sure you want to delete the movie '" + movie_name + "'??");

            if (del)
            {
                window.location.href = ("removeMovie.php?movie_name=" + movie_name);
            }
        }

        function editMovie(movie_name)
        {
            var edit = confirm("Are you sure you want to edit the movie '" + movie_name + "'?");

            if (edit)
            {
                window.location.href = ("editMovie.php?movie_name=" + movie_name);
            }
        }
    </script>
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

</body>
</html>