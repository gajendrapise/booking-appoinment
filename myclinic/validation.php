<?php
session_start();
header("location:contact1.php");
include 'conn.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$q="SELECT * FROM win WHERE email='$email' && password='$pass'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	$_SESSION['email']=$email;
	header("location:home.php");
} else {
	header("location:contact1.php");
}
?>