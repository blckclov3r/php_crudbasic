<?php
    include 'db.php';

    class DatabaseOperation extends Database{  }

    $db = new DatabaseOperation();
 
    if(isset($_POST['insert'])){
        $fname = $_POST['fname'];
        $sql = "INSERT INTO users(fullname) VALUES('$fname')";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            echo "Successfully Inserted";
        }
    }

    if(isset($_POST['userList'])){
        $sql = "SELECT * FROM users";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            while($row = mysqli_fetch_array($query)){
                if($row > 0){
                   echo "
                    <tr>
                         <td>".$row['id']."</td>
                         <td>".$row['fullname']."</td>
                         <td>
                            <a href='#' class='btn btn-primary' type='button'><span class='glyphicon glyphicon-pencil'></span></a>
                            <a href='' id='deleteBtn' userid='".$row['id']."' class='btn btn-warning'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                   ";
                }
             }
        }
    }

    if(isset($_POST['deleteBtn'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $query= mysqli_query($db->getConn(),$sql);
        if($query){
            echo "successfully deleted";
        }
    }
?>