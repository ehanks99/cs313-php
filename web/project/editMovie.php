<?php
    session_start();
    include 'dbConnect.php';

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function fillTextFields()
    {

    }

    if (isset($_GET["movie_name"]))
    {
        $movie = test_input($_GET["movie_name"]);

        $stmt = $db->prepare(
            'SELECT director.director_name
             FROM movie_to_director
                INNER JOIN movie ON movie_to_director.movie_id = movie.movie_id
                INNER JOIN director ON movie_to_director.director_id = director.director_id
             WHERE movie.movie_name = :movie');
        $stmt->execute(array(':movie' => $movie));
        $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
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
            fillTextFields();
        }
        else
        {
            echo '<h2 class="text-center">Select a movie to edit</h2>
            <form>
                <div class="form-group col-sm-6">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>';
        }
    ?>
    
</body>
</html>