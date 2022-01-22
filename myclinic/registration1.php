<?php
session_start();
header("location:appoinment.php");
include 'conn.php';
$spec=$_POST['spec'];
$doctor=$_POST['doctor'];
$q="SELECT * FROM ein WHERE specialization='$spec' && doctor='$doctor'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO ein(specialization,doctor) VALUES('$spec','$doctor')";
	mysqli_query($con,$qy);
}
?>