<!DOCTYPE html>
<?php $id=$_GET["id"]  ?>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{ width:900px; margin:0 auto}
            p{ padding:10px;
                color:#D9534F;
                border-radius:3px;
            }
            a{margin:5px;}
        </style>
    </head>
    <body>
        <h1>Delete a Customer</h1>
        <p class="bg-danger">Are you sure to delete?</p>
        <div class="text-center">
            <a href="deletecustomer.php?id=<?=$id?>" class="btn btn-danger">Yes</button>
            <a href="index.php" class="btn btn-default">No</a>
        </div>
    </body>
</html>







