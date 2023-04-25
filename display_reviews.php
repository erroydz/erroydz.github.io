<?php
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

// Get the reviews for the movie from the database
$sql = "SELECT * FROM reviews WHERE movie_id = $movie_id ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// Display the reviews
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		echo '<div class="review">';
		echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
		echo '<p>' . htmlspecialchars($row['review']) . '</p>';
		echo '<div class="rating">';
		echo '<span>' . htmlspecialchars($row['rating']) . ' stars</span>';
		echo '<div class="stars">';
		for ($i = 1; $i <= $row['rating']; $i++) {
			echo '<span>★</span>';
		}
		for ($i = $row['rating'] + 1; $i <= 5; $i++) {
			echo '<span>☆</span>';
		}
		echo '</div>'; // end .stars
		echo '</div>'; // end .rating
		echo '</div>'; // end .review
	}
} else {
	echo '<p>No reviews yet.</p>';
}

// Close the database connection
mysqli_close($conn);
?>
