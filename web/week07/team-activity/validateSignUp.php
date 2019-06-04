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

    $stmt = $db->prepare('SELECT username FROM signUp WHERE username = ' . $temp);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /*CREATE TABLE signUp
    (
        signUp_id       INTEGER,
        username            VARCHAR(70)         CONSTRAINT nn_signUp_1 NOT NULL,
        pswrd               VARCHAR(100)        CONSTRAINT nn_signUp_2 NOT NULL,
        CONSTRAINT pk_signUp PRIMARY KEY(signUp_id)
    );
    
    CREATE SEQUENCE signUp_s1 START WITH 1;
    CREATE UNIQUE INDEX ui_signUp_1 ON signUp(username);
    */

    // if the statement returns something, that means the username is already in use
    if (empty($rows))
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO signUp (signUp_id, username, pswrd)
                                  VALUES (nextval('signUp_s1'), :user, :pswrd)");
        $stmt->execute(array(':user' => $username, ':pswrd' => $hashedPassword));
        
        include 'logIn.php';
        $_SESSION["username"] = $username;
        header("Location: mainPage.php");
        die(); // we always include a die after redirects.
    }
    else
    {
        header("Location: signUpPage.php?error=Username already used.");
        die(); // we always include a die after redirects.
    }
?>