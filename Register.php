<?php
    require_once('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> The User Registration </title>
    <link rel="stylesheet"  href="Register.css">
</head>
<body>
        <div>
            <?php
                if(isset($_POST['create'])){
                    $firstname      = $_POST['firstname'];
                    $lastname       = $_POST['lastname'];
                    $email          = $_POST['email'];
                    $password       = $_POST['password'];

                    echo $firstname . " " . $lastname . " " . $email . " " . $password;
                }
            ?>
        </div>

            <div>
                
                <form action="Register.php" method="post" >
                    <div class="container">
                            
                        <h1> User Registration </h1>
                        <p> Fill up the form with correct values ! </p>
                        <hr>
                        <label for="firstname"><b> First Name </b></label>
                        <input type="text" placeholder="Enter Firsname" name = "firstname" required>

                        <label for="lastname"><b> Last Name </b></label>
                        <input type="text" placeholder="Enter Lastname" name = "lastname" required>

                        <label for="email"><b> Email </b></label>
                        <input type="email" placeholder="Enter Email" name = "email" required>

                        <label for="password"><b> Password </b></label>
                        <input type="password" placeholder="Enter Password" name = "password" required>
                        <hr>

                        <input type="submit" name="create" class ="registerbtn" value ="Sign up" required>
                            
                    </div>
                    <div class="container signin">
                        <p>Already have an account? <a href="#">Sign in</a>.</p>
                    </div>
                </form>
            </div>
</body>
</html>