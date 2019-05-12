<?php
    session_start();
    print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adopt a Pet</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

    <script type = "text/javaScript">
        $numInCart = <?php if ($_SESSION["inCart"] == null) echo 0;
                           else echo $_SESSION["inCart"]; ?>;

        function setInCartNumber()
        {
            document.getElementById("inCart").innerHTML = "(" + $numInCart + ")";
        }
    </script>
</head>
<body onload = "setInCartNumber()">
   <?php
      include "navbar.php";

    ?>
</body>
</html>