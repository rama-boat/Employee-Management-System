<?php
// Include a connection file
include_once "../settings/connection.php";

//collection of data
if(isset($_POST['editDetails'])){
    $first_name = mysqli_real_escape_string($con, $_POST["firstName"]);
    $last_name = mysqli_real_escape_string($con, $_POST["lastName"]);
    $Address = mysqli_real_escape_string($con, $_POST["address"]);
    $Department = mysqli_real_escape_string($con, $_POST["department"]);
    $Age = mysqli_real_escape_string($con, $_POST["age"]);
    $phoneNumber = mysqli_real_escape_string($con, $_POST["phone"]);
    $dob = mysqli_real_escape_string($con, $_POST["dob"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);   
    $id = mysqli_real_escape_string($con, $_POST["id"]);   

     //write a query
    $edit_query = "UPDATE employee SET FirstName='$first_name', LastName='$last_name', Address='$Address', 
    Department='$Department', Age='$Age', Phone='$phoneNumber', DateOfBirth='$dob', Email='$email' WHERE EmpID='$id'";
   

    // check if query worked
     if(mysqli_query($con, $edit_query)) {
        // header should be before any output
        header("Location:../admin/ManageEmployees.php");
        // echo " Employee Details updated successfully";
     } else {
        echo "Could not edit record".mysqli_error($con);
        
    }

    //close database connection
    $con->close();

}

?>
