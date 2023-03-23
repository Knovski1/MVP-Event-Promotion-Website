<?php
session_start(); // this is to check the user's ID:
     require_once("connect.php"); // this connects with the database:
     
     if(isset($_POST['update'])){
         // Check the data submitted method in the form using session:
        // let's declare some new variables here:
        $id = $_POST['id'];
        $event_name = $_POST['event_name'];
        $event_date = $_POST['event_date'];
        $event_location = $_POST['event_location'];
        $event_description = $_POST['event_description'];
        //$event_type = $_POST['event_type'];
        //$event_time = $_POST['event_time'];
        //$event_join_link = $_POST['event_join_link'];
        if(!empty($id) && !empty($event_name) && !empty($event_date) && !empty($event_location) && !empty($event_description) && !is_numeric($event_name) && !is_numeric($event_location) && !is_numeric($event_description)){
        // Try the update query here:
            $sql_update = "update `events` set event_name='$event_name',event_date='$event_date',event_location='$event_location',event_description='$event_description' where id=$id";
            $result_check = mysqli_query($website_connect, $sql_update); // Save the query:
            // Check if query worked:
            if($result_check){
            echo " Updated successfully! "; // positive message:
            }else{
            echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
            die; // to stop the code from continuing:
            }
        }
    }
   
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
      <!--  <link rel="stylesheet" type="text/css" href="style.css">  for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Edit & Update Events Form: </title>
    </head>
    <body>
        <h1>Edit & Update Your Event Here: </h1>
        <br><br>
        <p>In here You will be able to add your event onto the website: </p>
        <!-- Main Code starts from here: -->
        <button class="btn btn-seconadry m1-2"><a href = "logout.php">Logout</a></button>
		<br><br>
        <div id= "container my-5">
            <form name="form3" method="post">
                <!-- All form fields start from here: -->
                <label for="id">Event ID to Update: </label>
                <input type="number" name="id" autocomplete="off">
                <br><br>
                <label for="event_name">Event Name To Update: </label>
                <input type="text" name="event_name" autocomplete = "off" >
                <br><br>
                <label for="event_date">Event Date To Update: </label>
                <input type="date" name="event_date" autocomplete = "off">
                <br><br>
                <label for="event_location">Event Location To Update: </label>
                <input type="text" name="event_location" autocomplete = "off">
                <br><br>
                <label for="event_description">Event Description To Update: </label>
                <input type= "text" name="event_description" autocomplete = "off">
                <br><br>
                <!--
                <label for="event_time">Event Time To Update: </label>
                <input type="time" id="event_time" name="event_time" placeholder="17:00">
                <br><br>
                -->
                <!--
                <label for="event_type">Event Type: </label>
                <input type="text" id="event_type" name="event_type" placeholder="Entertainment & Enjoyment! ">
                <br><br>
                -->
                <!-- 
                <label for="event_join_link">Event Joining Link To Update: </label>
                <input type="hyperlink" id="event_join_link" name="event_join_link" placeholder="https:\\www.joinevent.com">
                <br><br>
                -->
                <!-- Buttons here below: -->
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                <button type="reset" class="btn btn-secondary m1-2" name="reset6">Reset</button> 
                <br><br><br><br>
                <!-- Option to go back to browse: -->
                <button><a href="browse.php">Changed Your Mind! Click here to go back to Main Events Page: </a></button>
            </form>
        </div>
    </body>
</html>