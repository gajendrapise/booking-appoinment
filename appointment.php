<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment Management System</title>
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
        <a class="nav-link active" href="appointment.php">Make Appointment</a>
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
  <h2>Appointment form</h2>
  <form method='post' action="pq.php">
    <div class="mb-3 mt-3">
      <label for="Appoinment">Appointment for:</label>
      <input type="text" class="form-control" placeholder="Enter appoinment" name="app">
    </div>
     <div class="mb-3">
      <label for="dow">Appt date:</label>
      <input type="date" class="form-control"  name="dow">
    </div>
    <div class="mb-3">
      <label for="tod">Type:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter type" name="tod">
    </div>
      <div class="mb-3">
      <label for="doctor">Paid amount:</label>
      <input type="text" class="form-control" placeholder="Enter paid amount" name="amount">
    </div>
     <div class="mb-3 mt-3">
      <label for="Specialization">Purpose:</label>
      <input type="text" class="form-control" placeholder="Enter purpose" name="spec">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control">Make Appointment</button>
  </form>
</div>
    </div>
    <div class="col-sm-6">
          <img src="css/banner.png" alt="banner" width="100%">
    </div>
  </div>
</div>
<p>imagiobox</p>
<?php
include 'footer.php';
?>

</body>
</html>
