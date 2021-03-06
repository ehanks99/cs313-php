<?php
    session_start();
    include 'dbConnect.php';

    // check if there's a change to be made
    if (isset($_GET["id"]) && isset($_GET["name"]))
    {
        $stmt = $db->prepare(
            'UPDATE director
             SET director_name = :dName
             WHERE director_id = :id');
        $stmt->execute(array(':dName' => $_GET["name"], ':id' => $_GET["id"]));
        header("Location: editDirectors.php?success=true");
        die();
    }
    
    $stmt = $db->prepare(
        'SELECT director.director_name, director.director_id
         FROM director');
    $stmt->execute();
    $directors = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
        foreach ($directors as $rows)
        {
            if ((strpos(strtolower($rows["director_name"]), $word) !== false))
            {
                $directors2[$i] = $rows;

                $i++;
            }
        }

        $directors = $directors2;
    }
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

    <script>
        function editDirector(directorId)
        {
            var name = prompt("Enter the name that you would like to change it to.");
            if (name != null)
            {
                var update = confirm("Are you sure you want to change the director's name to '" + name + "?");

                if (update)
                {
                    window.location.href = "editDirectors.php?id=" + directorId + "&name=" + name;
                }
            }
        }

        function addDirector()
        {
            var name = prompt("Enter the name for the new director.");
            //alert(name);
            
            window.location.href = ("addCode/addDirector.php?name=" + name);
        }
    </script>
</head>
<body>
    <?php
        include 'navbar.php';
        echo '<script>document.getElementById("navbarSearch").action = "editDirectors.php";</script>';
        
        if (isset($_GET["success"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>Successfully changed director name.</strong>
            </div>';
        }

        if (isset($_GET["addedSuccess"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>Successfully added a director name.</strong>
            </div>';
        }

        echo '
        <div class="container">
            <h2 id="heading" class="text-center">Edit Director Names</h2>
            <button type="button" class="btn btn-primary center-block" onclick="addDirector()">Add a new director</button><br/>
            ';
                $i = 0;
                while ($i < sizeof($directors))
                {
                    echo '
                    <div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="director' . $i . '" value="' . $directors[$i]["director_name"] . '" onkeydown="return false;">
                        </div>
                        <div class="col-sm-3">
                            <button class="pull-left" style="font-size:20px; margin-bottom:50px;" onclick="editDirector(\'' . $directors[$i]["director_id"] . '\')"><i class="fa fa-edit"></i></button>
                        </div>
                    </div>';
                    $i++;
                }
                
            echo '
        </div>';
    ?>
</body>
</html>