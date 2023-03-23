<?php
session_start();
     require_once("connect.php");
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Login</title>
    </head>
    <body>
        <h1>Login: </h1>
        <div>
            <form action = "login.php" method= "post">
                <!-- username file here: -->
                <label for="user_name">username</label>
                <input type="text" id="user_name" name="user_name" value = " <?php //echo $_COOKIE ['user_name']; ?>"  >
                <br><br>
                <!-- password here: -->
                <label for="password">password</label>
                <input type="password" id="password" name="password" value = " <?php// echo $_COOKIE ['password']; ?>" >
                <br><br>
                <!-- checkbox here -->
                <label for="ch1">Remember Username and Password</label>
                <input type="checkbox" id="ch1" name="ch1" value="ch">
                <br><br><br><br>
                <!-- Submit button here: -->
                <button type="submit" class="btn btn-primary" name="submit1">Login</button>
                <!-- Reset Button here: -->
                <button type="reset" class="btn btn-secondary m1-2" name="reset1">Clear</button>
                <br><br><br><br>
                <!-- Signup Page Option Here: -->
                <button><a href="signup_form.php">New to Website Signup here: </a></button>
            </form>
            <!-- Home Page Displayed Here: -->
            <button class="btn btn-danger"><a href="home.php">Changed Your Mind, Back to Home Page:</a></button>
        </div>
    </body>
</html>