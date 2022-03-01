<?php
include 'conn.php';
$id=$_GET['id'];
$q="delete from linn where id='".$id."'";
mysqli_query($con,$q);
header("location:display2.php");
?>