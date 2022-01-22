<!DOCTYPE html>
<html lang="en">
<head>
  <title>Appoinment Management System</title>
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
        <a class="nav-link" href="appointment.php">Make Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>
      </li>
    </ul>
  </div>
</nav>

      <div class="fakeimg"><img src="css/search-bg.png" alt="bg"></div>
    
<div class="p-5 text-center">
  <h1>Clinic and Specialities</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
<div class="container mt-5">
  <div class="row">
<div class="col-sm-3">
      <img src="css/specialities-01.png" alt="urology" class="d-block" width="50%"><br>
            <p>Urology</p>
 </div> 
 <div class="col-sm-3">    
      <img src="css/specialities-02.png" alt="neurology" class="d-block" width="50%"><br>
            <p>Neurology</p>
 </div> 
 <div class="col-sm-3">    
      <img src="css/specialities-03.png" alt="orthopedic" class="d-block" width="50%"><br>
            <p>Orthopedic</p>

  </div>
  <div class="col-sm-3">    
      <img src="css/specialities-04.png" alt="cardiologist" class="d-block" width="50%"><br>
            <p>Cardiologist</p>
  </div>    
    </div>
  </div>
  <div class="container mt-5 bg-lightgray">
  <div class="row">
<div class="col-sm-3">
<h2>Book Our Doctor</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
 </div> 
 <div class="col-sm-3">    
      <img src="css/doctor-01.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h3>Sonal Saha</h3>
            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
 </div> 
 <div class="col-sm-3">    
      <img src="css/doctor-02.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Ritic Mehata</h2>
            <p>MBBS, MD - General Medicine, DNB - Cardiology</p>

  </div>
  <div class="col-sm-3">    
      <img src="css/doctor-03.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Sana Mehata</h2>
            <p>MBBS, MD - General Medicine, DNB - Neurology</p>
  </div>    
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>
</body>
</html>
