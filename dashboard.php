<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     include("functions.php"); // for the login function to work:
     //$user_data = check_login($website_connect); // to check the user's login status:
     // Check if user is already logged in:
     if(!isset($user_data)){
        echo "Please Login First"; // login message displayed here again:
        header("Location: login_form.php"); // redirect the user back to login:
        die; // to stop the code:
     }
     /*
Using the session to check the form method:
     */
     if($_SERVER['REQUEST_METHOD'] == "POST" || isset($_POST['submit7'])){
        // Something was posted:
        // get all the other variables:
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];
        $security_question = $_POST['security_question'];
        $admin_date = $_POST['admin_date'];
        if(!empty($admin_username) && !empty($admin_password) && !empty($security_question) && !empty($admin_date) && !is_numeric($admin_username) && !is_numeric($security_question)){
            // echo Something:
            // Insert Query here for Dashboard Table:
            $admin_sql_add = "insert into dashboard (admin_username, admin_password, security_question, admin_date) values ('$admin_username', '$admin_password', '$security_question', '$admin_date')";
            // Save the query:
            $admin_details = mysqli_query($website_connect, $admin_sql_add);
            // check if it worked:
            if(!$admin_details){
                echo "" .mysqli_error($website_connect);
                die; // to stop the code from working or continuing:
            }else{
                echo "Admin Added Successfully! ";
                header("account_details.php");
            }
        }

     }
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
        <title>Dashboard</title>
    </head>
    <body>
        <!-- All the main code here: -->
        <h1>Dashboard</h1>
        <br><br>
        <p>In here you'll be able to have a look at the admin's dashbaord to look at the website.</p>
        <div class="container my-5">
            <form name="form11" action="" method="post">
                <!-- All the fields will be visible here: -->
                <label>Admin User Name</label>
                <input type="text" name="admin_username" autocomplete="off" placeholder="Agent491" required>
                <br><br><br>
                <label>Admin Password</label>
                <input type="password" name="admin_password" autocomplete="off" placeholder="ByeGod97989@$£1000." required>
                <br><br><br>
                <label>Security Question</label>
                <input type="text" name="security_question" autocomplete="off" placeholder="What was Your Mothers Maiden Name???? " required>
                <br><br>
                <input type="text" name="security_question_answer" autocomplete="off" placeholder="" required>
                <br><br><br>
                <label>Admin Date</label>
                <input type="date" name="admin_date" autocomplete="off" placeholder="18-08-2013" required>
                <br><br><br>
            </form>
        </div>
        <button type="submit" class="btn btn-primary" name="submit7">Submit</button>
        <button type="submit" class="btn btn-secondary" name="reset">Reset</button>
        <button type="submit" class="btn btn-danger" name="submit7"><a href="home.php"></a>Back to the Main Page:</button>
        <? php //echo $numberofusers['users'];?>
    </body>
</html>