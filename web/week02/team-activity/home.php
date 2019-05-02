<?php
    session_start();
    echo session_id();
    //echo "\n<br>session: " . print_r($_SESSION) . ".<br>\n";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balloon Sales</title>

    <?php
        include 'header.php';
    ?>

    <style>
        .home
        {
            background-color: sienna; /* light brown */
        }
    </style>

    
    <script>
        function setUser()
        {
            <?php
            
            //echo "session variable = " . $_SESSION['user'] . ".\n";
                if ($_SESSION['user'] == "Administrator")
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are signed in as an Administrator.';";
                }
                else if ($_SESSION['user'] == "Tester")
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are signed in as a Tester';";
                }
                else
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are currently not signed in.';";
                    window.location.href = "login.php";
                }
            ?>
        }
    </script>
</head>
<body onload = "setUser()">
    <h1 style = "text-align: center">Welcome to the Balloon Sales website!</h1>

    <br><p style = "text-align: center" id = "userWelcome"></p>

</body>
</html>