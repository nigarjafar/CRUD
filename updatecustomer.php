 <?php
        
        include "db.php";
        
        $username=$_POST["user_name"];
        $email=$_POST["user_email"];
        $number=$_POST["user_number"];
        
        $id=$_GET['id'];
        $sql="UPDATE customer SET name='$username',email='$email',phone='$number' WHERE id=$id";
        $query= mysqli_query($db_con, $sql);
        header("Location:index.php");
        
?>