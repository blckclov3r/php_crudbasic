<?php
    include 'db.php';

    class DatabaseOperation extends Database{  }

    $db = new DatabaseOperation();
 
    if(isset($_POST['insert'])){
        $fname = $_POST['fname'];
        $sql = "INSERT INTO users(fullname) VALUES('$fname')";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            echo "
                <div class='alert alert-success' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' arial-label='Close'>&times;</a>
                    <b>Successfully Inserted</b>
                </div>            
            ";
        }
        $db->getClose();
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
                            <a href='#' id='selectUpdateBtn' userid='".$row['id']."' fname='".$row['fullname']."' data-toggle='modal' data-target='#updateModal' class='btn btn-primary' type='button'><span class='glyphicon glyphicon-pencil'></span></a>
                            <a href='#' id='deleteBtn' userid='".$row['id']."'  class='btn btn-warning'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                   ";
                }
             }
        }
        $db->getClose();
    }

    if(isset($_POST['deleteBtn'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM users WHERE id='$id'";
        $query= mysqli_query($db->getConn(),$sql);
        if($query){
            echo "
                  <div class='alert alert-warning' role='alert'>
                        <a href='#' class='close' data-dismiss='alert' arial-label='Close'>&times;</a>
                        <b>Successfully Deleted</b>
                  </div>
            ";
        }
        $db->getClose();
    }

    if(isset($_POST['selectUpdateBtn'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];

        echo "
            <div class='input-group-addon'>
                <span class='glyphicon glyphicon-user'></span>
            </div>
            <input type='hidden' id='id' value='$id' /> 
            <input class='form-control' id='name'  value='$fname' type='text' />
        ";
        $db->getClose();
    }

    if(isset($_POST['updateBtn'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $sql = "UPDATE users SET fullname='$fname' WHERE id = '$id' ";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            echo "
                <div class='alert alert-info' role='alert'>
                    <a href='#' class='close' data-dismiss='alert' arial-label='Close'>&times;</a>
                    <b>Successfully Updated</b>
                </div>
            ";
        }
        $db->getClose();
    }
    
?>