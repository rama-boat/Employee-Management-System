<?php
include_once "../settings/core.php";
include_once "../functions/approveLeave.php";
include_once "../functions/select_statusfxn.php";
// include_once "../functions/displayLeave.php";



if (isset($_GET['clue'])) {

    //retrieve id from get url
    $get_id = $_GET['clue'];

    //call function created in get_a_chore_action
    $details = retrieve_details($get_id);
} else {
    header("Location:../admin/updateLeave_view.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Leave Request</title>
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
                <a href="../admin/ManageEmployees.php">
                    <i class='bx bx-user'></i>
                    <span class="text">Manage Employees</span>
                </a>
            </li>
            <li>
                <a href="../admin/ManageLeave.php">
                    <i class='bx bx-calendar-check'></i>
                    <span class="text">Manage Leave Requests</span>
                </a>
            </li>
            <li>
                <a href="../admin/ManageAttendance.php">
                    <i class='bx bx-time'></i>
                    <span class="text">Manage Attendance</span>
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
            <h3>Review Leave Form </h3>

            <div class="container">
                <form action="../action/edit_leave_action.php" method="Post">
                    <input type="hidden" value="<?php echo $details['RequestID']; ?>" name="reqid">
                    <input type="hidden" value="<?php echo $details['EID']; ?>" name="eid">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" value="<?php echo $details['StartDate']; ?>" name="start-date" readonly>
                    <br>

                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date" value="<?php echo $details['EndDate']; ?>" readonly>
                    <br>
                    <label for="status">Status of Leave</label>
                    <?php
                    if (!empty($status)) {
                        echo '<select id="stats" name="stats" required>';
                        echo '<option value="Pending">Pending</option>';
                        foreach ($status as $stats) {
                            echo '<option value="' . $stats['Status'] . '">' . $stats['Status'] . '</option>';
                        }
                        echo '</select>';
                    } else {
                        echo 'Data not available.';
                    }
                    ?>
                    <label for="leave-description">Leave Description:</label>
                    <textarea id="leave-description" name="leave-description" style="height:200px" readonly><?php echo $details["LeaveDescription"]; ?></textarea>

                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>

        </main>
    </section>
</body>

</html>