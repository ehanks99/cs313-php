    <?php
        $_SESSION["loggedIn"] = true;
        $_SESSION["firstName"] = $rows[0]["first_name"];
        $_SESSION["lastName"] = $rows[0]["last_name"];
        $_SESSION["isAdmin"] = $rows[0]["is_admin"];
        $_SESSION["email"] = $rows[0]["email"];

        header("Location: mainPage.php");
    ?>