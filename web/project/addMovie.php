<?php
    session_start();
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

    <script>
        var id = 0;

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
    ?>

    <div class="container">
        <h2 class="text-center">Add a Movie to the List</h2><br/>
        <form class="form-horizontal" action="addMovieCode.php" method="get">
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
                    <input type="text" class="form-control" id="director" placeholder="" name="director[]" required>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>