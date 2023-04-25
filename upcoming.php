
<?php

  include_once 'classes/Insert.php';
  $res = new Add();

  
  if(isset($_GET['id'])){
    $movie_id = $_GET['id'];
    
  }

      
      if($res->placetoToupcoming($movie_id)){

            header("location: adminmain.php?inNshowing");

      }else
        echo "fail";



?>