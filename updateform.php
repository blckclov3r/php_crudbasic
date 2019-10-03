<?php
    include 'db.php';
    
    $fname = "";

    

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $query = mysqli_query($db->getConn(),$sql);
        if($query){
            $row = mysqli_fetch_array($query);
            if($row > 0){
               $fname = $row['fullname'];
            }
        }
    }

?>

<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
          <h1>Object Oriented PHP Bootstrap and MySQL CRUD application</h1>
          
          <div class="row">
             <div class="col-md-2"></div>
             <div class="col-md-8">
                <form action="update.php" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <label>Name</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                               <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" placeholder="Name"/>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" value="Update">
                </form>
             </div>
             <div class="col-md-2"></div>
          </div>

        </div>
        <script src="js/jquery-3.4.1.min.js" ></script>
        <script src="js/bootstrap.js" ></script>
    </body>
</html>