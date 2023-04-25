<?php
    class Database{ 


        static function getConnection(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "movie";


            $con = new mysqli($servername,$username,$password,$database);
            
            if($con->connect_error){
                die("Coonnect failed".$con->connect_error);
            }
            else{

                return $con;
            }
          }

          //insert

          public function insert($sql){
            $con = Database::getConnection();
            $result = mysqli_query($con,$sql);
            
            if($result){
                return $result;
            }
            else{
                return false;
            }
          }

          //select

          public function select($sql){
            $con = Database::getConnection();
            $result = mysqli_query($con,$sql);
            
            if(mysqli_num_rows($result) > 0){
                return $result;
            }
            else{
                return false;
            }
          }
            


          //update

          public function update($sql){
            $con = Database::getConnection();
            $result = mysqli_query($con,$sql);
            
            if($result){
                return $result;
            }
            else{
                return false;
            }
          }

          //delete

          public function delete($sql){
            $con = Database::getConnection();
            $result = mysqli_query($con,$sql);
            
            if($result){
                return $result;
            }
            else{
                return false;
            }
          }

    }
        

?>