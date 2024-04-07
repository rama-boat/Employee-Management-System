<?php
// Include a connection file
include "../settings/connection.php";

//check for get url
if (isset($_GET['clue'])) {

    //retrieve id
    $leave_id = $_GET['clue'];
  

    //perform delete query
    $delete_query= "DELETE FROM leaverequests WHERE RequestID = $leave_id";

    //check if executed
    if(mysqli_query($con, $delete_query)) {
        echo " Leave deleted successfully";
        header("Location:../admin/ManageLeave.php");
    } else {
        echo "Could not delete leave".mysqli_error($con);
        
    }

    //Close the connection
    mysqli_close($con);
        
} else {
        header("Location:../admin/ManageLeave.php");
        exit;
}


?>

















?>