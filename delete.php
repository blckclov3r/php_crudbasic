<?php
    include 'db.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = $id";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            header("location: index.php?success");
        }else{
            header("location: index.php?error");
        }
        $db->getClose();
    }

?>