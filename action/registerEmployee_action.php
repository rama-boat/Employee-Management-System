<?php
//include a connection file
include_once "../settings/connection.php";


//collection of form data
if (isset($_POST["submit"])) {
    $first_name = mysqli_real_escape_string($con, $_POST["firstName"]);
    $last_name = mysqli_real_escape_string($con, $_POST["lastName"]);
    $Address = mysqli_real_escape_string($con, $_POST["address"]);
    $Department = mysqli_real_escape_string($con, $_POST["department"]);
    $Age = mysqli_real_escape_string($con, $_POST["age"]);
    $phoneNumber = mysqli_real_escape_string($con, $_POST["phone"]);
    $dob = mysqli_real_escape_string($con, $_POST["dob"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $first_pass = mysqli_real_escape_string($con, $_POST["password"]);
    $second_pass = mysqli_real_escape_string($con, $_POST["confirmPassword"]);


    //check if the two passwords are the same or not
    if ($first_pass != $second_pass) {
        header("Location:../login/register.php");
        exit();
    }

    //encrypt our password
    $encrypted_pass = password_hash($first_pass, PASSWORD_DEFAULT);

    //using a default number of 2 for rid(standard user)
    $rid = 2;

    $create_query = "INSERT INTO employee (RoleID,FirstName,LastName,Age,Address,DateOfBirth,Phone,Email,Password,Department) VALUE ('$rid','$first_name','$last_name','$Age','$Address','$dob','$phoneNumber','$email','$encrypted_pass','$Department')";

    // check if query worked
    if ($con->query($create_query) === true) {
        //redirect to login page for user to now log in
        header("Location:../login/login.php");
    } else {
        //echo error 
        header("Location:../login/register.php");
        echo "Error: ";
    }

    //close database connection
    $con->close();
}
