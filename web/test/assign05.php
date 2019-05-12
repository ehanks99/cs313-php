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

   <link rel = "stylesheet" type = "text/css" href = "assign05.css">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

   <script type = "text/javaScript">
      function calculate()
      {
         var total = 0;
         var x = document.querySelectorAll('[name = "animal"]');
         
         for (var i = 0; i < x.length; i++)
         {
            if (x[i].checked) total = total + x[i].value * 1;
         }
         document.getElementById("total").innerHTML = total.toFixed(2);
      }
   </script>
</head>
<body>
   <?php
      include "navbar.php";

      $pictures = array("cat.jpg", "cheetaAndCub.jpg", "penguin.jpg", "cuteAnimals.jpg",
                        "dog.jpg", "dragon.jpg", "dragon2.jpg", "elephant.jpg", "narwhal.jpg");
      $pictureNames = array("Kitten", "Cheeta and Cub", "Pink Penguin", "Keychain Animals",
                            "Dog", "Blue Dragon", "White Dragon", "Elephant", "Narwhal");
      $prices = array("2.00", "10.00", "2.25", "4.00", "4.00", "7.50", "8.00", "12.25", "7.00");

      echo '<div class="container">';

      for ($i = 0; $i < sizeof($pictures); $i++)
      {
         echo '<div class="row row-eq-height">
                  <div class="col-md-4">
                     <div class = "float-right">
                        ' . $pictureNames[$i] . '<br/>
                        $' . $prices[$i] . '<br/>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                     <a href = "animal_pics/' . $pictures[$i] . '">
                        <img src = "animal_pics/' . $pictures[$i] . '" class = "img-responsive">
                     </a>
                  </div>
                  <div class="col-md-4">
                     <div class = "float-right">
                        ' . $pictureNames[$i + 1] . '<br/>
                        $' . $prices[$i + 1] . '<br/>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                     <a href = "animal_pics/' . $pictures[$i + 1] . '">
                        <img src = "animal_pics/' . $pictures[$i + 1] . '" class = "img-responsive">
                     </a>
                  </div>
                  <div class="col-md-4">
                     <div class = "float-right">
                        ' . $pictureNames[$i + 2] . '<br/>
                        $' . $prices[$i + 2] . '<br/>
                        <button type="button" class="btn btn-success">Add to Cart</button>
                     </div>
                     <a href = "animal_pics/' . $pictures[$i + 2] . '">
                        <img src = "animal_pics/' . $pictures[$i + 2] . '" class = "img-responsive">
                     </a>
                  </div>
               </div>
               <br/><hr><br/>';
            
            $i += 2;
      }
      echo '</div>';
   ?>
   <br/><br/>
</body>
</html>