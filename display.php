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
<div class="container">
	<div class="col-lg-12">
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<td>ID</td>
				<td>FIRSTNAME</td>
				<td>LASTNAME</td>
				<td>EMAIL</td>
				<td>DELETE</td>
				<td>UPDATE</td>
				<td>SUCCESS</td>
			</tr>
			<?php
			include 'conn.php';
			$q="select * from win";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {
				?>
			<tr>
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['firstname']; ?></td>
				<td><?php echo $res['lastname']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
				<td><button class="btn btn-primary"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
				<td><button onclick="myFunction()" class="btn btn-success text-white">Success</button></td>

<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>



			</tr>
			<?php
		}
			?>
		</table>
	</div>
</div>

</body>
</html>