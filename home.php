<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
    // grant access:
    /*
    if(isset($_COOKIE["user_name"])){  // Verifiying a cookie's value;
         echo"Hello " .$_COOKIE["user_name"]; //display the user's value;
    }else{
        echo"Welcome Guest!";
    }
    */
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
        <title>Home</title>
    </head>
    <body>
        <!--  Main Website code here: -->
        <h1>Welcome to Addies Events </h1>
        <br>
        <p>In here you will find all sort of events below.</p>
    </body>
</html>