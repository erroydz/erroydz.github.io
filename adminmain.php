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
          <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
          <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
          <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                      <a href="adminmain.php" class="nav_link active"> 
                        <span class="iconify" data-icon="ic:outline-local-movies"></span>
                        <span class="nav_name">Manage Movies</span> 
                      </a> 
                      <a href="adminbookings.php" class="nav_link"> 
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

    <a class="" href="addmovie.php">Add Movie</a>

    <div class="table" style="color: white;">

    <table id="manage-movies">
		<thead>
			<tr>
				<th>Movie ID</th>
        <th>Date Inserted</th>
				<th>Movie Title</th>
				<th>Poster</th>
        <th>Link Trailer</th>
        <th>Release Date</th>
        <th>Director</th>
        <th>Top Cast</th>
				<th>Genre</th>
				<th>Sysnopsis</th>
				<th>Price</th>
				<th>Promo</th>
				<th>Total</th>
        <th>Status 0-archived <br> 1-available-movie  <br> 2-Now Showing 3-Upcoming</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php

			  $alldata = $res->showdata();



        $status = array(0,1,2,3);

			  if($alldata){
				
				while ($row = mysqli_fetch_assoc($alldata)){
					  ?>
						<tr>
						
							<td><?php echo $row['movie_id']?></td>
              <td><?php echo $row['date_inserted']?></td>
							<td><?php echo $row['movie_title']?></td>
							<td><img style="width:200px;" src="uploads/<?php echo $row['img_url']?>" class="img-fluid"alt=""></td>
              <td><?php echo $row['movie_trailer']?></td>
              <td><?php echo $row['release_date']?></td>
              <td><?php echo $row['director']?></td>
              <td><?php echo $row['top_cast']?></td>
							<td><?php echo $row['genre']?></td>
							<td><?php echo $row['movie_sypnosis']?></td>
							<td><?php echo $row['ticket_price']?></td>
							<td><?php echo $row['promo']?></td>
							<td><?php echo $row['total']?></td>
              <td><?php echo $row['status']?></td>
							<td>
                <a href="edit.php?id=<?php echo $row['movie_id'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square" style="color: #8f2b34;">edit</i></a>
                <a href="nowshowing.php?id=<?php echo $row['movie_id'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square" style="color: #fff;">nowshowing</i></a>
                <a href="upcoming.php?id=<?php echo $row['movie_id'] ?>"class="link-dark"><i class="fa-solid fa-pen-to-square" style="color: #3fe;">upcoming</i></a>
                <a href="archive.php?id=<?php echo $row['movie_id'] ?>"class="link-dark"><i class="fas fa-archive" style="color: #8f2b34;">archive</i></a>
                <a href="restore.php?id=<?php echo $row['movie_id'] ?>"class="link-dark"><i class="fas fa-trash-restore" style="color: #8f2b34;">restore</i></a>
							</td>
						</tr>
						<?php
				  }
			  }  ?>

		</tbody>
	</table>
 
    </div>
    <!--Container Main end-->
      <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
      <script type='text/javascript' src='scripts/script.js'></script>
      
                            
      </body>
  </html>