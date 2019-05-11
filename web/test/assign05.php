<?php
    session_start();
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

   <script type = "text/javaScript">
   
      function checkFull(id, error)
      {
         var element = document.getElementById(id).value;
         var message = document.getElementById(error).style;
         
         if(element == "")
         {
            message.display = "inline";
            return false;
         }
         message.display = "none";
         return true;
      }
      
      function checkPhone()
      {
         var element = document.getElementById("phoneNumber").value;
         var message1 = document.getElementById("phoneNumberError1").style;
         var message2 = document.getElementById("phoneNumberError2").style;
         
         var phonePattern = /^\d{3}[-]?\d{3}[-]?\d{4}$/;
         var phoneTest = phonePattern.test(element);
         
         if (element == "")
         {
            message2.display = "none";
            message1.display = "inline";
            return false;
         }
         if (phoneTest == false)
         {
            message1.display = "none";
            message2.display = "inline";
            return false;
         }
         message1.display = "none";
         message2.display = "none";
         return true;
      }
      
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
      
      function checkCard()
      {
         var element = document.getElementById("cardNumber").value;
         var message1 = document.getElementById("cardNumberError1").style;
         var message2 = document.getElementById("cardNumberError2").style;
         var cardPattern = /^\d{4}-?\d{4}-?\d{4}-?\d{4}$/;
         var cardTest = cardPattern.test(element);
         
         if (element == "")
         {
            message2.display = "none";
            message1.display = "inline";
            return false;
         }
         if (cardTest == false)
         {
            message1.display = "none";
            message2.display = "inline";
            return false;
         }
         message1.display = "none";
         message2.display = "none";
         return true;
      }
      
      function checkDate()
      {
         var element = document.getElementById("expiration").value;
         var message1 = document.getElementById("expirationError1").style;
         var message2 = document.getElementById("expirationError2").style;
         
         var expirationPattern = /^\d{2}[-]{1}\d{4}$/;
         var expirationTest = expirationPattern.test(element);
         
         var month = element.substring(2, 0);
         var length = element.length;
         var year = element.substring(8, 3);

         /*
         var year = 0;
         if (length == 5) year = element.substring(5, 3);
         else year = element.substring(8, 3);
         */
         
         if (element == "")
         {
            message2.display = "none";
            message1.display = "inline";
            return false;
         }
         else if (expirationTest == false || month*1 > 12 || month*1 < 1 || year*1 < 2018)
         {
            message1.display = "none";
            message2.display = "inline";
            return false;
         }
         /*
         else if (year*1 < 100)
         {
            if (month*1 > 12 || month*1 < 1 || year*1 < 18)
            {
               message1.display = "none";
               message2.display = "inline";
               return false;
            }
         }
         else if (year*1 < 2018)
         {
            if (month*1 > 12 || month*1 < 1 || year*1 < 2018)
            {
               message1.display = "none";
               message2.display = "inline";
               return false;      
            }
         }
         */
         
         message1.display = "none";
         message2.display = "none";
         return true;  
      }
      
      function validate()
      {        
         if(!checkFull("firstName","firstNameError"))
         {
            document.getElementById("firstName").focus();
            return false;
         }
         if(!checkFull("lastName","lastNameError"))
         {
            document.getElementById("lastName").focus();
            return false;
         }
         if(!checkFull("address", "addressError"))
         {
            document.getElementById("address").focus();
            return false;
         }
         if(!checkPhone())
         {
            document.getElementById("phoneNumber").focus();
            return false;
         }
         if(!checkCard())
         {
            document.getElementById("cardNumber").focus();
            return false;
         } 
         if(!checkDate())
         {
            document.getElementById("expiration").focus();
            return false;
         }
         
         return true;
      }
   </script>
      
   <meta charset = "utf-8"/>
   <meta name = "viewport" content = "width = device - width, initial - scale = 1"/>
   <title>Adopt an Animal</title>
</head>
<body>

   <?php
      include "navbar.php";
   ?>
</body>
</html>