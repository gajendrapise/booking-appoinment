<?php
session_start();
if (!isset($_SESSION['email'])){
header("location:doctor.php");
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
        <a class="nav-link" href="appoinment.php">Make Appoinment</a>
      </li>
      <?php if (!isset($_SESSION['email'])){ ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Registration/Login</a>

      </li>
      <?php 
} else { 
      ?>
       <li class="nav-item">
        <a class="nav-link active" href="dlogin.php">Logout</a>
      </li>
  <?php } ?>
    </ul>
  </div>
</nav>
<h2>Welcome <?php echo $_SESSION['email']; ?></h2>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-4">   
      <img src="css/doctor-02.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Ankur Mehata</h2>
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
        <a class="nav-link" href="appoinment.php">Make Appoinment</a>
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
