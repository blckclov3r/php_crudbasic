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
        }else{
            echo "Error code -1";
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
                            <a href='#' class='btn btn-warning' type='button'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                   ";
                }
             }
        }
    }
?>