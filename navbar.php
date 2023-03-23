<?php
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
?>
<!Doctype html>
<html>
    <head>
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
        <title>Navigation Bar</title>
    </head>
    <body>
       <nav class="navbar navbar-default">
       <div class="container-fluid">
       <div class="navbar-header">
       </div>
         <ul class="nav navbar-nav">
             <li><a href="home.php">Home</a></li>
             <li><a href="browse.php">Browse</a></li>
	         <li><a href="about.php">About</a></li>
             <li><a href="contact_us.php">Contact Us</a></li>
	         <li><a href="login_form.php">Login</a></li>
	         <li><a href="signup_form.php">Sign Up</a></li>
             <li><a href="dashboard.php">Dashboard</a></li>
         </ul>
       </div>
       </nav>
    </body>
</html>