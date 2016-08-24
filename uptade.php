<?php $id=$_GET["id"] ?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <style>
        body{ width:900px; margin:0 auto}
        form{ width:800px; margin:20px auto}
    </style>
    </head>
    <body>
       <h1>Read a Customer</h1>
        
        <form class="form-horizontal" action="updatecustomer.php?id=<?=$id?>" method="post">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-6">
                        <input type="text" id="inputName" class="form-control"  name="user_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email Address</label>
                    <div class="col-sm-6">
                        <input id="inputEmail" type="email" class="form-control"  name="user_email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone" class="col-sm-2 control-label">Mobile Number</label>
                    <div class="col-sm-6">
                        <input id="inputPhone" type="tel" class="form-control"   name="user_number">
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button class="btn btn-success">Uptade</button>
                        <a href="index.php" class="btn btn-default">Back</a>
                    </div>
                </div>
            </form>
      
       

                
    </body>
</html>