<?php
    session_start();
    include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Movie</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

    <script>
        var id = 0;
        var actorId = 0;

        function addElement(parentId, elementTag, elementId, html) 
        {
            // Adds an element to the document
            var p = document.getElementById(parentId);
            var newElement = document.createElement(elementTag);
            newElement.setAttribute('id', elementId);
            newElement.innerHTML = html;
            p.appendChild(newElement);
        }

        function addDirector()
        {
            id++;
            var html = "<input type='text' class='form-control' name='director[]' id='director" + id + "'/><a href='' onclick='javascript:removeElement(\"director" + id + "\"); return false;'>Remove</a>";
            addElement('directors', 'p', 'director' + id, html);
        }

        function addSpecificDirector(name)
        {
            id++;
            var html = "<input type='text' class='form-control' name='director[]' id='director" + id + "' value='" + name + "'/><a href='' onclick='javascript:removeElement(\"director" + id + "\"); return false;'>Remove</a>";
            addElement('directors', 'p', 'director' + id, html);
        }
        
        function addActor()
        {
            actorId++;
            var html = "<input type='text' class='form-control' name='actor[]' id='actor" + actorId + "'/><a href='' onclick='javascript:removeElement(\"actor" + actorId + "\"); return false;'>Remove</a>";
            addElement('actors', 'p', 'actor' + actorId, html);
        }

        function removeElement(elementId) 
        {
            // Removes an element from the document
            var element = document.getElementById(elementId);
            element.parentNode.removeChild(element);
        }
    </script>
</head>
<body>
    <?php
        include 'navbar.php';

        if (isset($_GET["movie_name"]))
        {
            include 'movieInputOptions.php';

            $movie = $_GET["movie_name"];

            $stmt = $db->prepare(
                'SELECT movie.movie_rating, movie.movie_summary
                    FROM movie WHERE movie.movie_name = :movie;');
            $stmt->execute(array(':movie' => $movie));
            $movieInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt = $db->prepare(
                'SELECT director.director_name
                 FROM movie_to_director
                    INNER JOIN movie ON movie_to_director.movie_id = movie.movie_id
                    INNER JOIN director ON movie_to_director.director_id = director.director_id
                 WHERE movie.movie_name = :movie');
            $stmt->execute(array(':movie' => $movie));
            $directors = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt = $db->prepare(
                'SELECT starring_actor.actor_name
                 FROM movie_to_starring_actor
                    INNER JOIN movie ON movie_to_starring_actor.movie_id = movie.movie_id
                    INNER JOIN starring_actor ON movie_to_starring_actor.actor_id = starring_actor.actor_id
                 WHERE movie.movie_name = :movie');
            $stmt->execute(array(':movie' => $movie));
            $actors = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $stmt = $db->prepare(
                'SELECT genre.genre_type
                 FROM movie_to_genre
                    INNER JOIN movie ON movie_to_genre.movie_id = movie.movie_id
                    INNER JOIN genre ON movie_to_genre.genre_id = genre.genre_id
                 WHERE movie.movie_name = :movie');
            $stmt->execute(array(':movie' => $movie));
            $genres = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //fillTextFields();
            echo "\n<script>\n";
            echo "\tdocument.getElementById('movieName').value = '" . $movie . "';\n";
            echo "\tdocument.getElementById('rated').value = '" . $movieInfo["movie_rating"] . "';\n";
            echo "\tdocument.getElementById('summary').value = '" . $movieInfo["movie_summary"] . "';\n";

            $i = 1;
            echo "\tdocument.getElementById('director" . $i . "').value = '" . $directors[0]["director_name"] . "';\n";
            while($i != sizeof($directors))
            {
                echo "\taddSpecificDirector('" . $directors[$i]["director_name"] . "');\n";
                
                $i++;
            }
            
            $i = 0;
            foreach ($actors as $actor)
            {
                echo "\tdocument.getElementById('actor" . $i . "').value = '" . $actor["actor_name"] . "';\n";
                $i++;

                if ($i != sizeof($actors))
                    echo "\taddActor();\n";
            }
            
            $i = 0;
            foreach ($genres as $genre)
            {
                echo "\tdocument.getElementById('" . $genre["genre_type"] . "').checked = true;\n";
                $i++;
            }
            echo "</script>\n";
        }
        else
        {
            echo '<h2 class="text-center">Select a movie to edit</h2>
            <form class="form-horizontal" action="editMovie.php" method="get">
                <div class="form-group">
                    <div class="control-label col-sm-3"></div>
                    <div class="col-sm-6">
                        <select class="form-control" name="movie_name">
                            ';

                        $stmt = $db->prepare('SELECT movie_name FROM movie');
                        $stmt->execute();
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                        {
                            echo '<option>' . $row["movie_name"] . '</option>
                            ';
                        }

                            echo '
                        </select>
                    </div>
                    <div class="control-label col-sm-3"></div>
                </div>
                <div class="form-group">
                    <div class="control-label col-sm-3"></div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>';
        }
    ?>
    
</body>
</html>