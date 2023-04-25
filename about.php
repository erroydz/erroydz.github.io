<?php

	include_once 'classes/Insert.php';
	$res = new Add();

?>

<!doctype html>
  <html>
      <head>
          <meta charset='utf-8'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
          <title>Home</title>
          <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
          <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
          <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
          <link rel="stylesheet" href="styles\style.css">
          <link rel="stylesheet" href="styles\restyle.css">
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
                      <a href="home.php" class="nav_link"> 
                        <span class="iconify" data-icon="solar:ticket-sale-broken"></span>
                        <span class="nav_name">Tickets</span> 
                      </a> 
                      <a href="review.php" class="nav_link"> 
                        <span class="iconify" data-icon="carbon:review"></span>
                        <span class="nav_name">Reviews</span> 
                      </a> 
                      <a href="#" class="nav_link active"> 
                        <span class="iconify" data-icon="mdi:about-circle-outline"></span>
                        <span class="nav_name">About Us</span> 
                      </a> 
                      <a href="adminmain.php" class="nav_link"> 
                        <span class="iconify" data-icon="mdi:account-eye"></span>
                        <span class="nav_name">Adnim ViewU</span> 
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
    <!-- <div class="main">

    <section class="about-us">
			<h1>About Us</h1>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			<h2>Our Team</h2>
			<div class="team-member">
				<img src="https://via.placeholder.com/150" alt="John Doe">
				<h3>John Doe</h3>
				<p>CEO</p>
			</div>
			<div class="team-member">
				<img src="https://via.placeholder.com/150" alt="Jane Doe">
				<h3>Jane Doe</h3>
				<p>COO</p>
			</div>
		</section>
		<section class="contact-us">
			<h1>Contact Us</h1>
			<form>
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" required>
				<label for="message">Message:</label>
				<textarea id="message" name="message" required></textarea>
				<input type="submit" value="Submit">
			</form>
		</section>

    </div> -->
    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>