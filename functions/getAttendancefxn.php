<?php
//include a connection file
include "../settings/connection.php";


//function to return result of SELECT query
function getAttendance()
{
    global $con;

    // SELECT query
    // $sql = "SELECT * FROM attendancerecords";
    $sql= "SELECT a.*, CONCAT(e.FirstName, ' ', e.LastName) AS EmployeeName FROM attendancerecords a INNER JOIN employee e ON a.EID = e.EmpID";



    // execute the query using global connection
    $result = mysqli_query($con, $sql);


    //Check if query was successful
    if ($result) {
        $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $records;
    } else {
        //echo error 
        echo "Error: " . mysqli_error($con);
    }
}
