<?php
include_once"../settings/core.php";
isLoggedIn();
$user_role= getUserRoleId();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .list-group-item {
            padding: 20px;
            background-color: #072732;
            border-color: #1a2e35;
            margin-top: 10px;
            border-radius: 20px;
        }

        body {
            background-color: #1cbbb4;
        }

        .list-group-item a {
            color: white;
            font-family: monospace;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <?php if ($user_role == "2"){
            echo '<h1>Welcome to the Employee Dashboard</h1>
            <ul class="list-group mt-3">
                <li class="list-group-item"><a href="../view/empApplyLeave.php">Leave Requests</a></li>
                <li class="list-group-item"><a href="../view/empAttendance.php">Attendance</a></li>
                <li class="list-group-item"><a href="../login/login.php">Logout</a></li>
            </ul>';
        } elseif($user_role == "1"){
            echo ' <h1>Welcome to the Admin Dashboard</h1>
            <ul class="list-group mt-3">
                <li class="list-group-item"><a href="../admin/ManageEmployees.php">Manage Employees</a></li>
                <li class="list-group-item"><a href="../admin/ManageLeave.php">Leave Requests</a></li>
                <li class="list-group-item"><a href="../admin/ManageAttendance.php">Track Attendance</a></li>
                <li class="list-group-item"><a href="../login/login.php">Logout</a></li>
            </ul>';
        }?>
        <!-- <h1>Welcome to the Employee Dashboard</h1>
        <ul class="list-group mt-3">
            <li class="list-group-item"><a href="../view/EmpDetails.php">Employee Details</a></li>
            <li class="list-group-item"><a href="../view/empApplyLeave.php">Leave Requests</a></li>
            <li class="list-group-item"><a href="../view/empAttendance.php">Attendance</a></li>
            <li class="list-group-item"><a href="../login/login.php">Logout</a></li>
        </ul> -->
    </div>
</body>

</html>