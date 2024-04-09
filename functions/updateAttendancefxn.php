<?php

function retrieve_dets($id){
    include_once "../settings/connection.php";
    
    // Select query
    $selection_query = "SELECT * FROM attendancerecords WHERE EID = '$id'";
    
    // Execute query
    $result = mysqli_query($con, $selection_query);
    
    // Check if query was successful
    if($result){
        // Fetch data as an associative array
        $data = mysqli_fetch_assoc($result);
        
        // Free result set
        mysqli_free_result($result);
        
        // Close connection
        mysqli_close($con);
        
        // Return data
        return $data;
    } else {
        // Handle query error
        return "Error: " . mysqli_error($con);
    }
}

?>
