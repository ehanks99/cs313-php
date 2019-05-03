<!DOCTYPE html>
<!-- Emily Hanks -->
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Emily's Home Page </title>
   <style>
      ul 
      {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
         background-color: #00004d; /* dark blue */
      }

      li 
      {
         float: left;
      }

      li a 
      {
         display: block;
         color: white;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
      }

      li a:hover 
      {
         background-color: #005580; /* light-ish blue */
      }
      
      table, th, td 
      { 
         margin: 25px;
         border: 1px solid #ddd; /* white/grey */
         padding: 8px;
         border-collapse: collapse;
      }
         
      th 
      {
         padding-top: 12px;
         padding-bottom: 12px;
         text-align: left;
         background-color: #00004d; /* dark blue */
         color: white;
      }
         
      tr:nth-child(even) { background-color: #f2f2f2; } /* light grey */
         
      tr:hover { background-color: #999999; } /* a darker grey */
         
      .center
      {
         text-align: center;
      }
         
      .big
      {
         font-family: "Times New Roman";
         font-size: 40px;
      }
         
      p.special
      {
         font-family: Verdana;
         font-size: 140%; 
         padding: 50px; 
         text-align: center; 
         outline-style: ridge;
         outline: 5px solid #00004d; /* dark blue */
         background-image: url("night_sky.jpg");
         background-size: 100%;
         color: white;
         margin: 0px 300px 25px 25px;
      }
         
      footer
      {
         background-color: #00004d; /* dark blue */
         text-align: center;
         color: white;
         padding: 2px;
      }
         
      /* changing the footer link colors */
      footer a:link { color: white; }
      footer a:visited { color: #99dfff; } /* super light blue */
      footer a:hover { color: #0077b3; }   /* kind of light blue */
      footer a { text-decoration: none; }
    
         
   </style>
</head>
<body style = "background-color:LightGray;">
   <header id = "top">
      <ul>
         <li><a href = "../index.html">CS 213</a></li>
         <li><a href = "https://byui.brightspace.com/d2l/home">I-Learn</a></li>
         <li><a href="#bottom" style = "text-align: right">Go to bottom of page</a></li>    
      </ul>
      <h1 class = "center big">Welcome to Emily's Home Page</h1>
   </header>
      
   <hr>
      
   <div>
         
      <a href = "me.jpg">
         <img src = "me.jpg" alt = "Smiling Girl" style = "float:right; margin: 40px 25px 25px 125px; 
            width:250px; height:230px;"><br/><br/>
      </a>
      <p class = "special">
         Emily is a Computer Science major at BYU-Idaho with a planned graduation date in 2020. Once she   
         graduates, Emily will return to Oklahoma where she lives and get her second degree in Forensic 
         Science at the University of Central Oklahoma.<br/><br/>
      </p>

   <blockquote><blockquote> <!-- 2 blockquotes to get it indented as much as I want it to -->
      <blockquote style = "font-family:'Courier New'; font-style: italic;"> 
         "So this is how liberty dies ... with thunderous applause." - Padme Amidala
      </blockquote>
   </blockquote></blockquote>
   <br/>
   
   <h1 style = "margin-left: 415px">Class Schedule</h1>
   </div>
      
   <hr>
      
   <div>
      <h1 class = "center"> Favorite Mythical Creatures </h1>
      <table style = "margin: auto"> <!--style = "width: 75%;"--> 
         <tr>
            <th>Name</th>
            <th>Creature Type</th>
            <th style = "width: 400px">Brief Description</th>
            <th>Color</th>
            <th>Age</th>
            <th>Picture</th>
         </tr>
         <tr>
             <td>Shiva</td>
             <td>Ice Phoenix</td>
             <td>Ice Phoenixes are icy in color and are incredibly cold. When a phoenix dies it is 
             consumed in freezing flames, and a new phoenix egg is left in the ashes.</td>
             <td>Blue, Silver</td>
             <td>Adult</td>
             <td><a href = "http://magistream.wikia.com/wiki/Ice_Phoenix">
                 <img src = "ice_phoenix.jpg" alt = "Ice Phoenix" style = "width: 50px; height: 80px"></a>
             </td>
         </tr>      
      </table>
   </div>
   
   <br/>

   <div class = "center">
      <button style = "padding: 16px;" onclick = "myFunction()">Add your own creature!</button> <br/><br/>
   </div>
   
   
   
   <div style = "background-color: lightblue">
      <form id = "myForm" style = "margin-left:40px; display:none" action = ""> <!--"/action_page.php"-->
         <hr style = "margin-right: 40px">
         
         <br/><br/>
         Enter a name for your creature: 
         <input type = "text" name = "name" style = "background-color: beige">
         <br/><br/>
         What kind of creature is it?
         <input type = "text" name = "creature" style = "background-color: beige">
         <br/><br/>
         
         Give a brief description about your mythical creature: <br/>
         <textarea name = "message" rows = "5" cols = "50"
             style = "background-color: beige">Enter text here...</textarea><br/><br/>
         
         What colors does it have?<br/>
         <input type = "checkbox" name = "color" value = "red">Red
         <input type = "checkbox" name = "color" value = "orange" style = "margin-left: 74px">Orange<br/>
         <input type = "checkbox" name = "color" value = "yellow">Yellow
         <input type = "checkbox" name = "color" value = "green" style = "margin-left: 54px">Green<br/>
         <input type = "checkbox" name = "color" value = "blue">Blue
         <input type = "checkbox" name = "color" value = "purple" style = "margin-left: 70px">Purple<br/>
         <input type = "checkbox" name = "color" value = "black">Black
         <input type = "checkbox" name = "color" value = "silver" style = "margin-left: 63px">Silver<br/>
         <input type = "checkbox" name = "color" value = "white">White
         <input type = "checkbox" name = "color" value = "gold" style = "margin-left: 61px">Gold<br/>
         <input type = "checkbox" name = "color" value = "bronze">Bronze<br/><br/>
         
         
         What age is it?<br/>
         <input type = "radio" name = "age" value = "infant" checked>Infant<br/>
         <input type = "radio" name = "age" value = "youth">Youth<br/>
         <input type = "radio" name = "age" value = "adult">Adult<br/><br/>
         
         Do you have a picture?<br/>
         <select>
            <option value = "yes">Yes, I have a picture</option>
            <option value = "no">No, I don't have a picture</option>
            <option value = "na" selected>N/A</option>
         </select><br/><br/>
         
         <input type = "reset" value = "Reset" style = "padding: 5px 20px">
         <input type = "submit" value = "Submit" style = "padding: 5px 20px">
         
         <br/><br/>
         
      </form>
   </div>
   
   
   <script>
      function myFunction() {
         var x = document.getElementById("myForm");
         if (x.style.display === "none") {
            x.style.display = "block";
         } else {
            x.style.display = "none";
         }
      }
   </script>
      
   <footer id = "bottom"> 
      <p> Posted by: Emily Hanks <br/> 
      <a href="#top">Go to top</a></p>
   </footer>
      
</body>
</html>