<?php
session_start();
header("location:patientp.php");
include 'conn.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$q="SELECT * FROM linp WHERE email='$email' && password='$pass'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	$_SESSION['email']=$email;
	header("location:home2.php");
} else {
	header("location:patient.php");
}
?>