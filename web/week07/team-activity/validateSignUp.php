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
    $firstName = test_input($_POST["firstName"]);
    $lastName = test_input($_POST["lastName"]);
    $email = test_input($_POST["email"]);
    $temp = "'" . $username . "'";

    $stmt = $db->prepare('SELECT username FROM login_info WHERE username = ' . $temp);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
    // if the statement returns something, that means the username is already in use
    if (empty($rows))
    {
        $stmt = $db->prepare("INSERT INTO login_info (login_info_id, username, pswrd, email, first_name, last_name, is_admin)
                                  VALUES (nextval('login_info_s1'), :user, :pswrd, :email, :firstN, :lastN, 'N')");
        $stmt->execute(array(':user' => $username, ':pswrd' => $password, ':email' => $email, ':firstN' => $firstName, ':lastN' => $lastName));
        
        include 'logIn.php';
        header("Location: mainPage.php");
    }
    else
    {
        header("Location: signUpPage.php?error=Username already used.&firstN=" . $firstName . "&lastN=" . $lastName . "&email=" . $email);
    }
?>