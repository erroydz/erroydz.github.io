
<?php

  include_once 'classes/Insert.php';
  $res = new Add();

  
  if(isset($_GET['id'])){
    $movie_id = $_GET['id'];
    
  }

      
      if($res->permanentDelete($movie_id)){

            header("location: trashbin.php?ins");

      }else
        echo "fail";



?>