<?php

	include_once 'classes/insert.php';
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

          <link rel="stylesheet" href="assets/css/pace.css">







          <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600%7CRoboto:400" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- <link href="assets/css/style.css" rel="stylesheet" type="text/css"> -->
    <!-- Head Libs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script data-pace-options='{ "ajax": false, "selectors": [ "img" ]}' src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js"></script>
    <script>
var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
    var d = new Date();
    document.getElementById("horas").innerHTML = d.toLocaleTimeString();
}
</script>
<script type="text/javascript">
function Mudaestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>




















          <link rel="stylesheet" href="styles\style.css">
          <link rel="stylesheet" href="styles\carstyle.css">
          <link rel="stylesheet" href="styles\restyle.css">
        </head>


      <body id="body-pd">


        Date: <span class="badge badge-primary" id="horas" style="size: 200px;">NULL</span>



        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <img class="logo" src="img\logo.png" alt=""> 
                    <div class="nav_list"> 
                      <a href="#" class="nav_link active"> 
                        <span class="iconify" data-icon="solar:ticket-sale-broken"></span>
                        <span class="nav_name">Tickets</span> 
                      </a> 
                      <a href="review.php" class="nav_link"> 
                        <span class="iconify" data-icon="carbon:review"></span>
                        <span class="nav_name">Reviews</span> 
                      </a> 
                      <a href="about.php" class="nav_link"> 
                        <span class="iconify" data-icon="mdi:about-circle-outline"></span>
                        <span class="nav_name">About Us</span> 
                      </a> 
                      <a href="adminmain.php" class="nav_link"> 
                        <span class="iconify" data-icon="mdi:account-eye"></span>
                        <span class="nav_name">Adnim View</span> 
                      </a> 
                    </div>
                </div> 
                  <a href="#" class="nav_link"> 
                    <span class="iconify" data-icon="ic:round-log-out"></span>
                    <span class="nav_name">SignOut</span> 
                  </a>
            </nav>
        </div>
  
    <div class="main">

      <div class="carousel">
          <div class="carousel-container">
            <div class="carousel-item active">
              <video src="vids\infini.mp4" autoplay muted loop></video>
            </div>
            <div class="carousel-item">
              <video src="vids\black.mp4" autoplay muted loop></video>
            </div>
            <div class="carousel-item">
              <video src="vids\infini.mp4" autoplay muted loop></video>
            </div>
          </div>
      </div>


        <h1 style="color: white;">Available movies</h1>

    
        <div class="movies">
          <?php
            $alldata = $res->showdataUserpage();
            if($alldata){
              while ($row = mysqli_fetch_assoc($alldata)){
                echo '<div class="movie">
                        <img src="uploads/' .$row['img_url']. '" class="img-fluid" alt="">           
                        <h3 class="mov_title">' .$row['movie_title']. '</h3>
                        <p class="mov_desc">' .$row['movie_sypnosis']. '</p>
                        
                        <a class="mov_book" href="book.php?id='.$row['movie_id'].'">Book Now</a>
                      </div>';
              }
            }
          ?>

        </div>


    </div>

     <br><br><br><br><br><br><br><br>
        <h1 style="color: white;">Now Showing</h1>


        <div class="movies">
          <?php
            $alldata = $res->nowShowing();
            if($alldata){
              while ($row = mysqli_fetch_assoc($alldata)){
                echo '<div class="movie">
                        <img src="uploads/' .$row['img_url']. '" class="img-fluid" alt="">           
                        <h3 class="mov_title">' .$row['movie_title']. '</h3>
                        <p class="mov_desc">' .$row['movie_sypnosis']. '</p>
                        
                        <a class="mov_book" href="book.php?id='.$row['movie_id'].'">Book Now</a>
                      </div>';
              }
            }
          ?>

        </div>

         <br><br><br><br><br><br><br><br>
        <h1 style="color: white;">Upcoming Movies</h1>


        <div class="movies">
          <?php
            $alldata = $res->upcomingMovies();
            if($alldata){
              while ($row = mysqli_fetch_assoc($alldata)){
                echo '<div class="movie">
                        <img src="uploads/' .$row['img_url']. '" class="img-fluid" alt="">           
                        <h3 class="mov_title">' .$row['movie_title']. '</h3>
                        <p class="mov_desc">' .$row['movie_sypnosis']. '</p>
                        
                        <a class="mov_book" href="book.php?id='.$row['movie_id'].'">Book Now</a>
                      </div>';
              }
            }
          ?>

        </div>




    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>