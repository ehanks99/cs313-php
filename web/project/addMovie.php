<?php
    session_start();
    include 'dbConnect.php';
    
    $stmt = $db->prepare(
        'SELECT director.director_name, director.director_id
         FROM director');
    $stmt->execute();
    $directorsHere = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare(
        'SELECT starring_actor.actor_name, starring_actor.actor_id
         FROM starring_actor');
    $stmt->execute();
    $actorsHere = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare(
        'SELECT rating.rating_name, rating.rating_id
         FROM rating');
    $stmt->execute();
    $ratingsHere = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Movie</title>

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
            //var html = "<input type='text' class='form-control' name='director[]' id='director" + id + "'/><a href='' onclick='javascript:removeElement(\"director" + id + "\"); return false;'>Remove</a>";
            var html = "<select class='form-control' name='director[]' id='director" + id + "'/>" + 
                        <?php
                            echo "\"";
                            foreach($directorsHere as $director)
                            {
                                echo "<option>" . $director["director_name"] . "</option>";
                            }
                            echo "\"";
                        ?>
                    + "</select><a href='' onclick='javascript:removeElement(\"director" + id + "\"); return false;'>Remove</a>";
            addElement('directors', 'p', 'director' + id, html);
        }
        
        function addActor()
        {
            actorId++;
            //var html = "<input type='text' class='form-control' name='actor[]' id='actor" + actorId + "'/><a href='' onclick='javascript:removeElement(\"actor" + actorId + "\"); return false;'>Remove</a>";
            var html = "<select class='form-control' name='actor[]' id='actor" + actorId + "'/>" + 
                        <?php
                            echo "\"";
                            foreach($actorsHere as $actor)
                            {
                                echo "<option>" . $actor["actor_name"] . "</option>";
                            }
                            echo "\"";
                        ?>
                    + "</select><a href='' onclick='javascript:removeElement(\"actor" + actorId + "\"); return false;'>Remove</a>";

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
        include 'dbConnect.php';

        if (isset($_GET["success"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>' . $_GET["success"] . '</strong>
            </div>';
        }

        if (isset($_GET["error"]))
        {
            echo '
            <div class="alert alert-danger text-center">
              <strong>ERROR: </strong>' . $_GET["error"] . '
            </div>';
        }

        include 'movieInputOptions.php';
    ?>
<!--
    <div class="container">
        <h2 class="text-center">Add a Movie to the List</h2><br/>
        <form class="form-horizontal" action="addMovieCode.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="movieName">Movie Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Add a Director" onclick="addDirector()">
                <label class="control-label col-sm-2" for="director">Director(s):</label>
                <div class="col-sm-6" id="directors">
                    <input type="text" class="form-control" id="director0" placeholder="" name="director[]" required>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Add an Actor" onclick="addActor()">
                <label class="control-label col-sm-2" for="actor">Starring Actor(s):</label>
                <div class="col-sm-6" id="actors">
                    <input type="text" class="form-control" id="actor1" placeholder="" name="actor[]" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="summary">Movie Summary:</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="summary" name="summary" rows="5" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rated">Rated:</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" placeholder="PG-13" name="rated" maxlength="6" required>
                </div>
            </div>

            <hr>
            <h3 class="text-center">Select the genres</h3>
            
            <?php/*
                echo '<div class="form-check">';
                $stmt = $db->prepare("SELECT genre_type FROM genre");
                $stmt->execute();

                $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultSet as $row)
                {
                    echo '
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="genre[]" value="' . $row["genre_type"] . '">
                    ' . $row["genre_type"] . '<br>
                    ';
                }

                echo '</div>';
            */?>

            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
    -->
</body>
</html>