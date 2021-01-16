<?php
    class DbModel{
        public function connect(){
            $con = mysqli_connect('localhost:8080', 'root', '12345', 'login_mvc');
            if(mysqli_connect_errno()){
                echo "ket noi that bai";
            }
            return $con;
        }
    }
?>