<?php
    session_start();

    $_SESSION["inCart"] = $_GET["inCart"];

    $pNames =  $_GET["pictureNames"];
    if ($pNames != null)
    {
        $index1 = 0;
        if ($_SESSION["pictureNames"] != null && $_SESSION["pictureNames"] != array())
            $index1 = sizeof($_SESSION["pictureNames"]);
        $index2 = $index3 = $index1;
        for ($i = 0; $i < sizeof($pNames); $i++)
        {
            $_SESSION["pictureNames"][$index1] = $pNames[$i];
            $index1++;
        }

        $pFiles =  $_GET["pictureFiles"];
        for ($i = 0; $i < sizeof($pFiles); $i++)
        {
            $_SESSION["pictureFiles"][$index2] = $pFiles[$i];
            $index2++;
        }

        $newPrice =  $_GET["prices"];
        for ($i = 0; $i < sizeof($newPrice); $i++)
        {
            $_SESSION["prices"][$index3] = $newPrice[$i];
            $index3++;
        }
    }

    header("Location: shoppingCart.php");
?>