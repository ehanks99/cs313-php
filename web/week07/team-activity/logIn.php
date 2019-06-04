    <?php
        $_SESSION["loggedIn"] = true;

        header("Location: welcomePage.php");
        die(); // we always include a die after redirects.
    ?>