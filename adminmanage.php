<?php

	include_once 'classes/Insert.php';
	$res = new Add();

?>
<!DOCTYPE html>
<html>
<head>
	<!-- linkneedeed -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">">
	<!-- fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- css -->



	<title>Dashboard Navigator</title>
	<style>
		/* Styling for the navigator */
		nav {
			position: fixed;
			top: 0;
			left: 0;
			height: 100%;
			width: 200px;
			background-color: #f1f1f1;
			overflow-x: hidden;
			padding-top: 20px;
		}
		
		nav a {
			display: block;
			padding: 10px;
			text-decoration: none;
			color: #333;
		}
		
		nav a:hover {
			background-color: #ddd;
			color: #000;
		}
		
		/* Styling for the tables */
		
		table {
			border-collapse: collapse;
			margin: 10% 10%;
			font-family: Arial, sans-serif;
			width: calc(100% - 40px);
			border: 1px solid #ddd;
			background-color: #fff;
			/* width: 50%; */
		}
		
		table th, table td {
			border: 1px solid #ddd;
			padding: 15px;
			text-align: left;
		}
		
		table th {
			background-color: #f1f1f1;
			font-weight: bold;
		}
	</style>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



	Dashboard navigator 
	 <nav>
		<a href="#manage-movies">Manage Movies</a>
		<a href="#manage-bookings">Manage Bookings</a>
		<a href="#reviews">Reviews</a>
	</nav>
	
	<!-- Dummy tables for each nav -->
	<table id="manage-movies">
		<thead>
			<tr>
				<th>Movie_ID</th>
				<th>Movie_title</th>
				<th>img_url</th>
				<th>Genre</th>
				<th>Movie_Sypnosis</th>
				<th>ticket_Price</th>
				<th>Promo</th>
				<th>Total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php

			  $alldata = $res->showdata();
			  if($alldata){
				
				while ($row = mysqli_fetch_assoc($alldata)){

					// $con = Database::getConnection();
					//$sql = "SELECT * FROM `movie_tbl`";
					//$result = $con->query($sql);
  
					//$res = mysqli_query($con, $sql);
					  ?>
						<tr>
						
							<td><?php echo $row['movie_id']?></td>
							 <td><?php echo $row['movie_title']?></td>
							  <td><img style="width:200px;" src="uploads/<?php echo $row['img_url']?>" class="img-fluid"alt=""></td>
							   <td><?php echo $row['genre']?></td>
								<td><?php echo $row['movie_sypnosis']?></td>
								<td><?php echo $row['ticket_price']?></td>
								<td><?php echo $row['promo']?></td>
								<td><?php echo $row['total']?></td>
							<td>
							<a href="edit.php?id=<?php echo $row['movie_id'] ?> "class="link-dark"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="Archive.php?id=<?php echo $row['movie_id'] ?> "class="link-dark"><i class="fas fa-archive"></i></a>
							</td>
						</tr>
						<?php
					
				}
			  }
			 
                  
            ?>

		</tbody>
	</table>
	
	<table id="manage-bookings" style="display:none;">
		<thead>
			<tr>
				<th>Booking ID</th>
				<th>Movie Title</th>
				<th>Show Time</th>
				<th>Seat Number</th>
				<th>User Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>12345</td>
				<td>The Shawshank Redemption</td>
				<td>
                10:00 AM</td>
			<td>A5</td>
			<td>johndoe@gmail.com</td>
		</tr>
		<tr>
			<td>54321</td>
			<td>The Godfather</td>
			<td>2:00 PM</td>
			<td>B3</td>
			<td>janedoe@gmail.com</td>
		</tr>
		<tr>
			<td>67890</td>
			<td>The Dark Knight</td>
			<td>7:00 PM</td>
			<td>C2</td>
			<td>bobsmith@yahoo.com</td>
		</tr>
	</tbody>
</table>

<table id="reviews" style="display:none;">
	<thead>
		<tr>
			<th>Movie Title</th>
			<th>User Name</th>
			<th>Review</th>
			<th>Rating</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>The Shawshank Redemption</td>
			<td>johndoe</td>
			<td>This movie is a classic! I can watch it over and over again.</td>
			<td>5</td>
		</tr>
		<tr>
			<td>The Godfather</td>
			<td>janedoe</td>
			<td>I love this movie. The acting and cinematography are top-notch.</td>
			<td>4</td>
		</tr>
		<tr>
			<td>The Dark Knight</td>
			<td>bobsmith</td>
			<td>Heath Ledger's Joker is one of the greatest villains in cinema history.</td>
			<td>5</td>
		</tr>
	</tbody>
</table>

<script>
	// Function to show/hide tables based on the nav link clicked
	function showTable(tableId) {
		// Hide all tables
		var tables = document.getElementsByTagName("table");
		for (var i = 0; i < tables.length; i++) {
			tables[i].style.display = "none";
		}
		
		// Show the table with the given ID
		var table = document.getElementById(tableId);
		table.style.display = "table";
	}
	
	// Add event listeners to nav links
	document.getElementsByTagName("a")[0].addEventListener("click", function() {
		showTable("manage-movies");
	});
	
	document.getElementsByTagName("a")[1].addEventListener("click", function() {
		showTable("manage-bookings");
	});
	
	document.getElementsByTagName("a")[2].addEventListener("click", function() {
		showTable("reviews");
	});
</script>

</body>
</html>

