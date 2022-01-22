<?php
session_start();
header("location:contact1.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];
$q="SELECT * FROM contactus WHERE firstname='$fname' && lastname='$lname' && email='$email' && message='$message'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO contactus(firstname,lastname,email,message) VALUES('$fname','$lname','$email','$message')";
	mysqli_query($con,$qy);
}
?>