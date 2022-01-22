<?php
session_start();
header("location:appoinment.php");
include 'conn.php';
$dow=$_POST['dow'];
$tod=$_POST['tod'];
$patient=$_POST['patient'];
$email=$_POST['email'];
$q="SELECT * FROM ein1 WHERE dow='$dow' && tod='$tod' && patient='$patient' && email='$email'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO ein1(dow,tod,patient,email) VALUES('$dow','$tod','$patient','$email')";
	mysqli_query($con,$qy);
}
?>