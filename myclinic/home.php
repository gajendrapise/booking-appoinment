<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:contact1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Welcome <?php echo $_SESSION['email']; ?></h2>
<a href="contact1.php">logout</a>
</body>
