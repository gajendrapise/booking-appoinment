<?php
include 'conn.php';
if (isset($_POST["done"])) {
	$id=$_GET['id'];
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST['email'];
	$password=$_POST["password"];
	$q="update win set id='".$id."',firstname='".$firstname."',lastname='".$lastname."',email='".$email."',password='".$password."' where id='".$id."'";
	$query=mysqli_query($con,$q);
	header("location:display.php");
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
			$q="select * from win where id='".$id."'";
			$query=mysqli_query($con,$q);
			$data=mysqli_fetch_array($query);
			?><br><br>
			<label>firstname:</label>
			<input type="text" name="firstname" value="<?php echo $data['firstname']?>">
			<label>lastname:</label>
			<input type="text" name="lastname" value="<?php echo $data['lastname']?>">
			<label>email:</label>
			<input type="text" name="email" value="<?php echo $data['email']?>">
			<label>password:</label>
			<input type="text" name="password" value="<?php echo $data['password'] ?>">
					<button class="btn btn-success" type="submit" name="done">Submit</button>
		</div>
	</form>
</div>
</body>
</html>