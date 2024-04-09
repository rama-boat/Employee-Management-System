<?php
include_once "../settings/connection.php";
include_once "../settings/core.php";

$h1=isLoggedIn();
// Include a connection file

//collection of data
if(isset($_POST["submit"])){
    $clock_in = mysqli_real_escape_string( $con, $_POST["clockIn"]);
    $clock_out = mysqli_real_escape_string( $con, $_POST["clockOut"]);
    $work_date = mysqli_real_escape_string( $con, $_POST["workingDate"]);


    //write a query
    $sql_query = "INSERT INTO attendancerecords (EID,WorkingDate,ClockInTime,ClockOutTime) VALUES ('$h1','$work_date','$clock_in','$clock_out')";
    

        
    // check if query worked
    if ($con->query($sql_query)) {
        echo "Attendance Recorded successfully!";
        header("Location:../view/empAttendance.php");

    } else {
    //echo error 
        echo "Error: " .$con->error;
    }

    //close database connection
    // $con->close();

}elseif(isset($_POST['update'])){
    $clock_out = mysqli_real_escape_string( $con, $_POST["clockOut"]);

     //write a query
     $sql_query = "UPDATE attendancerecords set ClockOutTime='$clock_out' where EID='$h1'";

     // check if query worked
     if ($con->query($sql_query) === true) {
         echo "Attendance Updated successfully!";
         header("Location:../view/empAttendance.php");
 
     } else {
     //echo error 
         echo "Error: " ;
     }
 
     //close database connection
     $con->close();
 

}








?>