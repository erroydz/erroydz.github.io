
<?php

  include_once 'classes/Insert.php';
  $res = new Add();

  
  if(isset($_GET['id'])){
    $movie_id = $_GET['id'];




  }

  if(isset($_GET['action'])){
    $action = $_GET['action'];
  }




      if($action == 1){
            $res->placetoNowshowing($movie_id);
            header("location: adminmain.php?inNshowing");

      }else if($action == 0){
            $res->placetoToupcoming($movie_id);

            header("location: adminmain.php?inupcom");

      }else if($action == 0){
            $res->archivedata($movie_id);

            header("location: adminmain.php?insuccess archive");

      }else if($action == 0){
            $res->unarchivedata($movie_id);
            header("location: adminmain.php?inrestore");

      }else
        echo "fail";



?>