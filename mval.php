<?php
session_start();
header("location:model1.php");
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT * FROM ptab WHERE email='$email' && password='$password'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	$_SESSION['email']=$email;
	header("location:mhome.php");
} else {
	header("location:model1.php");
	}
 ?>