<?php
session_start();
    require_once("connect.php");
    include("navbar.php");
    /*
// Database login credentials
$servername = "localhost"; // Replace with your server name
$username = "your_username"; // Replace with your database username
$password = "your_password"; // Replace with your database password
$dbname = "your_database_name"; // Replace with your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search History</title>
</head>
<body>
	<form method="GET" action="search.php">
		<label>Search:</label>
		<input type="text" name="search_term">
		<input type="submit" name="submit" value="Search">
	</form>

	<?php
	// Check if the form was submitted
	if(isset($_GET['submit'])) {
		
		// Get the search term entered by the user
		$search_term = $_GET['search_term'];
		
		// Prepare the SQL query
		$sql = "SELECT * FROM search_history WHERE search_term LIKE '%$search_term%'";
		
		// Execute the query
		$result = $conn->query($sql);
		
		// Check for errors
		if (!$result) {
			echo "Failed to retrieve search history: (" . $conn->errno . ") " . $conn->error;
			exit();
		}
		
		// Display the search history
		echo "<h2>Search History:</h2>";
		while ($row = $result->fetch_assoc()) {
			echo "<p>Search ID: " . $row['search_id'] . "</p>";
			echo "<p>Search Term: " . $row['search_term'] . "</p>";
			echo "<p>Search Date: " . $row['search_date'] . "</p>";
		}
	}
	?>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
