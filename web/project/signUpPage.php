<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 

    <script>
        function setVariables(first, last, email)
        {
            document.getElementById("firstName").value = first;
            document.getElementById("lastName").value = last;
            document.getElementById("email").value = email;
        }

        function checkPasswordsMatch()
        {
            var pswrd = document.getElementById('pswrd').value;
            var vPswrd = document.getElementById("verifyPswrd").value;

            if (pswrd != vPswrd)
            {
                document.getElementById("pswrdError1.1").innerHTML = "**Passwords do not match**";
                document.getElementById("pswrdError2").innerHTML = "**Passwords do not match**";
                return false;
            }
            else
            {
                document.getElementById("pswrdError1.1").innerHTML = "";
                document.getElementById("pswrdError2").innerHTML = "";
                return true;
            }
        }

        function hasNumber(myString) 
        {
            return /\d/.test(myString);
        }

        function checkCharacters()
        {
            var pswrd = document.getElementById('pswrd').value;

            if (!hasNumber(pswrd) || pswrd.length < 7)
            {
                document.getElementById("pswrdError1.0").innerHTML = "**Password must contain seven characters and a number**";
                return false;
            }
            else
            {
                document.getElementById("pswrdError1.0").innerHTML = "";
                return true;
            }
        }

        function validate()
        {
            if (checkCharacters() && checkPasswordsMatch())
                return true;
            else
                return false;
        }
    </script>
</head>
<body onsubmit = "return validate()" <?php if (isset($_GET["error"])) { echo "onload=\"setVariables('" . $_GET["firstN"] . "', '" . $_GET["lastN"] . "', '" . $_GET["email"] . "')\"";}?>>
    <?php
        include 'navbar.php';

        if (isset($_GET["error"]))
        {
            echo '
            <div class="alert alert-danger text-center">
              <strong>ERROR: </strong>' . $_GET["error"] . '
            </div>';
        }
    ?>
    
    <div class="container">
        <h2 class="text-center">Sign Up Form</h2><br/>
        <form class="form-horizontal" action="validateSignUp.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstName">First Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstName" placeholder="John" name="firstName" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="lastName">Last Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lastName" placeholder="Smith" name="lastName" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pswrd">Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="pswrd" onfocusout="checkCharacters()" placeholder="Enter password" name="pswrd" required>
                    <p><span style="color:red" id="pswrdError1.0"></span>
                    <p><span style="color:red" id="pswrdError1.1"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="verifyPswrd">Verify Password:</label>
                <div class="col-sm-10">          
                    <input type="password" class="form-control" id="verifyPswrd" onkeyup="checkPasswordsMatch()" placeholder="Enter password" name="verifyPswrd" required>
                    <p><span style="color:red" id="pswrdError2"></span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="example@gmail.com" name="email" required>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>