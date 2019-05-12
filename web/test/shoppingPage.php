<?php
    session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Adopt an Animal</title>

   <link rel = "stylesheet" type = "text/css" href = "styles.css">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

   <script type = "text/javaScript">
      function addToCart(picture, pictureName, price)
      {
         location.href = "addToCart.php";
         //$inCartNumber = <?php //echo $_SESSION["inCart"]; ?>;

         //document.getElementById("inCart").innerHTML = "(\"" . $inCartNumber . "\")";
      }

      function loadPage()
      {
         <?php if ($_SESSION["inCart"] == null)
               echo 'document.getElementById("inCart").innerHTML = "(0)";';
            else
               echo 'document.getElementById("inCart").innerHTML = "(' . $_SESSION["inCart"] . ')";';
         ?>
      }
   </script>
</head>
<body onload = "loadPage()">
   <?php
      include "navbar.php";

      $pictures = array("cat.jpg", "cheetaAndCub.jpg", "penguin.jpg", "cuteAnimals.jpg",
                        "dog.jpg", "dragon.jpg", "dragon2.jpg", "elephant.jpg", "narwhal.jpg");
      $pictureNames = array("Kitten", "Cheeta and Cub", "Pink Penguin", "Keychain Animals",
                            "Dog", "Blue Dragon", "White Dragon", "Elephant", "Narwhal");
      $prices = array("2.00", "10.00", "2.25", "4.00", "4.00", "7.50", "8.00", "12.25", "7.00");

      echo '<hr>
      <div class="container">';

      for ($i = 0; $i < sizeof($pictures); $i++)
      {
         echo '<div class="row row-eq-height">
                  <div class="col-md-4">
                     <div class = "pull-right">
                        <p>' . $pictureNames[$i] . '</p><br/>
                        <p>$' . $prices[$i] . '</p><br/>
                        <button type="button" class="btn btn-success" onclick = 
                        "addToCart(\'' . $pictures[$i] . '\', \'' . $pictureNames[$i] . '\', \'' . $prices[$i] . '\')">Add to Cart</button>
                     </div>

                     <img src = "animal_pics/' . $pictures[$i] . '" class = "img-responsive">
                  </div>
                  <div class="col-md-4">
                     <div class = "pull-right">
                        <p>' . $pictureNames[$i + 1] . '</p><br/>
                        <p>$' . $prices[$i + 1] . '</p><br/>
                        <button type="button" class="btn btn-success" onclick = 
                        "addToCart(\'' . $pictures[$i + 1] . '\', \'' . $pictureNames[$i + 1] . '\', \'' . $prices[$i + 1] . '\')">Add to Cart</button>
                     </div>

                     <img src = "animal_pics/' . $pictures[$i + 1] . '" class = "img-responsive">
                  </div>
                  <div class="col-md-4">
                     <div class = "pull-right">
                        <p>' . $pictureNames[$i + 2] . '</p><br/>
                        <p>$' . $prices[$i + 2] . '</p><br/>
                        <button type="button" class="btn btn-success" onclick = 
                        "addToCart(\'' . $pictures[$i + 2] . '\', \'' . $pictureNames[$i + 2] . '\', \'' . $prices[$i + 2] . '\')">Add to Cart</button>
                     </div>

                     <img src = "animal_pics/' . $pictures[$i + 2] . '" class = "img-responsive">
                  </div>
               </div>
               <br/><hr><br/>';
            
            $i += 2;
      }
      echo '<div class="row">
               <button type="button" class="btn btn-primary pull-right">Continue to Cart</button>
            </div>';
      echo '</div>';
   ?>

   
   <br/><br/>
</body>
</html>