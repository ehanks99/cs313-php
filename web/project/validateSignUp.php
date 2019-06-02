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

    $username = "'" . test_input($_POST["username"]) . "'";
    $password = "'" . test_input($_POST["pswrd"]) . "'";
    $firstName = "'" . test_input($_POST["firstName"]) . "'";
    $lastName = "'" . test_input($_POST["lastName"]) . "'";
    $email = "'" . test_input($_POST["email"]) . "'";

    $stmt = $db->prepare('SELECT username FROM login_info WHERE username = ' . $username);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // if the statement returns something, that means the username is already in use
    if (empty($rows))
    {
        $stmt = $db->prepare("INSERT INTO login_info (login_info_id, username, pswrd, email, first_name, last_name, is_admin)
                                  VALUES (nextval('login_info_s1'), :user, :pswrd, :email, :firstN, :lastN, 'N')");
        $stmt->execute(array(':user' => $username, ':pswrd' => $password, ':email' => $email, ':firstN' => $firstName, ':lastN' => $lastName));
        
        $url = "validateLogin.php";

        $fields = array(
            '__VIEWSTATE '      => $state,
            '__EVENTVALIDATION' => $valid,
            'btnSubmit'         => 'Submit');

        $fields_string = http_build_query($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOP_URL, $url);
        curl_setopt($ch, CURLOP_POST, true);
        curl_setopt($ch, CURLOP_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        echo $result;

        //$_POST["username"] = $username;
        //$_POST["pswrd"] = $password;
    }
    else
    {
        header("Location: signUpPage.php?error=Username already used.");
    }
    
    //header("Location: mainPage.php");
?>