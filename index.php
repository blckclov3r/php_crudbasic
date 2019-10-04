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

           <center><h2>OOP CRUD</h2> <h4><span>
           <i>PHP, Bootstrap, MySQL, JQuery, Ajax</i></h4></span></center>
           <br/>

           <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" align="right">
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#insertModal">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>
                </div>
                <div class="col-md-2"></div>
           </div>

            <div class="row" style="margin-top: 8px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div id="notification">
                        <!-- main.js callback -->
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
         
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <table class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>List</th>
                                <th>Function</th>
                            </tr>
                        </thead>
                        <!-- main.js tbody -->
                        <tbody id="tbody"></tbody>
                    </table>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>


        <!-- insert modal-->
        <div class="modal fade" id="insertModal" role="dialog">
            <div class="modal-dialog modal-md">
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
                                    <input class="form-control" id="fname" name="fname" type="text" autofocus placeholder="Fullname"/>
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
            <div class="modal-dialog modal-md">
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