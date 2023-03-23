<?php
session_start();
     require_once("connect.php");
	 include("functions.php");
	 include("navbar.php");
	// This is to check if the user is logged in or not:
	$user_data = check_login($website_connect);
?>
<!Doctype html>
<html>
     <head>
		 <!-- Add website style file here: -->
		 <link rel="stylesheet" type="text/css" href="style.css">
		 <!-- All meta tags link here: -->
	     <meta charset="UTF-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <!-- Bootstrap link here: -->
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		 <title>Account</title>
	 </head> 
	 <body>
	     <!--  Comment: -->
		 <!-- Main Code starts from here: -->
		 <button class="btn btn-seconadry m1-2"><a href = "logout.php">Logout</a></button>
		 <br><br>
		 Hello <?php echo $user_data['user_name'];?>!
		 <!-- JavaScript code here: -->
		 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
		 <!-- <button><a href="logout.php">Logout</a></button> -->
	 </body>
</html>