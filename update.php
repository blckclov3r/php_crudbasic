<?php
    include 'db.php';
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $sql = "UPDATE users SET fullname = '$fname' WHERE id = '$id'";
    $query = mysqli_query($db->getConn(),$sql);
    if($query){
        header("location: index.php?updated");
    }else{
        echo "error";
    }
    $db->getClose();
?>