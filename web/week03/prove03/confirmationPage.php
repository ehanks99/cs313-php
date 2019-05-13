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
        $numInCart = <?php echo $_SESSION["inCart"]; ?>;
        
        function setInCartNumber()
        {
            document.getElementById("inCart").innerHTML = "(" + $numInCart + ")";
        }

        function goToCheckout()
        {
            document.location.href = "checkout.php";
        }

        function goToCart()
        {
            document.location.href = "shoppingCart.php";
        }

        function goToShoppingPage()
        {
            document.location.href = "shoppingPage.php";
        }
    </script>
</head>
<body onload = "setInCartNumber()">
    <?php
        include "navbar.php";

        $picNames = $_SESSION["pictureNamesTemp"];
        $pictures = $_SESSION["pictureFilesTemp"];
        $prices = $_SESSION["pricesTemp"];
        
        $name = $_SESSION["name"];
        $email = $_SESSION["email"];
        $address1 = $_SESSION["address1"];
        $address2 = $_SESSION["address2"];

        $totalPrice = 0;

        echo "<br/><h2 class = 'text-center'>Thank you for your purchase!</br>The following indicates the 
            items purchased and the billing information given</h2><hr>
        <div class='row row-eq-height'>
            <div class='col-md-3'>
            </div>
            <div class='col-md-3 text-center'>
                    <h2>Customer Info:</h2>
                    $name</br>
                    $email</br>
                    $address1</br>
                    $address2</br>
            </div>
            <div class='col-md-3'>
                <table class = 'autoMargin'>
                <tr><td colspan = '4'><h1 class = 'text-center'>Your Purchase</h1></td></tr>
             	<tr>
                    <th class = 'text-center'>Item</th>
                    <th></th>
                    <th class = 'text-center'>Price</th>
             	</tr>\n";
            for ($i = 0; $i < sizeof($pictures); $i++)
            {
                print "\t\t\t<tr>\n";
             	print "\t\t\t\t<td class = 'padded'>$picNames[$i]</td>\n";
             	print "\t\t\t\t<td><img src = 'animal_pics/" . $pictures[$i] . "' class = 'half-img-responsive'></td>\n";
                print "\t\t\t\t<td class = 'padded'>$$prices[$i]</td>\n";
                print "\t\t\t</tr>\n";

                $totalPrice += $prices[$i];
            }

            print"\t\t </table>\n\t\t <h3 class = 'smallTab'>";
            printf("Total Price: $%.2f", $totalPrice);
            print "</h3></div>";
            print "<div class = 'col-md-3'></div></div>";
    ?>
    <br/>
    <button type="button" class="btn btn-primary center-block" onclick = "goToShoppingPage()">Continue Shopping</button>';
</body>
</html>