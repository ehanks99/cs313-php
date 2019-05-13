<?php
    session_start();

    $_SESSION["inCartTemp"] = $_SESSION["inCart"];
    $_SESSION["inCart"] = 0;
    $_SESSION["pictureNamesTemp"] = $_SESSION["pictureNames"];
    $_SESSION["pictureFilesTemp"] = $_SESSION["pictureFiles"];
    $_SESSION["pricesTemp"] = $_SESSION["prices"];
    
    unset($_SESSION["pictureNames"]);
    unset($_SESSION["pictureFiles"]);
    unset($_SESSION["prices"]);


    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        
        return $data;
    }

    $_SESSION["name"] = test_input($_POST["name"]);
    $_SESSION["email"] = test_input($_POST["email"]);
    $_SESSION["address1"] = test_input($_POST["address1"]);
    $_SESSION["address2"] = test_input($_POST["address2"]);

    header("Location: confirmationPage.php");
?>