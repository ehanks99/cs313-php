<!DOCTYPE html>
<!-- Emily Hanks -->
<html lang = "en">
<head>
    <meta charset = "utf-8"/>
    <meta name = "viewport" content = "width = device - width, initial - scale = 1"/>
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
         
 /*     #myForm
      {
         width: 100%;
         background-color: lightblue;
      }*/
         
   </style>
</head>
<body style = "background-color: LightGray;">
   <header id = "top">
      <ul>
         <li><a href = "assignments.php">Assignments</a></li>
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
      
   <footer id = "bottom"> 
      <p> Posted by: Emily Hanks <br/> 
      <a href="#top">Go to top</a></p>
   </footer>
      
</body>
</html>