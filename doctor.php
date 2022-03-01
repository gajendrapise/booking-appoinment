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
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li>
        <img src="css/logo1.png" alt="logo1" class="d-block" width="25%">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="doctor.php">Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="patient.php">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search For Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="appointment.php">Make Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-4">   
      <img src="css/doctor-02.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Ritic Mehata</h2>
            <p>MBBS, MD - General Medicine<br> DNB - Cardiology</p>	
		  <ul class="nav nav-pills flex-column">
        <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="doctor.php">Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="patient.php">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search For Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="appointment.php">Make Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
      </ul>
  </div>
	<div class="col-lg-8">
		<h2>Patient Appoinment</h2>
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<td>Patient Id</td>
				<td>Patient Name</td>
				<td>Appt Date</td>
				<td>Type</td>
				<td>Paid</td>
				<td>Purpose</td>
				</tr>
			<?php
			include 'conn.php';
			$q="select * from linn";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {
				?>
			<tr>
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['appoinment']; ?></td>
				<td><?php echo $res['dow']; ?></td>
				<td><?php echo $res['tod']; ?></td>
				<td><?php echo $res['amount']; ?></td>
				<td><?php echo $res['purpose']; ?></td>
				<td><button class="btn btn-danger  text-white">Cancel</button></td>
				<td><button class="btn btn-primary  text-white">view</button></td>
				<td><button class="btn btn-success text-white">Accept</button></td>
			</tr>
			<?php
		}
			?>
		</table>
	</div>
	</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>