<?php
session_start();
header("location:app1.php");
include 'conn.php';
$doctor=$_POST['doctor'];
$adt=$_POST['adt'];
$bdt=$_POST['bdt'];
$amount=$_POST['amount'];
$fup=$_POST['fup'];
$status=$_POST['status'];

$q="SELECT * FROM lins WHERE doctor='$doctor' && adt='$adt' && bdt='$bdt' && amount='$amount' && followup='$fup' && status='$status'";
$query=mysqli_query($con,$q);
$num=mysqli_num_rows($query);
if ($num==1) {
	echo "duplicate data";
} else {
	$qy="INSERT INTO lins(doctor,adt,bdt,amount,followup,status) VALUES('$doctor','$adt','$bdt','$amount','$fup','$status')";
	mysqli_query($con,$qy);
}
?>