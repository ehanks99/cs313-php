<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balloon Sales</title>

    <?php
        include 'header.php';

        session_start();
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
                if ($_SESSION["user"] == null)
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are currently not signed in.'";
                }
                else
                {
                    echo 'document.getElementById("userWelcome").innerHTML = "You are signed in as a(n) $_SESSION[\'user\']."';
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