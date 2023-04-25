<?php

	include_once 'classes/Insert.php';
	$res = new Add();

?>

<!doctype html>
  <html>
      <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <title>AdminMain</title>
          <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
          <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
          <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
          <link rel="stylesheet" href="styles\style.css">
          <link rel="stylesheet" href="styles\restyle.css">
          <link rel="stylesheet" href="styles\adminStyle.css">
        </head>


      <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <img class="logo" src="img\logo.png" alt=""> 
                    <div class="nav_list"> 
                      <a href="adminmain.php" class="nav_link"> 
                        <span class="iconify" data-icon="ic:outline-local-movies"></span>
                        <span class="nav_name">Manage Movies</span> 
                      </a> 
                      <a href="adminbookings.php" class="nav_link active"> 
                        <span class="iconify" data-icon="material-symbols:book"></span>
                        <span class="nav_name">Manage Bookings</span> 
                      </a> 
                      <a href="adminreview.php" class="nav_link"> 
                      <span class="iconify" data-icon="ic:outline-rate-review"></span>
                        <span class="nav_name">Manage Reviews</span> 
                      </a> 
                      <a href="home.php" class="nav_link"> 
                        <span class="iconify" data-icon="mdi:account-eye-outline"></span>
                        <span class="nav_name">User View</span> 
                      </a>
                    </div>
                </div> 
                  <a href="#" class="nav_link"> 
                    <span class="iconify" data-icon="ic:round-log-out"></span>
                    <span class="nav_name">SignOut</span> 
                  </a>
            </nav>
        </div>

    <!--Container Main start-->
    <div class="table" style="color: white;">

    <table>
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
 
    </div>
    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>