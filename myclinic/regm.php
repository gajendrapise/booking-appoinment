<?php
session_start();
header("location:login1.php");
include 'conn.php';
$dni=$_POST['dni'];
$fname=$_POST['fname'];
$pass=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$q="SELECT * FROM tab1 WHERE dni='$dni' && firstname='$uname' && lastname='$pass' && email='$email' && password='$password' && cpassword='$cpassword'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO tab1(dni,firstname,lastname,email,password,cpassword) VALUES('$dni',$fname','$pass','$email','$password','$cpassword')";
	mysqli_query($con,$qy);
}
?>