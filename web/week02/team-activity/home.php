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
</head>
<body onload = "setUser()">
    <h1 style = "text-align: center">Welcome to the Balloon Sales website!</h1>

    <br><p style = "text-align: center" id = "userWelcome"></p>

    <script>
        function setUser()
        {
            alert($_SESSION["user"]);
            if ($_SESSION["user"] != NULL && $_SESSION["user"] == "Administrator")
            {
                document.getElementById("userWelcome").innerHTML = "You are signed in as an Administrator.";
            }
            else if ($_SESSION["user"] != NULL && $_SESSION["user"] == "Tester")
            {
                document.getElementById("userWelcome").innerHTML = "You are signed in as a Tester.";
            }
            else
            {
                document.getElementById("userWelcome").innerHTML = "You are currently not signed in.";
            }
        }
    </script>
</body>
</html>