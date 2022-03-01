<?php
include 'conn.php';
if (isset($_POST["done"])) {
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $message=$_POST["message"];
  $q="INSERT INTO contactus (`firstname`, `lastname`, `email`, `message`) VALUES('".$fname."','".$lname."','".$email."','".$message."')";
  $query=mysqli_query($con,$q);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
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
        <a class="nav-link" href="doctor.php">Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="patient.php">Patient</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="search.php">Search For Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="appoinment.php">Make Appoinment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-5">
   <div class="col-sm-4">    
      <img src="css/doctor-01.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h3>Sonal Saha</h3>
            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
                        <button class="btn btn-success"><a href="proceed.php" class="text-white" style="text-decoration: none;">Proceed to Pay</a></button>

 </div> 
</div>
<?php
include 'booking.php';
?>
<?php
include 'footer.php';
?>
</body>
</html>
