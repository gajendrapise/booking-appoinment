<?php
session_start();
header("location:appoinment.php");
include 'conn.php';
$app=$_POST['app'];
$dow=$_POST['dow'];
$tod=$_POST['tod'];
$q="SELECT * FROM ein2 WHERE appoinment='$app' && dow='$dow' && tod='$tod'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO ein2(appoinment,dow,tod) VALUES('$app','$dow','$tod')";
	mysqli_query($con,$qy);
}
?>