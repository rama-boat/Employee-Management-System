<?php
 include_once "../settings/connection.php";

function retrieve_details($id){
   global $con;
    
    // Select query
    $selection_query = "SELECT * FROM leaverequests WHERE EID = '$id'";
    
    // Execute query
    $result = mysqli_query($con, $selection_query);
    
    // Check if query was successful
    if($result){
        // Fetch data as an associative array
        $data = mysqli_fetch_assoc($result);
        
        // Free result set
        mysqli_free_result($result);
        
        
        
        // Return data
        return $data;
    } else {
        // Handle query error
        return "Error: " . mysqli_error($con);
    }
}

?>
