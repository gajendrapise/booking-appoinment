<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<label>Enter Doctor Name:</label>
	<input type="text" name="fname">
	<label>Specialization</label>
	<input type="text" name="spec">
	<input type="submit" name="btnSearch">
</form>
</body>
</html>
<?php
include 'conn.php';
if (!empty($_POST['btnSearch'])) {
	$fname=$_POST['fname'];
	$spec=$_POST['spec'];
	$result_set=mysqli_query($con,"SELECT * FROM lin WHERE firstname='$fname' && Specialization='$spec'");
	$row=mysqli_num_rows($result_set);
	if ($row==1) {
		$data=mysqli_fetch_assoc($result_set);
		?>
	<table>
		<thead>
			<th>firstname</th>
			<th>password</th>
		</thead>
		<tbody>
			<tr>
			<td><?php echo $data['firstname'] ;?></td>
			<td><?php echo $data['password'] ;?></td>
		</tr>
		</tbody>
	</table>
		<?php
	} else {
		echo "No records found";
	}
	
}
?>