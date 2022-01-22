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
  <div class="row">
    <div class="col-sm-4">
    <h2>Personal Information</h2>
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
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <lable for="pwd">Password:</label><br>
        <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>
  </form>
    </div>
    <div class="col-sm-4">
          <h2>Payment Method</h2>
     <form method="post">
           <div class="mb-3 mt-3">
      <input type="radio" name="ccard"> <b>Credit card</b><br>
    </div>
     <div class="mb-3 mt-3">
      <label for="fname">Name of the card:</label>
      <input type="text" class="form-control" placeholder="Enter name of the card" name="fname">
    </div>
     <div class="mb-3 mt-3">
      <label for="lname">Card Number:</label>
      <input type="text" class="form-control" placeholder="Enter card number" name="lname">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Expiry Month:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter expiry month" name="emonth">
    </div>
    <div class="mb-3">
      <lable for="pwd">Expiry Year:</label><br>
        <input type="text" class="form-control" placeholder="Enter expiry year" name="eyear">
    </div>
        <div class="mb-3">
      <lable for="pwd">CVV:</label><br>
        <input type="text" class="form-control" placeholder="Enter CVV" name="cvv">
    </div>
               <div class="mb-3 mt-3">
      <input type="radio" name="ccard"> <b>Paypal</b><br>
    </div>
        <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember">  I have read and accept Terms & Conditions
      </label>
    </div>
                <button class="btn btn-success"><a href="#" class="text-white" style="text-decoration: none;">confirm and pay</a></button>

  </form>    
</div>
    <div class="col-sm-4">
      <h2>Booking Summary</h2>
            <img src="css/doctor-01.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h3>Sonal Saha</h3>
            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
    <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Consulting Fee</th>
            <th>Booking Fee</th>
            <th>Video Call</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>16 Nov 2019</td>
            <td>10:00 AM</td>
            <td>$100</td>
            <td>$10</td>
            <td>$50</td>
            <td>$160</td>
          </tr>
        </tbody>
      </table>
</div>
    
  </div>
</div>

<?php
include 'footer.php';
?>
</body>
</html>
