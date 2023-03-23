<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     include("functions.php"); // link to the functions page here:
    // This is to check if the details entered using the post format:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Post all the relevant variables:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // Checking if they are not both empty:
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){ // !is_numeric username can't be a number:
            //Save to database;
            $user_id = random_num(20); // User ID using a random number:
            // Insert into the database using the query:
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
            // To save the generated query:
            mysqli_query($website_connect,$query);
                
            // Direct users to login page:
            header("Location: login.php");
            die; // This is to stop the code from continuing:
        }
        else{
            echo("Please Enter valid Information");
            die;// to stop the code from continuing:
        }
    }
    
    /*
    if(isset($_POST['submit1']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
        // get the form data:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
    }
    // Checking if they are not both empty:
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){ // !is_numeric username can't be a number:
        //Save to database;
        $user_id = random_num(20); // User ID using a random number:
        // Insert into the database using the query:
        $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
        if(mysqli_query($website_connect, $query)){
            echo "Record added successfully! ";
            // To save the generated query:
            mysqli_query($website_connect,$query);
        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($website_connect);
        }  
        // Direct users to login page:
        header("Location: login.php");
        die; // This is to stop the code from continuing:
    }
    else{
        echo("Please Enter valid Information");
        die;// to stop the code from continuing:
    }
    */
        
?>
