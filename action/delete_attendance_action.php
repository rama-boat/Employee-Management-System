<?php
// Include a connection file
include "../settings/connection.php";

//check for get url
if (isset($_GET['att'])) {

    //retrieve id
    $record_id = $_GET['att'];
  

    //perform delete query
    $delete_query= "DELETE FROM attendancerecords WHERE RecordID = $record_id";

    //check if executed
    if(mysqli_query($con, $delete_query)) {
        echo " attendance record deleted successfully";
        header("Location:../admin/ManageAttendance.php");
    } else {
        echo "Could not delete attendance".mysqli_error($con);
        
    }

    //Close the connection
    mysqli_close($con);
        
} else {
        header("Location:../admin/ManageAttendance.php");
        exit;
}


?>

















?>