<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balloon Sales</title>

    <?php
        include 'header.php';
        
        if (session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }
    ?>

    <style>
        .login
        {
            background-color: sienna; /* light brown */
        }
    </style>
</head>
<body>
    <br><br>
    <input type = "button" value = "Log in as Administrator" onclick = "adminClick()"><br>
    <input type = "button" value = "Log in as Tester" onclick = "testerClick()">

    <script>
        function adminClick()
        {
            <?php
                $_SESSION["user"] = "Administrator";
                //echo "alert($_SESSION['user']);";
            ?>
            
            //window.location.href = "home.php";
        }

        function testerClick()
        {
            <?php
                $_SESSION["user"] = "Tester";
                //echo "alert($_SESSION['user']);";
            ?>
            //window.location.href = "home.php";
        }
    </script>
</body>
</html>