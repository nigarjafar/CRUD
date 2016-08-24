<?php
include "db.php";
$id=$_GET['id'];
$sql="DELETE FROM customer where id=$id";
$query=mysqli_query($db_con, $sql);

header("Location:index.php")
?>