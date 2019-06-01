<?php
    include 'dbConnect.php';
    session_start();

    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST["username"]);
    $password = test_input($_POST["pswrd"]);
    echo $username;
    echo $password;

    $stmt = $db->prepare("SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = :username;");
    $stmt->execute(array(':username' => $username));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    if (empty($row))
    {
        header("Location: loginPage.php?error=Username not found.");
    }
    else if (strcmp($password, $row["pswrd"]) == 0)
    {
        $_SESSION["loggedIn"] = true;
        $_SESSION["firstName"] = $row["first_name"];
        $_SESSION["lastName"] = $row["last_name"];
        $_SESSION["isAdmin"] = $row["is_admin"];
        $_SESSION["email"] = $row["email"];

        header("Location: mainPage.php");
    }
    else
    {
        header("Location: loginPage.php?error=Incorrect password.");
    }
?>