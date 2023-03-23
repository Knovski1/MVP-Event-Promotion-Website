<?php
//session_start();
     require_once("connect.php");
?>
<!Doctype html>
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
		 <!--Hello <?php //echo $user_data['user_name'];?> -->
        <div id= "container my-5">
            <form name="form3" action="edit_events.php" method="post">
                <!-- All form fields start from here: -->
                <label for="event_name">Event Name To Update: </label>
                <input type="text" id="event_name" name="event_name" autocomplete = "off" value=<?php  echo $event_name;?>>
                <br><br>
                <label for="event_date">Event Date To Update: </label>
                <input type="date" id="event_date" name="event_date" autocomplete = "off" value=<?php  echo $event_date;?>>
                <br><br>
                <label for="event_location">Event Location To Update: </label>
                <input type="text" id="event_location" name="event_location" autocomplete = "off" value=<?php  echo $event_location;?>>
                <br><br>
                <label for="event_description">Event Description To Update: </label>
                <input type= "memo" id="event_description" name="event_description" autocomplete = "off" value=<?php  echo $event_description;?>>
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