
<?php

  include_once 'classes/Insert.php';
  $res = new Add();

  
  if(isset($_GET['id'])){
    $movie_id = $_GET['id'];
    
  }

  if($_SERVER['REQUEST_METHOD']=='POST'){
		$register = $res->updateData($_POST,$_FILES,$movie_id);
	}



?>


<!DOCTYPE html>
<html>
  <head>
    <title>Simple Form</title>
    <link rel="stylesheet" href="styles\editstyle.css">
  </head>
  <body> 

  <div class="container">
  <div class="form-image">
    <?php
      $getdata = $res->getidurl($movie_id);
      if($getdata){
        while($row = mysqli_fetch_assoc($getdata)){
          ?>
               <img src="uploads/<?php echo $row['img_url']?>"  alt="placeholder image">  
               <form method="post" enctype="multipart/form-data">
               <input type="file"   name="my_image">
        </div>
          
    <div class="form-container">

   
    

            
            <!-- <label for="option3">Option 3</label>
            <input type="radio" id="option3" name="option" value="option3"> -->
            
            <label for="text1">Movie Title</label>
            <input type="text" id="text1" value="<?php echo $row['movie_title']?>"name="movie_title">

            <label for="text2">Movie Trailer</label>
            <input type="text" id="text2" value="<?php echo $row['movie_trailer']?>"name="movie_trailer">
            
            <label for="text2">Genre</label>
            <input type="text" id="text2" value="<?php echo $row['genre']?>" name="genre">
            
            <label for="text3">Movie_Sypnosis</label>
            <textarea id="text23" name="movie_sypnosis" rows="4" cols="68"><?=$row['movie_sypnosis']?></textarea>

            <label for="text2">Director:</label>
            <input type="text" id="text2" value="<?php echo $row['director']?>" name="director">

            <label for="text2">Top Cast:</label>
            <input type="text" id="text2" value="<?php echo $row['top_cast']?>" name="top_cast">

            <label for="text2">Release Date</label>
            <input type="Date" id="text2" value="<?php echo $row['release_date']?>" name="release_date">

            <br><br>
            

            <label for="text3">ticket_Price</label>
            <input type="text" id="text3" value="<?php echo $row['ticket_price']?>"  name="ticket_price">

            <label for="text3">Promo (%)</label>
            <input type="text" id="text3" value="<?php echo $row['promo']?>"  name="promo">



            
            <input type="submit" name="submit" value="Update">
      </form>

          <?php
        }

      }
    ?>
     
    </div>
    </div>
  </body>
</html>
