<?php
session_start();     
	 require_once("connect.php");
	 // check to make sure if the user is already logged then log the user out! :
	 if(isset($_SESSION['user_id'])){
		 unset($_SESSION['user_id']);
	 }
     echo "You have successfully Logged out! ";
	 header("Location: login.php"); // Redirect the user back to login page:
	 die; // This is to stop the code from continuing:
?>