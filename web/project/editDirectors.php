<?php
    session_start();
    include 'dbConnect.php';

    
    $stmt = $db->prepare(
        'SELECT director.director_name
         FROM movie_to_director
            INNER JOIN movie ON movie_to_director.movie_id = movie.movie_id
            INNER JOIN director ON movie_to_director.director_id = director.director_id
         WHERE movie.movie_id = :id');
    $stmt->execute(array(':id' => $movie_id));
    $directors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Directors</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

</head>
<body>
    <?php
        echo '
        <div class="container">
            <h2 id="heading" class="text-center">Edit Director Names</h2><br/>
            <div class="form-group">
                ';
                $i = 0;
                while ($i < sizeof($directors))
                {
                    echo '<div class="col-sm-10">
                    <input type="text" class="form-control" id="director' . $i . '" value="' . $directors[$i]["director_name"] . '" disabled>
                    </div>';
                    $i++;
                }


                //<div class="col-sm-10">
                //    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                //</div>
            echo '</div>
        </div>';
    ?>

</body>
</html>