<?php
session_start(); // This is to get the user's ID checked:
     require_once("connect.php"); // to connect to the database:
     include("functions.php"); //  to link this with the functions file for event random ID function:
     if($_SERVER['REQUEST_METHOD'] == "POST" || isset($_POST['submit4'])){  // Check the data submitted method in the form using session:
        // let's declare some variables here:
        $event_name = $_POST['event_name'];
        $event_date = $_POST['event_date'];
        $event_location = $_POST['event_location'];
        //$event_type = $_POST['event_type'];
        $event_description = $_POST['event_description'];
        //$event_time = $_POST['event_time'];
        //$event_join_link = $_POST['event_join_link'];
        // Checks to see if the variables are not empty or number:
        if(!empty($event_name) && !empty($event_date) && !empty($event_location) && !empty($event_description) && !is_numeric($event_name) && !is_numeric($event_location) && !is_numeric($event_description)){
            // create a random event_id number:
            //$event_id = random_num_1(10);
            // Try the insert query here:
            $sql_add = "insert into events (event_name, event_date, event_location, event_description) values ('$event_name', '$event_date', '$event_location', '$event_description')";
            // Check if query worked:
            mysqli_query($website_connect, $sql_add); // Save the query:
            if(mysqli_query( $website_connect, $sql_add)){
                echo "Records added successfully! ";
                header("Location: browse.php");
                die;// to stop the code from continuing:
            }else{
                echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
                die; // to stop the code from continuing:
            }
        }header("Location: browse.php? add_events=success");
        }else{
            echo "Error: " .mysqli_error($website_connect); // print error message displayed here first:
            die; // stop the code;
        }
?>
<html>
    <head>
        <title>Add Events!</title>
    </head>
    <body>
        <button><a href="browse.php">Back To Browse Events: </a></button>
    </body>
</html>
