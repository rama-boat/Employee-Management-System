<?php
include_once "../settings/core.php";

isLoggedIn();
$h1 = isLoggedIn();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee Attendance</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/attendance.css">
    <link rel="stylesheet" href="../css/dashboard.css">
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
            <!-- <div class="container1"> -->
            <div class="container">
                <h2>Track Attendance</h2>
                <form action="../action/attendance_action.php" id=attend method="post">
                    <label for="clockIn">Clock In:</label>
                    <input type="time" id="clockIn" name="clockIn" required>

                    <label for="clockOut">Clock Out:</label>
                    <input type="time" id="clockOut" name="clockOut" required readonly>

                    <label for="workingDate">Working Date:</label>
                    <input type="date" id="workingDate" name="workingDate" required>

                    <div class="subBtn">
                        <input type="submit" name="submit" value="Submit">
                        <a href="../view/updateview.php?empID=<?php echo $h1 ?>">
                        <input type="button" name="update" value="Update"></a>
                    </div>
            </div>
            </form>


            <!-- </div> -->


        </main>
    </section>
</body>

</html>