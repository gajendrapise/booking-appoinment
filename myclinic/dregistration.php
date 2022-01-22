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
    <h2>Doctor Register</h2>
     <form method="post" action="reg1.php">
     <div class="mb-3 mt-3">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
    </div>
     <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
    </div>
        <div class="mb-3 mt-3">
      <label for="edu">Education:</label>
      <input type="text" class="form-control" placeholder="Enter Education" name="edu">
    </div>
        <div class="mb-3 mt-3">
      <label for="pwd">Specialization:</label>
      <input type="radio" name="spec" value="Urology">Urology<br>
            <input type="radio" name="spec" value="Neurology">Neurology<br>
      <input type="radio" name="spec" value="Dentist">Dentist<br>
      <input type="radio" name="spec" value="Orthopedic">Orthopedic<br>
      <input type="radio" name="spec" value="Cardiologist">Cardiologist
    </div>
     <div class="mb-3 mt-3">
      <label for="services">Services:</label>
      <input type="text" class="form-control" placeholder="Enter Services" name="services">
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
      <label for="pwd">Gender:</label>
      <input type="radio" name="gender" value="Male">Male<br>
      <input type="radio" name="gender" value="Female">Female
    </div>
        <div class="mb-3 mt-3">
       <label for="phno">Phone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Phone Number" name="phno">
    </div>
     <div class="mb-3 mt-3">
      <label for="dob">Date of Birth:</label>
      <input type="date" class="form-control" placeholder="Enter Date of Birth" name="dob">
    </div>
         <div class="mb-3 mt-3">
       <label for="dow">Day of Weak:</label>
      <input type="date" class="form-control" placeholder="Enter Day of Weak" name="dow">
    </div>
     <div class="mb-3 mt-3">
      <label for="tod">Time of a Day:</label>
      <input type="text" class="form-control" placeholder="Enter Time of a Day" name="tod">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control">Signup</button>
  </form>
    </div>
    <div class="col-sm-8">
      <img src="css/banner.png" alt="banner" width="50%">
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>