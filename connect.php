<?php
// declare variables here:
$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "db5cs024webdata";
// $mysqli connect statements to connect to phpmyadmin using the account details:
$website_connect = mysqli_connect($dbhost, $dbusername,$dbpassword, $dbname);
// if statements to check the connection status:
if ($website_connect -> connect_errno) {
    echo "Failed to connect " . $website_connect -> connect_error; // This will give error message to user as it is not connected:
    exit(); // this is to stop the code from Continue:
}
else{
    echo ""; // if it works, it will print nothing as user's doesn't need to see the database as it is irrelevant.
}

?>