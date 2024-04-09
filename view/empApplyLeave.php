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
    <title>Leave Request</title>
    <!-- Using boxicon (for external icons) -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/applyLeave.css">




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
                    <i class='bx bx-calendar-check'></i>
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
            <h3>Request Leave Form </h3>

            <div class="container">
                <form action="../action/leave_action.php" method="Post">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" name="start-date" required>
                    <br>

                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date" required>
                    <br>

                    <label for="leave-description">Leave Description:</label>
                    <textarea id="leave-description" name="leave-description" placeholder="Enter your leave description here..." style="height:200px" required></textarea>

                    <br>
                    <input type="submit" value="Submit" id="submit" name="submit" class="btn btn-primary">
                </form>
            </div>

        </main>
    </section>
</body>

</html>