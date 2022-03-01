<?php
session_start();
header("location:contact1.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$q="SELECT * FROM win WHERE firstname='$fname' && lastname='$lname' && email='$email' && password='$pass'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO win(firstname,lastname,email,password) VALUES('$fname','$lname','$email','$pass')";
	mysqli_query($con,$qy);
}
?>