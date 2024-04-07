<?php
// Start the session
session_start();

// Include a connection file
include_once "../settings/connection.php";

// Collection of form data
if (isset($_POST["submit"])) {
    // Storing
    $e_mail = mysqli_real_escape_string($con, $_POST["email"]);
    $e_pass = mysqli_real_escape_string($con, $_POST["password"]);

    // Query to select a record
    $sql = "SELECT EmpID,RoleID,Password FROM employee WHERE Email ='$e_mail'";


    // Execute SQL
    $execute = mysqli_query($con, $sql);

    // Check if rows were returned
    if (mysqli_num_rows($execute) > 0) {
        // Fetch the record
        $row = mysqli_fetch_assoc($execute);

        // Verify password user provided against database record
        if (password_verify($e_pass, $row["Password"])) {

            // Create a session for user id and role id
            // $_SESSION['user_id'] = $row['Pid'];
            $_SESSION['rid'] = $row['RoleID'];
            $_SESSION['employee_id'] = $row['EmpID'];

            // Redirect 
            header("Location:../view/dashboard.php");
            exit();
        } else {
            
            echo "Incorrect username or password";
        }
    } else {
        
        echo "Incorrect username or password";
    }
} else {
    
    header("location:../login/login.php");
}
?>
