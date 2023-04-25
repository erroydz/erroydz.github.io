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
                      <a href="#" class="nav_link active"> 
                        <span class="iconify" data-icon="carbon:review"></span>
                        <span class="nav_name">Reviews</span> 
                      </a> 
                      <a href="about.php" class="nav_link"> 
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
    <div class="main">


    </div>
    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>