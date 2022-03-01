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
				<td>NAME</td>
				<td>EDUCATION</td>
				<td>SPECIALIZATION</td>
				<td>SERVICES</td>
				<td>EMAIL</td>
				<td>GENDER</td>
				<td>PHONE NUMBER</td>
				<td>DATE OF BIRTH</td>
				<td>DAY OF A WEAK</td>
				<td>TIME OF A DAY</td>
				<td>DELETE</td>
				<td>UPDATE</td>
			</tr>
			<?php
			include 'conn.php';
			$q="select * from lin";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {
				?>
			<tr>
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['firstname']; ?></td>
				<td><?php echo $res['education']; ?></td>
				<td><?php echo $res['specialization']; ?></td>
				<td><?php echo $res['services']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><?php echo $res['gender']; ?></td>
				<td><?php echo $res['phno']; ?></td>
				<td><?php echo $res['dob']; ?></td>
				<td><?php echo $res['dow']; ?></td>
				<td><?php echo $res['tod']; ?></td>
				<td><button class="btn btn-danger"><a href="delete1.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
				<td><button class="btn btn-primary"><a href="update1.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
			</tr>
			<?php
		}
			?>
		</table>
	</div>
</div>

</body>
</html>