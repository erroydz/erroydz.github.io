
<?php

  include_once 'classes/Insert.php';
  $res = new Add();

  
  if(isset($_GET['id'])){
    $movie_id = $_GET['id'];
    
  }

      
      if($res->archivedata($movie_id)){

            header("location: adminmain.php?insuccess archive");
            $res->delete_movie_rec($movie_id);

      }else
        echo "fail";



?>