<?php
session_start();
header("location:login.php");
include 'conn.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];
$services=$_POST['services'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phno=$_POST['phno'];
$dob=$_POST['dob'];
$cname=$_POST['cname'];
$cadd=$_POST['cadd'];
$q="SELECT * FROM lin3 WHERE firstname='$uname' && lastname='$lname' && password='$pass' && repeatpassword='$rpass' && services='$services' && email='$email' && gender='$gender' && phno='$phno' && dob='$dob' && cname='&cname' && cadd='&cadd'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO lin3(firstname,lastname,password,repeatpassword,services,email,gender,phno,dob,cname,cadd) VALUES('$fname','$lname','$pass','$rpass','$services','$email','$gender','$phno','$dob','$cname','$cadd')";
	mysqli_query($con,$qy);
}
?>