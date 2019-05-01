<?php
    session_start();
    echo session_id();
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
        .login
        {
            background-color: sienna; /* light brown */
        }
    </style>
    
    <script>
        function adminClick()
        {
            <?php
                $_SESSION['user'] = 'Administrator';
                //echo "alert($_SESSION['user']);";
                echo $_SESSION['user'];
            ?>
            
            //window.location.href = "home.php";
        }

        function testerClick()
        {
            <?php
                $_SESSION['user'] = 'Tester';
                //echo "alert($_SESSION['user']);";
                echo $_SESSION['user'];
            ?>
            //window.location.href = "home.php";
        }

        function click()
        {
            <?php
                echo $_SESSION['user'];
            ?>
        }
    </script>
</head>
<body>
    <br><br>
    <input type = "button" value = "Log in as Administrator" onclick = "adminClick()"><br>
    <input type = "button" value = "Log in as Tester" onclick = "testerClick()">
    <!--<input type = "button" value = "Lr" onclick = "click()">-->

</body>
</html>