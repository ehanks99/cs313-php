<?php
    session_start();
    include 'dbConnect.php';

    // check if there's a change to be made
    if (isset($_GET["id"]) && isset($_GET["name"]))
    {
        $stmt = $db->prepare(
            'UPDATE starring_actor
             SET actor_name = :aName
             WHERE actor_id = :id');
        $stmt->execute(array(':aName' => $_GET["name"], ':id' => $_GET["id"]));
        header("Location: editActors.php?success=true");
        die();
    }
    
    $stmt = $db->prepare(
        'SELECT starring_actor.actor_name, starring_actor.actor_id
         FROM starring_actor');
    $stmt->execute();
    $actors = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
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
        foreach ($actors as $rows)
        {
            if ((strpos(strtolower($rows["actor_name"]), $word) !== false))
            {
                $actors2[$i] = $rows;
            }

            $i++;
        }

        $actors = $actors2;
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
        function editActor(actorId)
        {
            var name = prompt("Enter the name that you would like to change it to.");
            if (name != null)
            
                var update = confirm("Are you sure you want to change the actor's name to '" + name + "?");

                if (update)
                {
                    window.location.href = "editActors.php?id=" + actorId + "&name=" + name;
                }
            }
        }
    </script>
</head>
<body>
    <?php
        include 'navbar.php';
        echo '<script>document.getElementById("navbarSearch").action = "editActors.php";</script>';
        
        if (isset($_GET["success"]))
        {
            echo '
            <div class="alert alert-success text-center">
              <strong>Successfully changed actor name.</strong>
            </div>';
        }

        echo '
        <div class="container">
            <h2 id="heading" class="text-center">Edit Actor Names</h2><br/>
            ';
                $i = 0;
                while ($i < sizeof($actors))
                {
                    echo '
                    <div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="actor' . $i . '" value="' . $actors[$i]["actor_name"] . '" onkeydown="return false;">
                        </div>
                        <div class="col-sm-3">
                            <button class="pull-left" style="font-size:20px; margin-bottom:50px;" onclick="editActor(\'' . $actors[$i]["actor_id"] . '\')"><i class="fa fa-edit"></i></button>
                        </div>
                    </div>';
                    $i++;
                }
                // onclick="editMovie(\'' . $rows['movie_name'] . '\')"


                //<div class="col-sm-10">
                //    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                //</div>
            echo '
        </div>';
    ?>

</body>
</html>