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
    <div class="col-sm-4">
    <h2>Contact Us</h2>
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
      <label for="lname">Specialization:</label>
      <input type="text" class="form-control" placeholder="Enter Specialization" name="spec">
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
      <input type="text" class="form-control" placeholder="Enter Password" name="pass">
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
    <button type="submit" class="btn btn-primary">Signup</button>
  </form>
      <h2>Login</h2>
     <form method="post" action="validation1.php">
     <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="text" class="form-control" placeholder="Enter Email" name="email">
    </div>
     <div class="mb-3 mt-3">
      <label for="Password">Password:</label>
      <input type="text" class="form-control" placeholder="Enter Password" name="pass">
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
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
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>