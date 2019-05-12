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

        function goToShoppingPage()
        {
            document.location.href = "shoppingPage.php";
        }

        function removeItem(index)
        {
            $picNames.splice(index, 1);
            $pictures.splice(index, 1);
            $prices.splice(index, 1);

            var url = "goToCart.php?inCart=" + $numInCart;
            for (var i = 0; i < picsInCart.length; i++)
            {
                url += "&pictureNames[]=" + $picNames[i] +
                       "&pictureFiles[]=" + $pictures[i] + 
                       "&prices[]=" + $prices[i];
            }
            
            document.location.href = url;
        }
    </script>
</head>
<body onload = "setInCartNumber()">
    <?php
        include "navbar.php";

        $picNames = $_SESSION["pictureNames"];
        $pictures = $_SESSION["pictureFiles"];
        $prices = $_SESSION["prices"];

        $totalPrice = 0;

        if ($pictures != null && sizeof ($pictures) > 0)
        {
            $size = sizeof($pictures);
            echo "<h3 style = 'text-decoration: underline'>Your cart</h3>
                <table class = 'autoMargin'>
             	<tr>
                    <th>Item</th>
                    <th></th>
                    <th>Price</th>
                    <th></th>
             	</tr>\n";
            for ($i = 0; $i < sizeof($pictures); $i++)
            {
                print "\t\t\t<tr>\n";
             	print "\t\t\t\t<td>$picNames[$i]</td>\n";
             	print "\t\t\t\t<td><img src = 'animal_pics/" . $pictures[$i] . "' class = 'half-img-responsive'></td>\n";
                print "\t\t\t\t<td>$$prices[$i]</td>\n";
                print "\t\t\t\t<td><button type='button' class='btn btn-danger' onclick = 'removeItem($i)'>Remove</button></td>\n";
                print "\t\t\t</tr>\n";

                $totalPrice += $prices[$i];
            }

            print"\t\t </table>\n\t\t <h2>";
            printf("Total Price: $%.2f", $totalPrice);
            print "</h2>";

            echo '<button type="button" class="btn btn-primary" onclick = "goToCheckout()">Continue to Checkout</button>';
        }
        else
        {
            echo '<br/><h2 class = "text-center">You have nothing in your shopping cart right now</h2><br/>
                <button type="button" class="btn btn-primary center-block" onclick = "goToShoppingPage()">Return to Main Page</button>';
        }
    ?>
</body>
</html>