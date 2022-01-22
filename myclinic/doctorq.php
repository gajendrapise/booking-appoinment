<?php
include 'conn.php';
if (isset($_POST["done"])) {
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $education=$_POST["edu"];
    $spec=$_POST["spec"];
    $services=$_POST["services"];   
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $phone=$_POST["phno"];
    $dateofbirth=$_POST["dob"];
    $cname=$_POST["cname"];
    $cadd=$_POST["cadd"];
    $q="INSERT INTO tab(`id`, `firstname`, `lastname`, `education`, `specialization`, `services`, `email`, `gender`, `phoneno`, `dateofbirth`, `cname`, `cadd`) VALUES('$fname','$lname','$education','$spec','$services','$email','$gender','$phone','$dateofbirth','$cname','$cadd')";
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

<div class="p-5 bg-primary text-white text-center">
   <h1>Welcome To Myclinic</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
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
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
        <a class="nav-link active" href="index.php">Home</a>
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
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-4">
     <div class="container mt-3">
  <h2>Basic Information</h2>
  <form method="post">
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
      <label for="lname">Specialization:</label>
      <input type="text" class="form-control" placeholder="Enter Specialization" name="spec">
    </div>
     <div class="mb-3 mt-3">
      <label for="services">Services:</label>
      <input type="text" class="form-control" placeholder="Enter Services" name="services">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
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
    <button type="submit" class="btn btn-primary" name="done">Submit</button>
  </form>
</div>
<div class="container mt-3">
  <h2>Login Form</h2>
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Log In</button>
  </form>
</div>
</body>
</html>