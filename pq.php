<?php
session_start();
header("location:appointment.php");
include 'conn.php';
$app=$_POST['app'];
$dow=$_POST['dow'];
$tod=$_POST['tod'];
$amount=$_POST['amount'];
$spec=$_POST['spec'];
$q="SELECT * FROM linn WHERE appoinment='$app' && dow='$dow' && tod='$tod' && amount='$amount' && purpose='&spec'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO linn(appoinment,dow,tod,amount,purpose) VALUES('$app','$dow','$tod','$amount','$spec')";
	mysqli_query($con,$qy);
}
?>