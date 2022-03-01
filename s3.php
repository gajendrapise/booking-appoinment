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
    <div class="col-sm-3">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
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
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-9">
     <div class="container mt-3">
  <h2>Search for doctor</h2>
  <form method="post">
     <div class="mb-3 mt-3">
      <label for="fname">Enter Doctor Name:</label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="fname">
    </div>
     <div class="mb-3 mt-3">
      <label for="lname">Last Name:</label>
      <input type="text" class="form-control" placeholder="Enter Last Name" name="lname">
    </div>   
     <div class="mb-3 mt-3">
      <label for="spec">Specialization:</label>
      <input type="text" class="form-control" placeholder="Enter Specialization" name="spec">
    </div>
      <input type="submit" name="btnSearch">

  </form>
</div>
</div>
</div>
<div class="mt-5 p-4 bg-dark text-white text-center">
  <div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h2>Myclinic</h2>
    </div>
    <div class="col-sm-3">
      <h2>For Patients</h2>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="search.php">Search for Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patient Dashboard</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h2>For Doctors</h2>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="#">Appoinment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Doctor Dashboard</a>
        </li>
      </ul>
    </div>
    <div class="col-sm-3">
      <h2>Contact Us</h2>
    </div>
  </div>
</div>
</div>
</body>
</html>
<?php
include 'conn.php';
if (!empty($_POST['btnSearch'])) {
  $fname=$_POST['fname'];
  $spec=$_POST['spec'];
  $result_set=mysqli_query($con,"SELECT * FROM lin WHERE firstname='$fname' && Specialization='$spec'");
  $row=mysqli_num_rows($result_set);
  if ($row==1) {
    $data=mysqli_fetch_assoc($result_set);
    ?>
  <div class="container mt-3">
  <h2>Responsive Table</h2>
  <div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>Doctor Name</th>
      <th>Education</th>
      <th>Specialization</th>
       <th>Services</th>
       <th>Email</th>
       <th>Gender</th>
      <th>Phone Number</th>
      <th>Date of Birth</th>
      <th>Day of Week</th>
      <th>Time of a Day</th>
      </tr>
    </thead>
    <tbody>
      <tr>
           <td><?php echo $data['firstname']; ?></td>
      <td><?php echo $data['education']; ?></td>
      <td><?php echo $data['specialization']; ?></td>
      <td><?php echo $data['services']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['gender']; ?></td>
      <td><?php echo $data['phno']; ?></td>
      <td><?php echo $data['dob']; ?></td>
      <td><?php echo $data['dow']; ?></td>
      <td><?php echo $data['tod']; ?></td>  
      </tr>
    </tbody>
  </table>
  </div>
</div>
    <?php
  } else {
    echo "No records found";
  }
  
}
?>