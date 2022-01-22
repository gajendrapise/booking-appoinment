<?php
session_start();
header("location:doctor.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$edu=$_POST['edu'];
$spec=$_POST['spec'];
$services=$_POST['services'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$dob=$_POST['dob'];
$dow=$_POST['dow'];
$tod=$_POST['tod'];
$q="SELECT * FROM lin WHERE firstname='$uname' && lastname='$lname' && education='$edu' && specialization='$spec' && services='$services' && email='$email' && password='$pass' && gender='$gender' && phno='$phno' && dob='$dob' && dow='&dow' && tod='&tod'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO lin(firstname,lastname,education,specialization,services,email,password,gender,phno,dob,dow,tod) VALUES('$fname','$lname','$edu','$spec','$services','$email','$pass','$gender','$phno','$dob','$dow','$tod')";
	mysqli_query($con,$qy);
}
?>