<?php
session_start();
     include("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:

?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">  for bootstrap style -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Contact Us</title>
    </head>
    <body>
        <!-- Main heading here: -->
        <h1>Contact Us</h1>
        <p>In here you will be able to contact me using the form below! </p>
        <!-- form here: -->
        <form method = "POST">
            <!-- Full name here: -->
            <label for ="full_name">Name:</label>
            <input type = "text" id= "full_name" name= "full_name" placeholder = "John Parker">
            <br><br><br>
            <!-- email here: -->
            <label for = "email">Email: </label>
            <input type= "memo" id= "email" name = "email" placeholder = "j.parker18@gmail.com">
            <br><br><br>
            <!-- Query here: -->
            <label for = "query">Query</label>
            <input type = "text" id = "query" name = "query" placeholder = "I am having issues with my homepage products! ">
            <br><br><br>
            <!-- Submit button here: -->
            <button type= "Submit" class="btn btn-primary" name="submit3">Submit</button>
            <!-- Reset Button here: -->
            <button type="reset" class="btn btn-secondary m1-2" name="reset3">Clear</button>
        </form>
    </body>
</html>