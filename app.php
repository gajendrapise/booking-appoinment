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
        <a class="nav-link" href="search.php">Search For Doctor</a>
      </li>
       <li class="nav-item">
        <a class="nav-link active" href="appoinment.php">Make Appoinment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
<div class="container mt-3">
  <h2>Appoinment form</h2>
     <form method="post" action="mn.php">
     <div class="mb-3 mt-3">
      <label for="fname">Doctor Name:</label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="doctor">
    </div>
     <div class="mb-3 mt-3">
      <label for="lname">Appt Date  :</label>
      <input type="date" class="form-control" name="adt">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Booking Date :</label>
      <input type="date" class="form-control" name="bdt">
    </div>
    <div class="mb-3 mt-3">
      <label for="amount">Amount  :</label>
      <input type="text" class="form-control" placeholder="Enter amount" name="amount">
    </div>
        <div class="mb-3 mt-3">
      <label for="fup">Follow Up  :</label>
      <input type="date" class="form-control" name="fup">
    </div> 
       <div class="mb-3 mt-3">
      <label for="email">Status:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="status">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control">Signup</button>
  </form>
        <h2>Login</h2>
     <form method="post" action="validation.php">
     <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" placeholder="Enter Email" name="email">
    </div>
     <div class="mb-3 mt-3">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="pass">
    </div>
        <button type="submit" class="btn btn-success form-control" >Login</button>
      </form>
</div>
    </div>
    <div class="col-sm-6">
          <img src="css/banner.png" alt="banner" width="100%">
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>
