<?php

require('DatabaseConnection.php');
require('my_js.php');
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select username from login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
if (!isset($login_session)) {
    header('Location: index.php'); // Redirecting To Home Page
    mysqli_close($connection); // Closing Connection
}
?>