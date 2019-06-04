<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

</head>
<body>
    <?php
        include 'navbar.php';

        if (isset($_GET["error"]))
        {
            echo '
            <div class="alert alert-danger text-center">
              <strong>ERROR: </strong>' . $_GET["error"] . '
            </div>';
        }
    ?>

    <div class="container">
        <h2 class="text-center">Login</h2><br/>
        <form class="form-horizontal" action="validateLogin.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pswrd">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pswrd" placeholder="Enter password" name="pswrd" required>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;<a href="signUpPage.php">Not a member? Sign up!</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>