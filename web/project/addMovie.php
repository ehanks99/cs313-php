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

</head>
<body>
    <?php
        include 'navbar.php';
    ?>

    <div class="container">
        <h2 class="text-center">Add a Movie to the List</h2><br/>
        <form class="form-horizontal" action="validateSignUp.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="movieName">Movie Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                </div>
            </div>
            <div class="form-group">
            <button type="button">Add a Director</button>
                <label class="control-label col-sm-2" for="director">Director(s):</label>
                <div class="col-sm-6">
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