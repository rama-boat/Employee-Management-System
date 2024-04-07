<?php
include_once "../settings/connection.php";
include_once "../settings/core.php";

$h1=isLoggedIn();
// Include a connection file

//collection of data
if(isset($_POST["submit"])){
    $start_date = mysqli_real_escape_string( $con, $_POST["start-date"]);
    $end_date = mysqli_real_escape_string( $con, $_POST["end-date"]);
    $leave_description = mysqli_real_escape_string( $con, $_POST["leave-description"]);


    //write a query
    $sql_query = "INSERT INTO leaverequests (EID,LeaveDescription,StartDate,EndDate) VALUES ('$h1','$leave_description','$start_date','$end_date')";

    // check if query worked
    if ($con->query($sql_query) === true) {
        echo "Leave request submitted successfully!";
        header("Location:../view/empApplyLeave.php");

    } else {
    //echo error 
        echo "Error: " ;
    }

    //close database connection
    $con->close();

}








?>