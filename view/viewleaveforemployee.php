<?php
include_once "../settings/core.php";
isLoggedIn();
$h1 = isLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Status</title>
    <!-- Using boxicon (for external icons) -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/applyLeave.css">

    <style>
        h1 {
            font-size: 40px;
            font-family: monospace;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <section id="Sidebar">
        <a href="#" class="collection">
            <i class='bx bx-user'></i>
            <span class="text">StaffSync</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="../view/dashboard.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../view/empApplyLeave.php">
                    <i class='bx bx-calendar'></i>
                    <span class="text">Leave Requests</span>
                </a>
            </li>
            <li>
                <a href="../view/viewleaveforemployee.php">
                    <i class='bx bx-calendar'></i>
                    <span class="text">View Leave Status</span>
                </a>
            </li>
            <li>
                <a href="../view/empAttendance.php">
                    <i class='bx bx-time'></i>
                    <span class="text">Attendance</span>
                </a>
            </li>
            <li>
                <a href="../login/login.php">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>

    <!-- Main content -->
    <section id="content">

        <!-- Main -->
        <main>
            <h1>View Leave Status</h1>
            <?php
            include_once "../functions/displayLeaveEmp.php";
            ?>


        </main>
    </section>
</body>

</html>