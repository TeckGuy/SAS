<?php

require('DatabaseConnection.php');
require('my_js.php');
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect("localhost", "TechGuy", "jobvinny");
// Selecting Database
//$db = mysqli_select_db($connection,"kisii_county");
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_Supervisor'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select username from superlogin where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$assignstudent = str_replace(' ', '', $login_session);
if (!isset($login_session)) {
    header('Location: index.php'); // Redirecting To Home Page
    mysql_close($connection); // Closing Connection
}
?>