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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
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
<?php
include 'conn.php';
if (!empty($_POST['btnSearch'])) {
  $gender=$_POST['gender'];
  $spec=$_POST['spec'];
  $dow=$_POST['dow'];
  
  $result_set=mysqli_query($con,"SELECT * FROM lin WHERE gender='$gender' && dow='".$dow."'");
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
  <div class="container mt-5 bg-lightgray">
  <div class="row">
<div class="col-sm-3">
    <h2>Search Filter</h2>
  <form method="post">
    <input type="date" name="dow" value="">
    <div class="mb-3 mt-3">
      <label for="pwd">Gender:</label><br>
      <input type="radio" name="gender" value="Male">Male<br>
      <input type="radio" name="gender" value="Female">Female
    </div>
        <div class="mb-3 mt-3">
      <label for="pwd">Specialization:</label><br>
      <input type="radio" name="spec" value="Urology">Urology<br>
            <input type="radio" name="spec" value="Neurology">Neurology<br>
      <input type="radio" name="spec" value="Dentist">Dentist<br>
      <input type="radio" name="spec" value="Orthopedic">Orthopedic<br>
      <input type="radio" name="spec" value="Cardiologist">Cardiologist
    </div>
<input type="submit" name="btnSearch" class="btn btn-success form-control" value="Search">
  </form>
 </div> 
 <div class="col-sm-3">    
      <img src="css/doctor-01.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h3>Sonal Saha</h3>
            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
            <button class="btn btn-success"><a href="profile.php" class="text-white" style="text-decoration: none;">View profile</a></button>

 </div> 
 <div class="col-sm-3">    
      <img src="css/doctor-02.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Ritic Mehata</h2>
            <p>MBBS, MD - General Medicine, DNB - Cardiology</p>
            <button class="btn btn-success"><a href="profile.php" class="text-white" style="text-decoration: none;">View profile</a></button>

  </div>
  <div class="col-sm-3">    
      <img src="css/doctor-03.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h2>Sana Mehata</h2>
            <p>MBBS, MD - General Medicine, DNB - Neurology</p>
                        <button class="btn btn-success"><a href="profile.php" class="text-white" style="text-decoration: none;">View profile</a></button>

  </div>    
    </div>
  </div>
<?php
include 'footer.php';
?>
</body>
</html>