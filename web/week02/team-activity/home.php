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
                $user = $_SESSION["user"];
                if (user == null)
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are currently not signed in.'";
                    echo "window.location.href = 'login.php'";
                }
                else if (strcmp($user, "Administrator") !== 0)
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are signed in as a Tester'";
                }
                else
                {
                    echo "document.getElementById('userWelcome').innerHTML = 'You are signed in as an Administrator.'";
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