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
    echo $temp . $password;

    $stmt = $db->prepare('SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = ' . $temp);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    /*
    if (empty($rows))
    {
        header("Location: loginPage.php?error=Username not found.");
    }
    else if (strcmp($password, $rows[0]["pswrd"]) == 0)
    {
        include 'logIn.php';
    }
    else
    {
        header("Location: loginPage.php?error=Incorrect password.");
    }
    */
?>