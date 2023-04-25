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
                      <a href="adminbookings.php" class="nav_link"> 
                        <span class="iconify" data-icon="material-symbols:book"></span>
                        <span class="nav_name">Manage Bookings</span> 
                      </a> 
                      <a href="adminreview.php" class="nav_link active"> 
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
 
    </div>
    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>