<?php
session_start();
header("location:patientp.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$ebg=$_POST['ebg'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$dob=$_POST['dob'];
$cname=$_POST['cname'];
$cadd=$_POST['cadd'];
$q="SELECT * FROM linp WHERE firstname='$uname' && lastname='$lname' && bloodgroup='$ebg' && email='$email' && password='$pass' && gender='$gender' && phno='$phno' && dob='$dob' && cname='&cname' && cadd='&cadd'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO linp(firstname,lastname,bloodgroup,email,password,gender,phno,dob,cname,cadd) VALUES('$fname','$lname','$ebg','$email','$pass','$gender','$phno','$dob','$cname','$cadd')";
	mysqli_query($con,$qy);
}
?>