<?php
// Get the values submitted by the form
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$review = $_POST['review'];

// Validate the form data
if (empty($name) || empty($email) || empty($rating) || empty($review)) {
	die("Please fill out all fields.");
}

// Connect to the database
$host = 'localhost';
$username = 'admin';
$password = 'admin';
$dbname = 'movie';
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Insert the review into the database
$sql = "INSERT INTO reviews (name, email, rating, review) VALUES ('$name', '$email', $rating, '$review')";
if (mysqli_query($conn, $sql)) {
	echo "Review submitted successfully.";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
