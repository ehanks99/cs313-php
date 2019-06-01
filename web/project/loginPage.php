<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    <?php
        include 'navbar.php';
    ?>

    <div class="container">
        <h2 class="text-center">Log In</h2><br/>
        <form class="form-horizontal" action="/validateLogin.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
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