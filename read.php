<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{ width:900px; margin:0 auto}
            td{ padding:15px}
            a{margin:50px;}
        </style>
    </head>
    <body>
       <h1>Read a Customer</h1>
        
        <?php   
        include "db.php";
        $id=$_GET['id'];
        $sql="SELECT * FROM customer where id=$id";
        $query=mysqli_query($db_con, $sql); 

        
        $row=mysqli_fetch_assoc($query);
        ?>
        
        <table>
            <tr>
                <td class="text-right">Name</td>
                <td><?=$row['name']?></td>
            </tr>
            <tr>
                <td class="text-right">Email Address</td>
                <td><?=$row['email']?></td>
            </tr>
            <tr>
                <td class="text-right">Mobile Number</td>
                <td><?=$row['phone']?></td>
            </tr>
        </table>
      
        <a href="index.php" class="btn btn-default">Back</a>
                
    </body>
</html>