<?php
include 'conn.php';
$id=$_GET['id'];
$q="delete from lin where id='".$id."'";
mysqli_query($con,$q);
header("location:display1.php");
?>