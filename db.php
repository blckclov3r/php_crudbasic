<?php

    class Database{
        private $conn;
        public function __construct(){
            if($this->conn == null){
                $this->conn = mysqli_connect('localhost','root','','mydb');
            }
            // if(!$this->conn){
            //     die("Connection error ");
            // }else{
            //     echo "connected";
            // }
        }

        public function getConn(){
            return $this->conn;
        }

        public function getClose(){
            return $this->conn->close();
        }
    }

    $db = new Database();
?>