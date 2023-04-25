<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
	// Get the selected seats from the form
	$seats = $_POST['seat'];

	// Check if any seats have been selected
	if (empty($seats)) {
		echo "Please select at least one seat.";
	} else {
		// Display the selected seats
		echo "You have selected the following seats:<br>";
		foreach ($seats as $seat) {
			echo $seat . "<br>";
		}
	}
}
?>
