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

<div class="p-5 bg-primary text-white text-center">
   <h1>Welcome To Myclinic</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <ul class="navbar-nav">
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
        <a class="nav-link" href="appoinment.php">Make Appoinment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
    <h2>Patient Register</h2>
     <form method="post" action="regp.php">
     <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
    </div>
     <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
    </div>
        <div class="mb-3 mt-3">
      <label for="ebg">Blood group:</label>
      <input type="text" class="form-control" placeholder="Enter Blood Group" name="ebg">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="Password">Password:</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="pass">
    </div>
    <div class="mb-3 mt-3">
      <label for="gender">Gender:</label>
      <input type="radio" name="gender" value="Male">Male<br>
      <input type="radio" name="gender" value="Female">Female
    </div>
        <div class="mb-3 mt-3">
       <label for="phno">Phone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Phone Number" name="phno">
    </div>
     <div class="mb-3 mt-3">
      <label for="dob">Date of Birth:</label>
      <input type="text" class="form-control" placeholder="Enter Date of Birth" name="dob">
    </div>
    <h2>Clinic Info</h2>
         <div class="mb-3 mt-3">
       <label for="cname">Clinic Name:</label>
      <input type="text" class="form-control" placeholder="Enter Clinic Name" name="cname">
    </div>
     <div class="mb-3 mt-3">
      <label for="cadd">Clinic Address:</label>
      <input type="text" class="form-control" placeholder="Enter Clinic Address" name="cadd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control">Signup</button>
  </form>
    </div>
    <div class="col-sm-8 mt-5">
    <img src="css/banner.png" alt="banner" width="100%">
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>