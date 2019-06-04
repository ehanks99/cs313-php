<?php
    session_start();
    include 'dbConnect.php';

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["pswrd"]);
    $temp = "'" . $username . "'";

    $stmt = $db->prepare('SELECT username, pswrd FROM signUp WHERE username = ' . $temp);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($rows))
    {
        header("Location: loginPage.php?error=Username not found.");
        die(); // we always include a die after redirects.
    }
    else if (password_verify($password, $rows[0]["pswrd"]))
    {
        include 'logIn.php';
        $_SESSION["username"] = $username;
    }
    else
    {
        header("Location: loginPage.php?error=Incorrect password.");
        die(); // we always include a die after redirects.
    }
?>