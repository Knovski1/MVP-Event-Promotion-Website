<?php
session_start(); // check the user login to in server website:
     require_once("connect.php"); // connects to the database:
     include("dashboard.php"); // to link the user to the database:
     $sql_display = "Select * from `dashboard`";
     if($result > 0){
          echo "Admin Found!";
     }else{
          echo "Admin Not Found! ";
          die; // to stop the code:
     }
     if(isset($_SESSION['admin_id'])){
          echo "Admin Signed In: ";
     }else{
          echo "error" .mysqli_error($website_connect);
          die; // to stop the code from working:
     }
     

?>