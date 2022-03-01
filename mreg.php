<?php
session_start();
header("location:model.php");
include 'conn.php';
$email=$_POST['email'];
$password=$_POST['password'];
$q="SELECT * FROM ptab WHERE email='$email' && password='$password'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO ptab(email, password) VALUES('$email', '$password')";
	mysqli_query($con,$qy);
}
 ?>