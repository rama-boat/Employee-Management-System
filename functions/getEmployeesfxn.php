<?php
//include a connection file
include "../settings/connection.php";


//function to return result of SELECT query
function getEmployees()
{
    global $con;

    // SELECT query
    //  $sql = "SELECT * FROM employee";
     $sql = "SELECT e.*, r.Rname 
        FROM employee e 
        INNER JOIN role r ON e.RoleID = r.RoleID";
        
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
