<html>
<body>
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
    <div class="mb-3 mt-3">
      <label for="pwd">Gender:</label>
      <input type="radio" name="gender" value="Male">Male<br>
      <input type="radio" name="gender" value="Female">Female
    </div>
         <div class="mb-3 mt-3">
       <label for="cname">Day of a weak:</label>
      <input type="text" class="form-control" placeholder="Enter day of a weak" name="dow">
    </div>
     <div class="mb-3 mt-3">
      <label for="cadd">Time of a day:</label>
      <input type="text" class="form-control" placeholder="Enter time of a day" name="tod">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input type="submit" name="btnSearch">
  </form>
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
  <table>
    <thead>
      <th>firstname</th>
      <th>password</th>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $data['firstname'] ;?></td>
      <td><?php echo $data['password'] ;?></td>
    </tr>
    </tbody>
  </table>
    <?php
  } else {
    echo "No records found";
  }
  
}
?>