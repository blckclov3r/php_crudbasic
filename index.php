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
                <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
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
                        <tbody id="tbody"></tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- insert modal-->
        <div class="modal fade" id="insertModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Insert</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="insertForm">
                            <div class="form-group">
                                <label for="name">Enter Name:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </div>
                                    <input class="form-control" id="fname" name="fname" type="text" placeholder="Fullname"/>
                                </div>
                            </div>
                            <input type="submit" id="insertBtn" data-dismiss="modal" class="btn btn-success btn-block" value="Insert">
                        </form>
                    </div> <!-- eof modal-body-->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    
                </div> <!-- eof modal-content-->
            </div> <!-- eof modal-->
        </div>


        <div class="modal fade" id="updateModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="name">Enter Name:</label>
                                <div class="input-group" id="update-group">
                                    <!-- ajax + action.php-->
                                </div>
                            </div>
                            <input type="submit" id="updateBtn" data-dismiss="modal" class="btn btn-primary btn-block" value="Update">
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
        <script src="js/main.js"></script>
    </body>
</html>