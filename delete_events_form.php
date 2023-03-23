<?php
session_start();
    include("connect.php");
    //$id = $_POST['id'];
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST['id'];
        $sql_delete = "delete from `events` where id = $id";
        $result = mysqli_query($website_connect, $sql_delete);
        // Save the query:
        // Check if query worked:
        if($result){
            echo "Record deleted successfully! "; 
            // positive message:
            header("browse.php");
        }else{
        echo "Error Adding records" .mysqli_error($website_connect); // Error adding the require:
        die; // to stop the code from continuing:
        }
 }
?>
<!Doctype html>
<html lang="en">
    <head>
        <!-- Add website style file here: -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- for website style file local: -->
        <!-- All meta tags link here: -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- for bootstrap style -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title> Delete Events Form: </title>
    </head>
    <body>
        <h1>Delete Your Event Here: </h1>
        <br><br>
        <p>In here You will be able to delete your event onto the website: </p>
        <!-- Main Code starts from here: -->
        <button class="btn btn-seconadry m1-2"><a href = "logout.php">Logout</a></button>
		<br><br>
		 <!--Hello <?php //echo $user_data['user_name'];?> -->
        <div id= "box">
            <form name="form2" method="post">
                <!-- All form fields start from here: -->
                <label for= "event_id">Event ID: </label>
                <input type="number" name="id" required>
                <br><br>
                <!--
                <label for="event_name">Event Name: </label>
                <input type="text" id = "event_name" name="event_name" placeholder = "Event Name">
                <br><br>
                <label for="event_date">Event Date: </label>
                <input type="date" id="event_date" name="event_date" placeholder="Event Date">
                <br><br>
                <label for="event_location">Event Location: </label>
                <input type="text" id="event_location" name="event_location" placeholder="Event Location: ">
                <br><br>
                <label for="event_description">Event Description: </label>
                <input type= "text" id="event)_description" name="event_description" placeholder="Event Description">
                <br><br>
                <label for="event_type">Event Type: </label>
                <input type="checkbox" id="event_type" name="event_type" placeholder="Entertainment & Enjoyment! ">
                <br><br>
                -->
                <!--
                <label for="event_time">Event Time: </label>
                <input type="time" id="event_time" name="event_time" placeholder="17:00">
                <br><br>
                <label for="event_join_link">Event Joining Link: </label>
                <input type="hyperlink" id="event_join_link" name="event_join_link" placeholder="https:\\www.joinevent.com">
                <br><br>
                -->
                <!-- Buttons here below: -->
                <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                <button type="reset" class="btn btn-secondary m1-2" name="reset5">Reset</button> 
                <br><br><br><br>
                <!-- Option to go back to browse: -->
                <button><a href="browse.php">Changed Your Mind! Click here to go back to Main Events Page: </a></button>
            </form>
        </div>
    </body>
</html>