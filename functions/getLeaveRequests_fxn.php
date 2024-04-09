<?php
//include a connection file
include "../settings/connection.php";


//function to return result of SELECT query
function getLeaveRequests()
{
    global $con;

    // SELECT query
     
     $sql= "SELECT l.*, CONCAT(e.FirstName, ' ', e.LastName) AS EmployeeName FROM leaverequests l INNER JOIN employee e ON l.EID = e.EmpID";


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
