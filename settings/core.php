<?php

//start the session
session_start();

//function to check if the user is logged in

// function isLoggedIn()
// {
//     //we will check if the user id session exists
//     if (isset($_SESSION['user_id'])) {
//         return true;
//     } else {
//         //redirect to login
//         header("Location:../login/login.php");
//         die();
//     }
// }

function isLoggedIn()
{
    //we will check if the user id session exists
    if (isset($_SESSION['employee_id'])) {
        return $_SESSION['employee_id'];
    } else {
        //redirect to login
        return false;
}
}


//a function to check for users' role id session created at login
function getUserRoleId()
{
    //checks if user role id session exists
    if (isset($_SESSION['rid'])) {
        $roleId = $_SESSION['rid'];
        return $roleId;
    } else {
        return false;
    }
}
