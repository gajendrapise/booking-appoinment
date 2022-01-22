<?php
include 'conn.php';
if (isset($_POST["done"])) {
	$id=$_GET['id'];
	$appoinment=$_POST["appoinment"];
	$dow=$_POST["dow"];
	$tod=$_POST['tod'];
	$doctor=$_POST["doctor"];
	$spec=$_POST['spec'];
	$q="update linn set id='".$id."',appoinment='".$appoinment."',dow='".$dow."',tod='".$tod."',doctor='".$doctor."', specialization='".$spec."' where id='".$id."'";
	$query=mysqli_query($con,$q);
	header("location:display2.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<div class="card">
			<div class="card-header bg-dark">
				<h1>update operation</h1>
			</div>
			<?php
			include 'conn.php';
			$id=$_GET['id'];
			$q="select * from linn where id='".$id."'";
			$query=mysqli_query($con,$q);
			$data=mysqli_fetch_array($query);
			?><br><br>
			<label>Appoinment:</label>
			<input type="text" name="appoinment" value="<?php echo $data['appoinment']?>">
			<label>Day of a weak:</label>
			<input type="text" name="dow" value="<?php echo $data['dow']?>">
			<label>Time of a day:</label>
			<input type="text" name="tod" value="<?php echo $data['tod']?>">
			<label>Doctor:</label>
			<input type="text" name="doctor" value="<?php echo $data['doctor'] ?>">
			<label>Specialization:</label>
			<input type="text" name="spec" value="<?php echo $data['specialization'] ?>">
					<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>
	</form>
</div>
</body>
</html>