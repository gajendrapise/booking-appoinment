<?php
session_start();
header("location:login.php");
include 'conn.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$q="SELECT * FROM lin3 WHERE email='$email' && password='$pass'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	$_SESSION['email']=$email;
	header("location:home3.php");
} else {
	header("location:login.php");
}
?>