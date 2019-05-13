<?php
    session_start();

    $_SESSION["inCart"] = $_GET["inCart"];
    $_SESSION["pictureNames"] = $_GET["pictureNames"];
    $_SESSION["pictureFiles"] = $_GET["pictureFiles"];
    $_SESSION["prices"] = $_GET["prices"];

    header("Location: shoppingCart.php");
?>