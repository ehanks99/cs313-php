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
            $statement = $db->prepare('SELECT * FROM scriptures WHERE book=:book');
            $statement->execute(array(':book' => $book));
            $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    ?>
</head>
<body>


</body>
</html>


SELECT movie.movie_name, movie.movie_summary, movie.movie_rating, movie.picture_filepath,
       genre.genre_type, director.director_name, starring_actor.actor_name
FROM movie
    INNER JOIN movie_to_genre ON movie_to_genre.movie_id = movie.movie_id
    INNER JOIN genre ON movie_to_genre.genre_id = genre.genre_id

    INNER JOIN movie_to_starring_actor ON movie_to_starring_actor.movie_id = movie.movie_id
    INNER JOIN starring_actor ON movie_to_starring_actor.actor_id = starring_actor.actor_id

    INNER JOIN movie_to_director ON movie_to_director.movie_id = movie.movie_id
    INNER JOIN director ON movie_to_director.director_id = director.director_id;