<?php
    session_start();
    
    session_unset();
    header("Location: loginPage.php");
    die(); // we always include a die after redirects.
?>