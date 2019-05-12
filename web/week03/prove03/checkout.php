<?php
    session_start();
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

        function returnToCart()
        {
            document.location.href = "shoppingCart.php";
        }
    </script>
</head>
<body onload = "setInCartNumber()">
   <?php
      include "navbar.php";
    ?>

    <form class="form-horizontal" action="confirmationPage.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" placeholder="John Smith">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="address">Address:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="address" placeholder="FairView Hill 2135">
                <input type="text" class="form-control" id="address" placeholder="Austin, TX 71056">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-danger" onclick = "returnToCart()">Return to Cart</button>
            <button type="submit" class="btn btn-success">Confirm Purchase</button>
            </div>
        </div>
    </form> 
</body>
</html>