<?php
   start_session();
?>

<!DOCTYPE html>
<!-- Emily Hanks -->
<html lang = "en">
<head>
   <link rel = "stylesheet" type = "text/css" href = "assign05.css">
   <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <!-- jQuery library -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

      
   <meta charset = "utf-8"/>
   <meta name = "viewport" content = "width = device - width, initial - scale = 1"/>
   <title>Adopt an Animal</title>
</head>
<body>

   <?php
      include "navbar.php";
   ?>
   
      <div>
         <table>
            <tr>
               <th></th>
               <th>Price</th>
               <th>Fluffy Creature</th>
               <th></th>
               <th></th>
               <th>Price</th>
               <th>Fluffy Creature</th>
            </tr>
            <tr>
                <td><input type = "checkbox" name = "animal" value = "5.00" onclick = "calculate()"></td>
                <td id = "price1">$5.00</td>
                <td><a href = "cat.jpg"><img src = "cat.jpg" alt = "cat" style = "width:30%"></a></td>
                <td></td>
                <td><input type = "checkbox" name = "animal" value = "7.00" onclick = "calculate()"></td>
                <td id = "price2">$7.00</td>
                <td><a href = "dog.jpg"><img src = "dog.jpg" alt = "dog" style = "width:30%"></a></td>
            </tr>
            <tr>
                <td><input type = "checkbox" name = "animal" value = "10.00" onclick = "calculate()"></td>
                <td id = "price3">$10.00</td>
                <td><a href = "narwhal.jpg"><img src = "narwhal.jpg" alt = "narwhal" style = "width:30%"></a></td>
                <td></td>
                <td><input type = "checkbox" name = "animal" value = "6.25" onclick = "calculate()"></td>
                <td id = "price4">$6.25</td>
                <td><a href = "penguin.jpg"><img src = "penguin.jpg" alt = "penguin" style = "width:30%"></a></td>
            </tr>
            <tr>
                <td><input type = "checkbox" name = "animal" value = "8.50" onclick = "calculate()"></td>
                <td id = "price5">$8.50</td>
                <td><a href = "chinchilla.jpg"><img src = "chinchilla.jpg" alt = "chinchilla" style = "width:30%"></a></td>
                <td></td>
                <td><input type = "checkbox" name = "animal" value = "11.15" onclick = "calculate()"></td>
                <td id = "price6">$11.15</td>
                <td><a href = "elephant.jpg"><img src = "elephant.jpg" alt = "elephant" style = "width:30%"></a></td>
            </tr>
         </table>
      </div>
         
         <h3>Total: $<span id = "total"></span></h3>

</body>
</html>