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
    //echo $temp;

    //$stmt = $db->prepare('SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = :uname');
    //$stmt->execute(array(':uname' => $temp));
    $stmt = $db->prepare('SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = ' . $temp);
    $stmt->execute();

    //echo $rows[0]["username"];
    //echo $rows[0]["email"];
    //$stmt = $db->prepare("SELECT username, pswrd, email, first_name, last_name, is_admin FROM login_info WHERE username = :un");
    //$stmt->bindValue(':un', $temp, PDO::PARAM_STR);
    //$stmt->execute();
    //$stmt->execute(array(':username' => $temp));
    //$stmt->rowCount();
    //$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row)
    {
        echo $row["email"];
    }

    if (empty($rows))
    {
        echo 'rows is empty';
    }
    else
    {
        echo 'rows is not empty';
    }
    
    //$stmt->debugDumpParams();
    
    /*if (empty($rows))
    {
        header("Location: loginPage.php?error=Username not found.");
    }
    else if (strcmp($password, $rows[0]["pswrd"]) == 0)
    {
        $_SESSION["loggedIn"] = true;
        $_SESSION["firstName"] = $rows[0]["first_name"];
        $_SESSION["lastName"] = $rows[0]["last_name"];
        $_SESSION["isAdmin"] = $rows[0]["is_admin"];
        $_SESSION["email"] = $rows[0]["email"];

        header("Location: mainPage.php");
    }
    else
    {
        header("Location: loginPage.php?error=Incorrect password.");
    }
    */
?>