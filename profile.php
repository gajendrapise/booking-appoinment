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
   <div class="col-sm-3">    
      <img src="css/doctor-01.jpg" alt="neurology" class="d-block" width="50%"><br>
      <h3>Sonal Saha</h3>
            <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
            <button class="btn btn-primary"><a href="book.php" class="text-white" style="text-decoration: none;">Book Appoinmenment</a></button>

 </div> 
</div>
<div class="container mt-5">
     <div class="col-sm-6">
     <h6>About Me</h6>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <h6>Education</h6> 
     <h6>American Dental Medical University</h6>
     <p>BDS<br>1998 - 2003</p>
     <h6>American Dental Medical University</h6>
     <p>MDS<br>2003 - 2005</p>
     <h6>Work & Experience</h6>
     <h6>Glowing Smiles Family Dental Clinic</h6>
     <p>2010 - Present (5 years)</p>
     <h6>Comfort Care Dental Clinic</h6>
     <p>2007 - 2010 (3 years)</p>
     <h6>Dream Smile Dental Practice</h6>
     <p>2005 - 2007 (2 years)</p>
     <h6>Awards</h6>
     <p>July 2019</p>
     <h6>Humanitarian Award</h6>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
     <p>March 2011</p>
     <h6>Certificate for International Volunteer Service</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          <p>May 2008</p>
     <h6>The Dental Professional of The Year Award</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
          <h6>Services</h6>
          <p>Tooth cleaning<br>Root Canal Therapy</p>
          <h6>Specialization</h6>
          <p>Children Care<br>Dental Care</p>
     </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
