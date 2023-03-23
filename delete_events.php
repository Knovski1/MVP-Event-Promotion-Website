<?php
/*
session_start(); // this is to check the user's ID:
     require_once("connect.php"); // this connects with the database:
     //include("browse.php"); // connection to the main events page:
     if(isset($_POST['delete'])){
        $id = $_POST['id'];
        $sql_delete = "delete from `events` where `id`= $id";
        $result = mysqli_query($website_connect, $sql_delete);
        // Save the query:
        // Check if query worked:
        if($result){
            //echo "Record deleted successfully! "; 
            // positive message:
            header("browse.php");
        }else{
        echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
        die; // to stop the code from continuing:
        }
 }
     /*
     if($_SERVER('REQUEST_METHOD') == 'POST'){
        $event_id = $_POST['event_id'];
        $event_name = $_POST['event_name'];
        $event_date = $_POST['event_date'];
        $event_location = $_POST['event_location'];
        $event_description = $_POST['event_description'];
        // check:
        if(!empty($event_name) && !empty($event_date) && !empty($event_location) && !empty($event_description)){
            // delete form event id:
            $sql_delete = "delete from events(event_id,event_name, event_date, event_location, event_description) VALUES('$event_id','$event_name','$event_date', '$event_location', '$event_description') where id $id";
            mysqli_query($website_connect, $sql_delete); // Save the query:
            // Check if query worked:
        if($website_connect->$query($sql_delete) === TRUE){
            echo "Records deleted successfully! "; // positive message:
            die;// to stop the code from continuing:
        }else{
            echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
            die; // to stop the code from continuing:
        }
        }
     }*/
     /*
    // for the delete for loop:
     $delete = $_POST['delete'];
     foreach($delete as $id){
        $sql_delete = "delete from events where id = '$id'";
     }
     if(mysqli_query($website_connect, $delete)){
        echo "Item with ID $id has been deleted successfully.";
     }else{
        echo "Error deleting item with ID $id: " . mysqli_error($website_connect);
     }
     */
?>