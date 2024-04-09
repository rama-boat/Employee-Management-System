<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
    a {
        text-decoration: none;
    }

    .styled-table {
        width: 90%;
        border-collapse: collapse;
        border-spacing: 0;
        margin: auto;
        margin-top: 20px;
        color: #1a2e35;
        font-weight: bold;
    }

    .styled-table thead th {
        padding: 10px;
        background-color: #1a2e35;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: white;
    }

    .styled-table tbody td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    /* .styled-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    } */

    /* .styled-table tbody tr:hover {
        background-color: #f1f1f1;
    } */

    .styled-table tbody td:last-child {
        text-align: center;
    }

    a {
        text-decoration: none;
    }
</style>

<body>

    <?php
    // include function
    include("../functions/getLeaveRequests_fxn.php");
    // include_once("../functions/core.php");



    //call the function created
    $records = getLeaveRequests();
   




    //Display table and row elements
    echo '<table class="styled-table">';
    echo '<thead><tr><th>Employee Name</th><th>Leave Description</th><th>Start Date</th><th>End Date</th><th>Status of Leave</th></tr></thead>';
    echo '<tbody>';

    foreach ($records as $record) {
        echo '<tr>';
        echo '<td>' . $record['EmployeeName'] . '</td>';
        echo '<td>' . $record['LeaveDescription'] . '</td>';
        echo '<td>' . $record['StartDate'] . '</td>';
        echo '<td>' . $record['EndDate'] . '</td>';
        echo '<td>' . $record['StatusOfLeave'] . '</td>';
        // echo '<td>';
        // echo '<a href="../action/delete_leave_action.php?clue=' . $record['RequestID'] . '"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="20"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg> </a>';
        // echo '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    ?>


</body>

</html>