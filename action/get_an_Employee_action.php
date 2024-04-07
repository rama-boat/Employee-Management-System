<?php
//include the connection file
include("../settings/connection.php");

//function to return a leave based on id
function getAnEmployee($id){
    global $con;

    // SELECT query
    $sql= "SELECT * FROM employee WHERE EmpID = $id"; 
    
     // execute the query using global connection
     $result=mysqli_query($con,$sql);

    //Check if query was successful
    if ($result) {
        $edit=mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $edit;

        
        
    } else {
        //echo error 
        echo "Error: " . mysqli_error($con);

    }
}

?>