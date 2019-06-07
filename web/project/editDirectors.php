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
            var update = confirm("Are you sure you want to change the director's name to '" + name + "?");

            if (update)
            {
                window.location.href = "editDirectors.php?id=" + directorId + "&name=" + name;
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
              <strong>Successfully changed director name.</strong>
            </div>';
        }

        echo '
        <div class="container">
            <h2 id="heading" class="text-center">Edit Director Names</h2><br/>
            ';
                $i = 0;
                echo '<div class="row">';
                while ($i < sizeof($directors))
                {
                    
                    if($i % 3 == 2)
                        echo '</div>';
                    echo '
                    <div>
                    <div class="col">
                        <button class="float-right" style="font-size:20px; margin-bottom:50px;" onclick="editDirector(\'' . $directors[$i]["director_id"] . '\')"><i class="fa fa-edit"></i></button>
                        <input type="text" class="form-control" id="director' . $i . '" value="' . $directors[$i]["director_name"] . '" onkeydown="return false;">
                        </div>

                    </div>';


                    if($i % 3 == 2)
                        echo '<div class="row">';
                    $i++;
                }
                // onclick="editMovie(\'' . $rows['movie_name'] . '\')"
                if($i % 3 == 2)
                        echo '</div>';

                //<div class="col-sm-10">
                //    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                //</div>
            echo '
        </div>';
    ?>

</body>
</html>