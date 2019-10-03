<?php
    include 'db.php';
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
                <div class="col-md-12" align="right">
                <button  class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
                     <span class="glyphicon glyphicon-plus"></span>
                </button>
                </div>
           </div>

            <br/>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>List</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php 
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
                                                 <a href='updateform.php?id=".$row['id']."'  class='btn btn-primary' type='button'><span class='glyphicon glyphicon-pencil'></span></a>
                                                 <a href='delete.php?id=".$row['id']."' class='btn btn-warning' type='button'><span class='glyphicon glyphicon-trash'></span></a>
                                             </td>
                                         </tr>
                                        ";
                                     }
                                  }
                              }
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- insert modal-->
        <div class="modal fade" id="insertModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="insert.php">
                            <div class="form-group">
                                <label for="name">Enter Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <input type="text" class="form-control" id="fname" name="fname" type="text" required/>
                                </div>
                            </div>
                            <input type="submit" name="insertBtn" class="btn btn-success btn-block" value="Submit">
                        </form>
                    </div> <!-- eof modal-body-->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                </div> <!-- eof modal-content-->
            </div> <!-- eof modal-->
        </div>
        
        <script src="js/jquery-3.4.1.min.js" ></script>
        <script src="js/bootstrap.js" ></script>
    </body>
</html>