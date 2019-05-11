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
   <title>Adoption Form</title>
</head>
<body onload = "document.getElementById('firstName').focus()" onsubmit = "return validate()"
      onreset = "document.getElementById('firstName').focus()">
   <div class = "heading">
      <div style = "float:left"><img src = "adoption_right.jpg" alt = "different animals" style = "height:200%"></div>
      <div><h1 class = "center" style = "float:left"> Adopt A Friend Today! </h1></div>
      <div><img src = "adoption.jpg" alt = "different animals" style = "height:200%"></div>
   </div>   
   <hr>
   <?php
      include "navbar.php";
   ?>

   
   <h2 class = "center"> Just fill out a little bit of information, and we can get your
                         new comrade to you. </h2>
   <form action = "">
      <pre class = "arial">First Name:  <input text = "text" id = "firstName" placeholder = "John" onblur = "checkFull('firstName',
           'firstNameError')"><p class = "error" id = "firstNameError">  **This field cannot be left blank**</p></pre>

      <pre class = "arial">Last Name:  <input text = "text" id = "lastName" placeholder = "Smith" onblur = "checkFull('lastName', 
           'lastNameError')"><p class = "error" id = "lastNameError">  **This field cannot be left blank**</p></pre>
           
      <pre class = "arial">Address:      <textarea id = "address" onblur= "checkFull('address', 'addressError')"></textarea><p 
           class = "error" id = "addressError">  **This field cannot be left blank**</p></pre>
           
      Phone Number: <input text = "text" id = "phoneNumber" placeholder = "xxx-xxx-xxxx" onblur = "checkPhone()">
      <p class = "error" id = "phoneNumberError1">**This field cannot be left blank**</p>
      <p class = "error" id = "phoneNumberError2">**This is not a valid phone number**</p>
      
      
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
      </div>
      
      
      Choose your credit card type<br/>
      <input type="radio" name="card" value="masterCard" checked>Master Card</input><br/>
      <input type="radio" name="card" value="visa">Visa</input><br/>
      <input type="radio" name="card" value="americanExpress">American Express</input><br/><br/>
      
      Credit Card #
      <input text = "text" id = "cardNumber" placeholder = "xxxx-xxxx-xxxx-xxxx" onblur = "checkCard()">
      <p class = "error" id = "cardNumberError1">**This field cannot be left blank**</p>
      <p class = "error" id = "cardNumberError2">**This is not a valid credit card number. Must be 16 digits**</p><br/><br/>
      
      Credit Card Expiration Date
      <input text = "text" id = "expiration" placeholder = "xx-xxxx" onblur = "checkDate()">
      <p class = "error" id = "expirationError1">**This field cannot be left blank**</p>
      <p class = "error" id = "expirationError2">**This is not a valid date. Must be in the form xx-xxxx**</p><br/><br/>
      
      
      <input type = "reset" value = "Clear Form" onclick = "calculate()">
      <input type = "submit" value = "Submit" onClick = "validate()">
      
   </form>

</body>
</html>