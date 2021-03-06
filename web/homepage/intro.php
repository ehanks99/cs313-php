<!DOCTYPE html>
<!-- Emily Hanks -->
<html lang = "en">
<head>
    <meta charset = "utf-8"/>
    <meta name = "viewport" content = "width = device - width, initial - scale = 1"/>
    <title> Home Page </title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id = "page-container">
        <?php
            include "navbar.php";
        ?>

        <div id = "content-wrap">
            <h1 class = "center big">Welcome to Emily's Home Page</h1> 
            <hr>
         
            <a href = "me.jpg">
                <img src = "me.jpg" alt = "Smiling Girl" class = "picture"><br/><br/>
            </a>
            <p class = "special">
                Emily is a Computer Science major at BYU-Idaho with a planned graduation date in 2020. Once she   
                graduates, Emily will return to Oklahoma where she lives and get her second degree in Forensic 
                Science at the University of Central Oklahoma.<br/><br/>
            </p>

            <br>
            <p class = "center quote">"So this is how liberty dies ... with thunderous applause." - Padme Amidala</p>
        </div>
        
        <footer id = "bottom"> 
            <p> Posted by: Emily Hanks <br/>
        </footer>
    </div>
</body>
</html>