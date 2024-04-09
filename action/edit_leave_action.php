<?php
// Include a connection file
include_once "../settings/connection.php";

//collection of data
if(isset($_POST['submit'])){
    $status_of_leave = mysqli_real_escape_string($con, $_POST["stats"]);
    $reqID = mysqli_real_escape_string($con, $_POST["reqid"]);
    $id = mysqli_real_escape_string($con, $_POST["eid"]);
    

     //write a query
    $edit_query = "UPDATE leaverequests SET StatusOfLeave='$status_of_leave' WHERE EID='$id' and RequestID = '$reqID'";
   

    // check if query worked
     if(mysqli_query($con, $edit_query)) {
        // header should be before any output
        header("Location:../admin/ManageLeave.php");
     } else {
        echo "Could not edit record".mysqli_error($con);
        
    }

    //close database connection
    $con->close();

}

?>
