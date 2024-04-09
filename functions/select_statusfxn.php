<?php

//include a connection file
include "../settings/connection.php";

//select query and execute
$selection_query = "SELECT Status FROM  statusofleave ";

//execute
$execute = mysqli_query($con, $selection_query);

// Check if query was successful
if ($execute) {
    $status=mysqli_fetch_all($execute, MYSQLI_ASSOC);
} else {
    //echo error 
    echo "Error: " . mysqli_error($con);
}

mysqli_free_result($execute);

// Close the connection
// mysqli_close($con);
?>
