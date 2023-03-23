<?php
//session so that the php can remember if user is logged in or not
session_start();
     require_once("connect.php"); // to connect to the database:
	 include("functions.php"); // to provide function access:
	 include("navbar.php"); // to connect it to the navigation bar:
	// This is to check if the user is logged in or not: if not then direct them to the login page
	if(!isset($_SESSION['user_id'])){
		header("Location: login_form.php");
	}


?>