<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>IMAGE</td>
		</tr>
<?php
include 'conn.php';
if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$files=$_FILE['file'];
	print_r($username);
	echo "<br>";
	print_r($files);
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	$fileextstored=array('png','jpg','jpeg');
	if (in_array($filecheck, $fileextstored)) {
		$destinationfile='upload/'.$filename;
		move_uploaded_file($filetmp, $destinationfile);
		$q="INSERT INTO imageupload('username','image') VALUES('$username','$destinationfile')";
		$query=mysqli_query($con,$q);
		$displayquery="select * from imageupload";
		$querydisplay=mysqli_query($con,$displayquery);
		while ($result=mysqli_fetch_array($querydisplay)) {
			?>
			<tr>
				<td><?php echo $result['id']; ?></td>
				<td><?php echo $result['username']; ?></td>
				<td><img src="<?php echo $result['image']; ?>"></td>
			</tr>
		<?php
	echo "Image is not exits";
}
}
}
?>
</table>
</body>
</html>