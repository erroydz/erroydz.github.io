<?php

	include_once 'classes/Insert.php';

	$res = new Add();

	if($_SERVER['REQUEST_METHOD']=='POST'){
		$register = $res->addData($_POST,$_FILES);
	}


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Add Movie</title>

        <link rel="stylesheet" href="styles\editstyle.css">

  </head>
  <body>
  <div class="container">
  <div class="form-image">


  
   
      <img src="https://via.placeholder.com/686x1016" alt="placeholder image">

        <form 
           method="post"
           enctype="multipart/form-data">

      <input type="file" name="my_image">
        </div>

         <div class="form-container">

        
        <label for="text1">Movie Title</label>
        <input type="text" id="text1" name="movie_title">

        <label for="text2">Movie Trailer</label>
        <input type="text" id="text2" name="movie_trailer">
        
        <label for="text2">Genre</label>
        <input type="text" id="text2" name="genre">
        
        <label for="text3">Movie_Sypnosis</label>
        <textarea id="text23" name="movie_sypnosis" rows="4" cols="68"></textarea>

        <label for="text2">Director:</label>
        <input type="text" id="text2" name="director">

        <label for="text2">Top Cast:</label>
        <input type="text" id="text2" name="top_cast">

        <label for="text2">Release Date</label>
        <input type="Date" id="text2" name="release_date">


        <br><br>
        <label for="text3">ticket_Price</label>
        <input type="text" id="text3" name="ticket_price">

        <label for="text3">Promo (%)</label>
        <input type="text" id="text3" name="promo">

        
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>
        </div>
  </body>
</html>
