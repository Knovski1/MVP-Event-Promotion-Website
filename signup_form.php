<?php
session_start();
     require_once("connect.php");
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href="stylewebsite.css"> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Sign Up</title>
    </head>
    <body>
    <h1>Sign Up: </h1>
       <div>
            <form action = "signup.php" method= "post">
                <!-- user name here: -->
                <label for="user_name">username</label>
                <input type="text" id="user_name" name="user_name" required autocomplete="off">
                <br><br>
                <!-- password here: -->
                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required autocomplete="off">
                <br><br>
                <!-- Submit button here: -->
                <button type="submit" class="btn btn-primary"name="submit2">Sign Up</button>
                <!-- Reset Button here: -->
                <button type="reset" class="btn btn-secondary" name="reset2">Reset</button>
                <br><br><br><br>
                <!-- Login Page Option Here: -->
               <button class="btn btn-success"><a href="login_form.php">Already Have an account Login Here: </a></button>
            </form>
            <br><br><br><br>
            <!-- Home Page Displayed Here: -->
            <button class="btn btn-danger"><a href="home.php">Changed Your Mind, Back to Home Page:</a></button>
       </div>
    </body>
</html>