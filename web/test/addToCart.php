<?php
    session_start();

    if ($_SESSION["inCart"] != null)
    {
        $_SESSION["inCart"] = $_SESSION["inCart"] + 1;
    }
    else
    {
        $_SESSION["inCart"] = 1;
    }

    header("Location: shoppingPage.php");
?>