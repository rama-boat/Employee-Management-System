<?php
include_once("../settings/core.php");
include_once("../functions/editEmployees.php");
// include_once("../action/get_an_Employee_action.php");
//check for GET url

if (isset($_GET['keys'])) {

  //retrieve id from get url
  $get_id = $_GET['keys'];
  
  $details = retrieve_deets($get_id);
} else {
  header("Location:../admin/editEmployee_view.php");
  exit;
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Employee Details</title>
  <!-- <link rel="stylesheet" type="text/css" href="../css/edit_employee_view.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/register.css">
  <style>

  </style>

</head>

<body>


  <h1>Edit Employee Details</h1>
  <div class="container">
    <div class="row">
      <div class="col-50">

        <form action="../action/edit_employee_action.php" method="post">
          <label for="first-name"><i class="fa fa-user"></i> First Name</label>
          <input type="text" id="first-name" name="firstName" value="<?php echo $details['FirstName']; ?>">
          <label for="last-name"><i class="fa fa-user"></i> Last Name</label>
          <input type="text" id="last-name" name="lastName" value="<?php echo $details['LastName']; ?>">
          <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="address" name="address" value="<?php echo $details['Address']; ?>">
          <label for="department"><i class="fa fa-briefcase"></i> Department</label>
          <input type="text" id="department" name="department" value="<?php echo $details['Department']; ?>">
          <input type="hidden" name="id" value="<?php echo $details['EmpID']; ?>">

          <label for="age"><i class="fa fa-calendar"></i> Age</label>
          <input type="number" id="age" name="age" value="<?php echo $details['Age']; ?>">
          <label for="phone"><i class="fa fa-phone"></i> Phone</label>
          <input type="tel" id="phone" name="phone" value="<?php echo $details['Phone']; ?>">
          <label for="date-of-birth"><i class="fa fa-calendar"></i> Date of Birth</label>
          <input type="date" id="date-of-birth" name="dob" value="<?php echo $details['DateOfBirth']; ?>">
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="email" id="email" name="email" value="<?php echo $details['Email']; ?>">
          <input type="submit" name="editDetails" id="subBtn" class="btn">

        </form>
      </div>
      <!-- Submit input -->
    </div>
</body>

</html>