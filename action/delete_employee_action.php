<?php
// Include a connection file
include "../settings/connection.php";

//check for get url
if (isset($_GET['cl'])) {

    //retrieve id
    $employee_id = $_GET['cl'];
  

    //perform delete query
    $delete_query= "DELETE FROM employee WHERE EmpID = $employee_id";

    //check if executed
    if(mysqli_query($con, $delete_query)) {
        echo " employee record deleted successfully";
        header("Location:../admin/ManageEmployees.php");
    } else {
        echo "Could not delete employee".mysqli_error($con);
        
    }

    //Close the connection
    mysqli_close($con);
        
} else {
        header("Location:../admin/ManageEmployee.php");
        exit;
}


?>

















?>