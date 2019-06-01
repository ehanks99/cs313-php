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
    $temp = "'" . $username . "'";
    //echo $temp;

    $stmt = $db->prepare("SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = :username");
    $stmt->execute(array(':username' => $temp));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->debugDumpParams();
    echo 'made it here';
    //print_r($rows);
    echo $rows[0]["email"];
    /*
    if (empty($rows))
    {
        header("Location: loginPage.php?error=Username not found.");
    }
    else if (strcmp($password, $rows["pswrd"]) == 0)
    {
        $_SESSION["loggedIn"] = true;
        $_SESSION["firstName"] = $rows["first_name"];
        $_SESSION["lastName"] = $rows["last_name"];
        $_SESSION["isAdmin"] = $rows["is_admin"];
        $_SESSION["email"] = $rows["email"];

        header("Location: mainPage.php");
    }
    else
    {
        header("Location: loginPage.php?error=Incorrect password.");
    }
    */
?>