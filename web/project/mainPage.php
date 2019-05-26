<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Activity 05</title>

    <?php
        include 'dbConnect.php';

        if (isset($db))
        {
            //$movies = array();
            /*$statement = $db->prepare('      
                SELECT movie.movie_name, movie.movie_rating, movie.picture_filepath,
                       genre.genre_type, director.director_name, starring_actor.actor_name
                FROM movie
                    INNER JOIN movie_to_genre ON movie_to_genre.movie_id = movie.movie_id
                    INNER JOIN genre ON movie_to_genre.genre_id = genre.genre_id

                    INNER JOIN movie_to_starring_actor ON movie_to_starring_actor.movie_id = movie.movie_id
                    INNER JOIN starring_actor ON movie_to_starring_actor.actor_id = starring_actor.actor_id

                    INNER JOIN movie_to_director ON movie_to_director.movie_id = movie.movie_id
                    INNER JOIN director ON movie_to_director.director_id = director.director_id;');
            */
            $statement = $db->prepare(
                'SELECT movie.movie_id, movie.movie_name, movie.movie_rating, movie.picture_filepath
                 FROM movie;');
            $statement->execute();
            $i = 0;
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $movies[$i]["movie_id"] = $row['movie_id'];
                $movies[$i]["movie_name"] = $row['movie_name'];
                $movies[$i]["movie_rating"] = $row['movie_rating'];
                $movies[$i]["picture_filepath"] = $row['picture_filepath'];
            }

            for ($j = 0; $j < count($movies); $j++)
            {
                $directors = array();
                $stmt = $db->prepare(
                    "SELECT director.director_name
                     FROM movie_to_director
                        INNER JOIN movie_to_director ON movie_to_drector.movie_id = movie.movie_id
                        INNER JOIN director ON movie_to_director.director_id = director.director_id
                     WHERE movie_id = $movies[$j]['movie_id'];");
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($directors, $row["director_name"]);
                }

                $movies[$i]["directors"] = $directors;
            }
        }
    ?>
</head>
<body>


</body>
</html>