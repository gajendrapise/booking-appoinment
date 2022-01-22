<?php
session_start();
if (!isset($_SESSION['email'])) {
	header("location:model1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Welcome <?php echo $_SESSION['email']; ?></h2>
<a href="model1.php">mlogout.php</a>
</body>
</html>