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
   ?>
</body>
</html>