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

    <style>
        nav
        {
            background-color: #330d00; /* dark brown */
            color: BlanchedAlmond; /* light brown*/
        }

        nav ul 
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav li 
        {
            float: left;
            text-align: center;
        }

        nav li a 
        {
            display: block;
            color: BlanchedAlmond; /* light brown*/
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav li a:hover 
        {
            background-color: sienna; /* light brown */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class = "home"><a href = "home.php">Home</a></li>
                <li class = "aboutUs"><a href = "about-us.php">About Us</a></li>
                <li class = "login"><a href = "login.php">Login</a></li>
                <li class = "logout" onclick = "logout()"><a href = "home.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <script>
        function logout()
        {
            <?php
                session_unset();
                session_destroy();
            ?>
            window.location.href = "home.php";
        }
    </script>
</body>
</html>