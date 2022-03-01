<?php
session_start();
header("location:p.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$edu=$_POST['edu'];
$spec=$_POST['spec'];
$services=$_POST['services'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$dob=$_POST['dob'];
$cname=$_POST['cname'];
$cadd=$_POST['cadd'];
$q="SELECT * FROM lin WHERE firstname='$uname' && lastname='$lname' && education='$edu' && specialization='$spec' && services='$services' && email='$email' && gender='$gender' && phno='$phno' && dob='$dob' && cname='&cname' && cadd='&cadd'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO lin(firstname,lastname,education,specialization,services,email,gender,phno,dob,cname,cadd) VALUES('$fname','$lname','$edu','$spec','$services','$email','$gender','$phno','$dob','$cname','$cadd')";
	mysqli_query($con,$qy);
}
?>