
    <?php
        include 'dbConnect.php';

        if (isset($db))
        {
            $statement = $db->prepare(
                'SELECT movie.movie_id, movie.movie_name, movie.movie_rating, movie.picture_filepath, movie.movie_summary
                 FROM movie;');
            $statement->execute();
            $i = 0;
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                //echo '<p>' . $row["movie_name"] . '</p>';
                $movies[$i]["movie_id"] = $row['movie_id'];
                $movies[$i]["movie_name"] = $row['movie_name'];
                $movies[$i]["movie_rating"] = $row['movie_rating'];
                $movies[$i]["movie_summary"] = $row['movie_summary'];
                $movies[$i]["picture_filepath"] = $row['picture_filepath'];
                $i++;
            }

            for ($j = 0; $j < count($movies); $j++)
            {
                $movie_id = $movies[$j]["movie_id"];

                $directors = array();
                $actors = array();
                $genres = array();
                
                $stmt = $db->prepare(
                    'SELECT director.director_name
                     FROM movie_to_director
                        INNER JOIN movie ON movie_to_director.movie_id = movie.movie_id
                        INNER JOIN director ON movie_to_director.director_id = director.director_id
                     WHERE movie.movie_id = :id');
                $stmt->execute(array(':id' => $movie_id));
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($directors, $row["director_name"]);
                }
                $movies[$j]["directors"] = $directors;

                $stmt = $db->prepare(
                    'SELECT starring_actor.actor_name
                     FROM movie_to_starring_actor
                        INNER JOIN movie ON movie_to_starring_actor.movie_id = movie.movie_id
                        INNER JOIN starring_actor ON movie_to_starring_actor.actor_id = starring_actor.actor_id
                     WHERE movie.movie_id = :id');
                $stmt->execute(array(':id' => $movie_id));
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($actors, $row["actor_name"]);
                }
                $movies[$j]["actors"] = $actors;

                $stmt = $db->prepare(
                    'SELECT genre.genre_type
                     FROM movie_to_genre
                        INNER JOIN movie ON movie_to_genre.movie_id = movie.movie_id
                        INNER JOIN genre ON movie_to_genre.genre_id = genre.genre_id
                        WHERE movie.movie_id = :id');
                $stmt->execute(array(':id' => $movie_id));
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    array_push($genres, $row["genre_type"]);
                }
                $movies[$j]["genres"] = $genres;
            }
        }
    ?>