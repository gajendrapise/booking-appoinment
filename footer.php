<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appointment Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .fa {
    background: none !important;
}
  </style>
</head>
<body>
<div class="mt-5 p-4 bg-dark text-white text-center">
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h1>DocSlot</h1>
      <p>Lorem ipsum dolor sit amet.</p> 
      <?php
      include 'sm.php';
      ?>

    </div>
    <div class="col-sm-3">
      <h3>For Patients</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="app.php">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search for Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plogin.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pregistration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="patient.php">Patient Dashboard</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h3>For Doctors</h3>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="appointment.php">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dlogin.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dregistration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctor.php">Doctor Dashboard</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h3>Contact Us</h3>
      <p>3556 Beech Street, San Francisco,
California, CA 94108</p>
    </div>
  </div>
</div>
</div>
</body>
</html>