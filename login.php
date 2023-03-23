<?php
session_start();
     require_once("connect.php"); // this file inclusion will make access to database phpmyadmin for details:
     include("navbar.php"); // this file included will make access to website navigation bar for user when in action:
     include("functions.php"); // links the functions file here:
     /*
    Cookies will start here:
     checking if the user's login details are correct:
        */
    /*
    if($user_name == $_POST['user_name'] && $password == $_POST['password']){
        // set a cookie with logged in status and value true:
        setcookie("loggedin", "true", time() (84600 * 30));
        // set session variables to set the user details:
        $_SESSION['loggedin'] = true;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['password'] = $password;
        // redirect user to home page:
        header("Location: index.php");
    }else{
        echo "Invalid Username or password";
    }
    */
    
     // checkbox option here:
     if(isset($_POST['checkbox1'])){
        setcookie("cookie_user_name",$_POST['user_name'], time() (3600 + 3600)); // Setting a cookie value:
        setcookie("cookie_password",$_POST['password'], time() (3600 + 3600)); // Setting a cookie value:
        setcookie("loggedin", "true", time() (3600 + 3600)); // setting the loggin became true:
        // set session variables to set the user details:
        $_SESSION['loggedin'] = true;
        $_SESSION['user_name'] = "cookie_user_name";
        $_SESSION['password'] = "cookie_password";
        // redirect user to home page:
        header("Location: index.php");
     }else{
        echo "Invalid Username or password";
    }
     
     // This is to check if the details entered using the post format:
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // SOMETHING WAS posted:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // Checking if they are not both empty:
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
            //Read from the database;
            // Insert into the database using the query:
            $query = "select * from users where user_name= '$user_name' limit 1";
            // Need the result To save the generated query:
            $result = mysqli_query($website_connect, $query);
            
            if($result){
                if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
                    // password is the same as here:
                    if($user_data['password'] === $password){
                        $_SESSION['user_id'] = $user_data['user_id'];
                        // Direct users to main page:
                        header("Location: index.php");
                        //header("Location: add_events.php");
                        //header("Location: edit_events.php");
                        //header("Location: delete_events.php");
                        die; // This is to stop the code from continuing:
                    }
                }
            }
            
            echo("Please Enter a Valid user name or password!");
        }
        else{
            echo("Please Enter valid Information");
        }
    }
    /*
     // check if the user is already logged in:
    if(isset($SESSION['user_id'])){
        header("Location: dashboard.php"); // direct the user to welcome page:
        die; // stop the code:
    }
     // check if login form is submitted:
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get user inputs from login form:
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        // checking for empty values:
    if(empty($user_name)) {  
        $error_msg = "Please enter your username! ";
    }else if(empty($password)) { 
        $error_msg = "Please enter your password ";
    }else{
        echo "Error";
    }

     // using those variables:
     $user_name = mysqli_real_escape_string($website_connect, $user_name);

     // Read from the database:
    $query = " select * from users where user_name= '$user_name' limit 1";
    $result = mysqli_query($website_connect, $query);

     // checking if it displays atleast one record:
    if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);

        // verifying user password:
        if(password_verify($password, $user['password'])) {
            // set session variables and redirect to dashboard
            $_SESSION['user_id'] = $user['id'];
            $SESSION['user_name'] = $user['user_name'];

            header("Location: dashboard.php");
            exit; // to stop the code:
        }else{
            $error_msg = 'Incorrect Password';
        }
    }else{
        $error_msg = 'user not found';
    }
    }
    */
    // close connection:
    mysqli_close($website_connect);
?>
