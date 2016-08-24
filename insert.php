<?php 
include "db.php";

$username=$_POST["user_name"];
$email=$_POST["user_email"];
$number=$_POST["user_number"];

$sql="INSERT INTO customer (name,email,phone) VALUES ('$username','$email','$number')";
$query=mysqli_query($db_con, $sql);

if($query){
    header("Location:index.php");
}
else{
    echo "Error";
}
    

?>