<?php

	include_once 'classes/insert.php';
	$res = new Add();

    if(isset($_GET['id'])){
    $movie_id = $_GET['id'];
    
  }

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
          <link rel="stylesheet" href="styles\bookstyle.css">
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
                      <a href="home.php" class="nav_link active"> 
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
                  
    <?php
    // assuming that $res is an instance of a class with a method called 'getidurl'
    $getdata = $res->getidurl($movie_id);

    if(mysqli_num_rows($getdata) > 0){ // check if there are any rows returned
        while($row = mysqli_fetch_assoc($getdata)){

            
            echo '<div class="container">
                    <div class="poster">
                      <img src="uploads/' . $row['img_url']. '" alt="Movie Poster">
                    </div>
                  
                    <div class="info">
                      <div class="video-container">
                        <iframe src="' . $row['movie_trailer']. '?autoplay=1&mute=1&controls=0&loop=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      </div>
                  
                      <div class="movie-details">
                        <h1>' . $row['movie_title']. '</h1>
                        <p>Release Date: <span class="release-date">'. $row['release_date'].'</span></p>
                        <p>Director: <span class="director">'. $row['director'].'</span></p>
                        <p>Cast: <span class="cast"></span>'. $row['top_cast'].'</p>
                        <p>Synopsis: <span class="plot">' . $row['movie_sypnosis']. '</span></p>
                        <button class="button">Book Now!</button>
                      </div>
                    </div>
                  </div>
                  ';
            
        }
    } else {
        echo "No data found!";
    }
?>

    </div>

    <div id="popup" class="popup">
      <div class="popup-content">
        <span class="close">&times;</span>
        
        <h1> Seat Selection</h1>
          <orm method="post" action="process.php">
            <table>
              <?php
              // Define the number of rows and columns in the theater
              $num_rows = 6;
              $num_cols = 10;

              // Loop through each row and column to create a seat
              for ($i = 1; $i <= $num_rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $num_cols; $j++) {
                  echo "<td>";
                  echo "<input type='checkbox' name='seat[]' value='" . $i . "-" . $j . "' id='" . $i . "-" . $j . "' />";
                  echo "<label for='" . $i . "-" . $j . "'>" . $i . "-" . $j . "</label>";
                  echo "</td>";
                }
                echo "</tr>";
              }
              ?>
            </table>
          
          </form>
        
        
        <form action="" method="post">
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" required>
          <label for="time">Time:</label>
          <input type="time" id="time" name="time" required>

          <label class="toggle-switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>


          <label>
            <input type="checkbox">
            <div class="checkbox"></div>
            Check me!
          </label>

          <button type="submit" class="submit-button">Submit</button>
        </form>
      </div>
    </div>

    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      <script>
        const bookButton = document.querySelector('.button');
        const popup = document.getElementById('popup');
        const close = document.querySelector('.close');

        bookButton.addEventListener('click', () => {
          popup.style.display = 'block';
        });

        close.addEventListener('click', () => {
          popup.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
          if (event.target == popup) {
            popup.style.display = 'none';
          }
        });
      </script>

      

      
                            
      </body>
  </html>