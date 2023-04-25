
<?php

    require 'Database.php';

    class Add{

        public $db;

        public function __construct(){

           $this->db = new Database();

            
        }

        public function addData(){
            
            echo "<pre>";
            print_r($_FILES['my_image']);
            echo "</pre>";
            
            $movie_title = $_POST['movie_title'];
            //$img_url = $_POST['img_url'];
        
            $genre = $_POST['genre'];
            $movie_sypnosis = $_POST['movie_sypnosis'];
            $movie_trailer = $_POST['movie_trailer'];
            $ticket_price = $_POST['ticket_price'];
            $promo = $_POST['promo'];
            $rel_date = $_POST['release_date'];
            $director = $_POST['director'];
            $tcast = $_POST['top_cast'];

            $img_url = $_FILES['my_image']['name'];
            //$img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];


            if ($error === 0) {
                if ($img_size > 125000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: addmovie.php?error=$em");
                }else {
                    $img_ex = pathinfo($img_url, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    echo ($img_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png"); 
        
                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_url = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_url;
                        move_uploaded_file($tmp_name, $img_upload_path);
        
                        $temp = ($promo / 100) * $ticket_price;
        
                        $total = $ticket_price - $temp;
        
                        // Insert into Database
        
                            //$con = Database::getConnection();
                            $sql = "INSERT INTO `movie_tbl`(`movie_id`,`date_inserted`, `movie_title`, `img_url`, `movie_trailer`, `release_date`, `director`, `top_cast`, `genre`, `movie_sypnosis`, `ticket_price`, `promo`, `total`, `status`) VALUES (null,NOW(),'$movie_title','$new_img_url','$movie_trailer','$rel_date','$director','$tcast','$genre','$movie_sypnosis','$ticket_price','$promo','$total','$status')";
        
                            $result = $this->db->insert($sql);

                                if($result){
                                    header("Location: adminmain.php?msg=succes");
                                }
                                else{
                                    header("Location: addmovie.php?msg=faidled");
                                }

                        
                                
        
                        
                
                        
                    }
                     else{
                            $em = "You can't upload files of this type";
                            header("Location: index.php?alert=$em");
                        }
                    
                }
        
            }
        }


        public function showdata(){
            $sql = "SELECT * FROM movie_tbl";
            $result = $this->db->select($sql);
            return $result;
        }

        // available movies
        public function showdataUserpage(){
            $sql = "SELECT * FROM movie_tbl WHERE status = 1";
            $result = $this->db->select($sql);
            return $result;
        }

        //now showing mvies
        public function nowShowing(){
            $sql = "SELECT * FROM movie_tbl WHERE status = 2";
            $result = $this->db->select($sql);
            return $result;
        }

        //upcoming mvies
        public function upcomingMovies(){
            $sql = "SELECT * FROM movie_tbl WHERE status = 3";
            $result = $this->db->select($sql);
            return $result;
        }



        // public function trashdata(){
        //     $sql = "SELECT * FROM archive_tbl";
        //     $result = $this->db->select($sql);
        //     return $result;
        // }
        

        public function getidurl($movie_id){
            $sql = "SELECT * FROM `movie_tbl` WHERE movie_id = '$movie_id'";
            $result = $this->db->select($sql);
            return $result;
        }

        public function updateData($FILES,$POST,$movie_id){


            $movie_title = $_POST['movie_title'];
            //$img_url = $_POST['img_url'];


            $genre = $_POST['genre'];
            $movie_sypnosis = $_POST['movie_sypnosis'];
            $movie_trailer = $_POST['movie_trailer'];
            $ticket_price = $_POST['ticket_price'];
            $promo = $_POST['promo'];
            $rel_date = $_POST['release_date'];
            $director = $_POST['director'];
            $tcast = $_POST['top_cast'];


            $img_url = $_FILES['my_image']['name'];
            //$img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];


            if ($error === 0) {
                if ($img_size > 125000) {
                    $em = "Sorry, your file is too large.";
                    header("Location: addmovie.php?error=$em");
                }else {
                    $img_ex = pathinfo($img_url, PATHINFO_EXTENSION);
                    $img_ex_lc = strtolower($img_ex);
                    echo ($img_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png"); 
        
                    if (in_array($img_ex_lc, $allowed_exs)) {
                        $new_img_url = uniqid("IMG-", true).'.'.$img_ex_lc;
                        $img_upload_path = 'uploads/'.$new_img_url;
                        move_uploaded_file($tmp_name, $img_upload_path);
        
                        $temp = ($promo / 100) * $ticket_price;
        
                        $total = $ticket_price - $temp;
        
                        // update into Database


                        //image quiery

                        $imgsql = "SELECT * FROM `movie_tbl` WHERE movie_id ='$movie_id'";
                        $imageresult =  $this->db->select($imgsql);

                            if($imageresult){

                                while($row = mysqli_fetch_assoc($imageresult)){
                                    $img = 'uploads/'.$row['img_url'];
                                    unlink($img);
                                    
                                    
                                }
                                echo "image";
                                
                            }
        
                            //$con = Database::getConnection();
                            $sql = "UPDATE `movie_tbl` SET `movie_title`='$movie_title',
                            `img_url`='$new_img_url',`movie_trailer`='$movie_trailer',`release_date`='$rel_date',`director`='$director',`top_cast`='$tcast',`genre`='$genre',`movie_sypnosis`='$movie_sypnosis',
                            `ticket_price`='$ticket_price',`promo`='$promo',`total`='$total' WHERE movie_id='$movie_id'";

                            
        
                            $result = $this->db->update($sql);

                                if($result){
                                    header("Location: adminmain.php?msg=succes");
                                }
                                else{
                                    header("Location: edit.php?msg=faidled");
                                }

                        
                                
        
                        
                
                        
                    }
                     else{
                            $em = "You can't upload files of this type";
                            header("Location: index.php?alert=$em");
                        }
                    
                }
        
            }

        }
        //delete from table but archived

        // public function delete_movie_rec($movie_id){
        //     $sql = "DELETE FROM movie_tbl WHERE movie_id ='$movie_id'";
        //     $result = $this->db->delete($sql);
        //     return $result;
        // }

        // //permanently delete
        // public function permanentDelete($movie_id){
        //     $sql = "DELETE FROM archive_tbl WHERE movie_id ='$movie_id'";
        //     $result = $this->db->delete($sql);
        //     return $result;
        // }

        // //archive data

        public function archivedata($movie_id){

            $sql = "UPDATE movie_tbl SET status = 0 WHERE movie_id = $movie_id;";
            $result = $this->db->update($sql);
            return $result;
        }

        public function unarchivedata($movie_id){
            $sql = "UPDATE movie_tbl SET status = 1 WHERE movie_id = $movie_id;";
            $result = $this->db->update($sql);
            return $result;
        }

        public function placetoNowshowing($movie_id){
            $sql = "UPDATE movie_tbl SET status = 2 WHERE movie_id = $movie_id;";
            $result = $this->db->update($sql);
            return $result;
        }

        public function placetoToupcoming($movie_id){
            $sql = "UPDATE movie_tbl SET status = 3 WHERE movie_id = $movie_id;";
            $result = $this->db->update($sql);
            return $result;
        }

        // public function restoredata($movie_id){
        //     $sql = "INSERT INTO `movie_tbl`(`movie_id`, `movie_title`, `img_url`, `genre`, `movie_sypnosis`, `ticket_price`, `promo`,`total`) 
        //                                     SELECT movie_id, movie_title, img_url, genre, movie_sypnosis, ticket_price, promo,total FROM archive_tbl WHERE movie_id ='$movie_id'";
        //     $result = $this->db->insert($sql);
        //     return $result;
        // }

        // //restore data

        // public function delete_archive_rec($movie_id){
        //     $sql = "DELETE FROM archive_tbl WHERE movie_id ='$movie_id'";
        //     $result = $this->db->delete($sql);
        //     return $result;
        // }



    }






?>