<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body{ width:900px; margin:0 auto}
            table{width:100%; margin:10px auto}
            td,th{  padding:10px 15px; }
           
        </style>
    </head>
    <body>
       <h1>Php Crud Grid</h1>
        <a class="btn btn-success" href="create.php">Create</a>
        <?php   
        include "db.php";
        $sql="SELECT * FROM customer";
        $query=mysqli_query($db_con, $sql);
        
        
        if($db_con){
        ?>
        <table  class="table-bordered table-striped">
            <thead class="text-center">
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone number</th>
                <th>Action</th>
            </thead>
            <tbody>
            <?php
                if($db_con){
                while($row=mysqli_fetch_assoc($query)){ ?>
                <tr>
                    <?php foreach($row as $key=>$value){
                        if($value!=$row['id']){?>
                        <td ><?=$value?></td>
                    <?php } }?>
                    <td>
                        <a  class="btn btn-uptade" href="read.php?id=<?=$row['id']?> ">Read</a>
                        <a  class="btn btn-success" href="uptade.php?id=<?=$row['id']?>">Uptade</a>
                        <a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        
        <?php } }
        else{
            echo "ERROR";
        }
        ?>
        
                
    </body>
</html>