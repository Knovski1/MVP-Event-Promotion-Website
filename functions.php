<?php
     require_once("connect.php"); // This is to connect it to the database:
     
	// Login Creation code using check_login function: 
	function check_login($website_connect){
		 if(isset($_SESSION['user_id'])){
			$id = $_SESSION['user_id'];
			$query = "SELECT * FROM users WHERE user_id = '$id' limit 1";
			 
			$result = mysqli_query($website_connect, $query);
			if($result && mysqli_num_rows($result) > 0){
                    $user_data = mysqli_fetch_assoc($result);
				return $user_data;
			}
		 }
		 // Redirect to login:
		 header("Location: login.php");
		 // die to stop the code from con:
		 die;
		 
	 }
	// User_id random function for the user_id generation within the database:
	function random_num($length){
		$text = "";
		// if the length is less than 5
		if($length < 5){
		     $length = 5;
          }
		// Random number to have different length user_id:
		$len = rand(4,$length);
		// for loop is to check the statement status:
		for($i =0; $i< $len; $i++){
               # code...();
               // Add to the text every time the if statement is true:
			$text .= rand(0,9);
		}
		// Return the value of text after use;
		return $text;
	}
	/*
	// event_id random function for the event_id generations within the events tables within phpmyadmin database:
	function random_num_1($eventidlength){
		// declare a new variable empty for now:
		$text1 = "";
		// checking the length if its less than 6
		if($eventidlength < 6){
			$eventidlength = 6;
		}
		// Random number to have different variable;
		$event_id_length = rand(5, $eventidlength);
		// for loop to check the statement status:
		for($e =0; $e<$event_id_length; $e++){
			# code...();
			// add to the text1 everytime if statement is true;
			$text1 .= rand(0,8);
		}
		// return the value of text1 after use:
		return $text1;
	}
	*/
?>