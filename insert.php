<?php
    include 'db.php';

    if(isset($_POST['insertBtn'])){
         $fname = $_POST['fname'];
         if(empty($fname)){
            header("location: index.php?error");
            return;
         }
         $sql = "INSERT INTO users(fullname) VALUES('$fname')";
         $query = mysqli_query($db->getConn(),$sql);
         if($query){
             header("location: index.php?success");
         }else{
             header("location: index.php?error");
         }
         $db->getClose();
    }else{
        header("location: index.php?error");
    }
   
   
?>