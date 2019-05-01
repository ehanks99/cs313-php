<?php
    session_start([
        'cookie_lifetime' => 86400,
    ]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balloon Sales</title>

    <?php
        include 'header.php';
    ?>

    <style>
        .aboutUs
        {
            background-color: sienna; /* light brown */
        }
    </style>
</head>
<body>
    <div style = "background-color: pink">
        <h2 style = "text-align: center">Our prices are sure to inflate your party!<br>
        We offer a large selection of balloons in many <br>
        different sizes, colors & material. Buy today & save, <br>
        plus get free shipping offers on all party decorations!</h2>
    </div>
</body>
</html>