<?php
session_start(); // to store the users ID:
     require_once("connect.php"); // to connect it to the database:
     include("navbar.php"); // to connect it to the navigation bar:
?>
<Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Display Events: </title>
    </head>
    <body>
        <h1>Displaying the Events</h1>
        <p>Here you can view all the events available: </p>
        <!--- table bootstrap here: -->
        <div class="container my-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Event Date</th>
                        <th scope="col">Event Location</th>
                        <th scope="col">Event Description</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
            <?php
            // select query:
            $sql_display = "Select * from `events`";
            $result = mysqli_query($website_connect, $sql_display);
            while($row = mysqli_fetch_assoc($result)){
                $id=  $row['id'];
                $event_name= $row['event_name'];
                $event_date= $row['event_date'];
                $event_location= $row['event_location'];
                $event_description= $row['event_description'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$event_name.'</td>
                <td>'.$event_date.'</td>
                <td>'.$event_location.'</td>
                <td>'.$event_description.'</td>
                <td>
                   <a href="edit_events.php" class="btn btn-dark">Update Events</a>
                   <a href="delete_events_form.php" class="btn btn-danger">Delete Events</a>
                   <a href="add_events_form.php" class="btn btn-success">Add Events</a>
                </td>
                </tr>';
            }
            ?>
        </div>
                </tbody>
            </table>

    </body>
</html>