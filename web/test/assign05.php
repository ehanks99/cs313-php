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

      $pictures = array("cat.jpg", "cheetaAndCub.jpg", "chinchilla.jpg", "cuteAnimals.jpg",
                        "dog.jpg", "dragon.jpg", "dragon2.jpg", "elephant.jpg", "narwhal.jpg");
      $pictureNames = array("Kitten", "Cheeta and Cub", "Chinchilla", "Keychain Animals",
                            "Dog", "Blue Dragon", "White Dragon", "ElephanT", "Narwhal");
      $prices = array("2.00", "10.00", "2.25", "4.00", "4.00", "7.50", "8.00", "12.25", "7.00");

      for ($i = 0; $i < 1; $i++)
      {
         echo '
            <div class="container"> 
               <div class="row">
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
                  <div class="col-sm-4">.col-sm-4</div>
               </div> 
            </div>
            ';
      }
   ?>
   <br/><br/>
</body>
</html>