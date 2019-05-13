<?php
    session_start(); 
    //print_r($_SESSION);
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
        var numInCart = <?php echo $_SESSION["inCart"]; ?>;
        var picNames = [<?php 
            if ($_SESSION["pictureNames"] != null || $_SESSION["pictureNames"] != "")
            {
                for ($i = 0; $i < sizeof($_SESSION["pictureNames"]); $i++)
                {
                    echo '"' . $_SESSION["pictureNames"][$i] . '"';

                    if ($i != sizeof($_SESSION["pictureNames"]) - 1)
                        echo ", ";
                }
            }?>];
        var pictures = [<?php 
            if ($_SESSION["pictureFiles"] != null || $_SESSION["pictureFiles"] != "")
            {
                for ($i = 0; $i < sizeof($_SESSION["pictureFiles"]); $i++)
                {
                    echo '"' . $_SESSION["pictureFiles"][$i] . '"';

                    if ($i != sizeof($_SESSION["pictureFiles"]) - 1)
                        echo ", ";
                }
            }?>];
        var prices = [<?php 
            if ($_SESSION["prices"] != null || $_SESSION["prices"] != "")
            {
                for ($i = 0; $i < sizeof($_SESSION["prices"]); $i++)
                {
                    echo '"' . $_SESSION["prices"][$i] . '"';

                    if ($i != sizeof($_SESSION["prices"]) - 1)
                        echo ", ";
                }
            }?>];
         
        
        function setInCartNumber()
        {
            document.getElementById("inCart").innerHTML = "(" + numInCart + ")";
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
            numInCart--;
            setInCartNumber();

            picNames.splice(index, 1);
            pictures.splice(index, 1);
            prices.splice(index, 1);

            var url = "setCart.php?inCart=" + numInCart;
            for (var i = 0; i < pictures.length; i++)
            {
                url += "&pictureNames[]=" + picNames[i] +
                       "&pictureFiles[]=" + pictures[i] + 
                       "&prices[]=" + prices[i];
            }
            
            document.location.href = url;
        }
    </script>
</head>
<body onload = "setInCartNumber()">
    <?php
        include "navbar.php";

        $totalPrice = 0;

        if ($_SESSION["inCart"] != 0 && $_SESSION["inCart"] != null)//($pictures != null && sizeof ($pictures) > 0)
        {

            $picNames = $_SESSION["pictureNames"];
            $pictures = $_SESSION["pictureFiles"];
            $prices = $_SESSION["prices"];

            $size = sizeof($pictures);
            echo "<br/>
                <table class = 'autoMargin'>
                <tr><td colspan = '4'><h1 class = 'text-center'>Your Cart</h1></td></tr>
             	<tr>
                    <th class = 'text-center'>Item</th>
                    <th></th>
                    <th class = 'text-center'>Price</th>
                    <th></th>
             	</tr>\n";
            for ($i = 0; $i < sizeof($pictures); $i++)
            {
                print "\t\t\t<tr>\n";
             	print "\t\t\t\t<td class = 'padded'>$picNames[$i]</td>\n";
             	print "\t\t\t\t<td><img src = 'animal_pics/" . $pictures[$i] . "' class = 'half-img-responsive'></td>\n";
                print "\t\t\t\t<td class = 'padded'>$$prices[$i]</td>\n";
                print "\t\t\t\t<td class = 'padded'><button type='button' class='btn btn-danger' onclick = 'removeItem($i)'>Remove</button></td>\n";
                print "\t\t\t</tr>\n";

                $totalPrice += $prices[$i];
            }

            print"\t\t </table>\n\t\t <h3 class = 'tab'>";
            printf("Total Price: $%.2f", $totalPrice);
            print "</h3>";

            echo '<button type="button" class="btn btn-primary smallTab" onclick = "goToShoppingPage()">Return to Main Page</button>&nbsp;&nbsp;';
            echo '<button type="button" class="btn btn-primary" onclick = "goToCheckout()">Continue to Checkout</button>';
            echo '<br/><br/>';
        }
        else
        {
            echo '<br/><h2 class = "text-center">You have nothing in your shopping cart right now</h2><br/>
                <button type="button" class="btn btn-primary center-block" onclick = "goToShoppingPage()">Return to Main Page</button>';
        }
    ?>
</body>
</html>