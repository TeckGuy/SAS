<?php

require('DatabaseConnection.php');
	require('my_js.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
$errorstud = ''; // Variable To Store Error Message
$errorsuper = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {

    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "TechGuy", "jobvinny");
// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        $password = md5($password); //hash password before fetching it
// Selecting Database
        //$db = mysqli_select_db($connection, "kisii_county");
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select id,username,password from login where password='$password' AND username='$username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: AdminSection.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
} else if (isset($_POST['studentlogin'])) {
    if (empty($_POST['reg_no']) || empty($_POST['passstudent'])) {

    } else {
// Define $username and $password
        $reg_no = $_POST['reg_no'];
        $passstudent = $_POST['passstudent'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "TechGuy", "jobvinny");
// To protect MySQL injection for Security purpose
        $reg_no = stripslashes($reg_no);
        $passstudent = stripslashes($passstudent);
        $reg_no = mysqli_real_escape_string($connection, $reg_no);
        $passstudent = mysqli_real_escape_string($connection, $passstudent);
        $passstudent = md5($passstudent); //hash password before fetching it
// Selecting Database
        // $db = mysqli_select_db($connection, "kisii_county");
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select ID,Registration_Number,password from registration where password='$passstudent' AND Registration_Number='$reg_no'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_student'] = $reg_no; // Initializing Session
            header("location: StudentSection.php"); // Redirecting To Other Page
        } else {
            $errorstud = "Username or Password is invalid";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
} else if (isset($_POST['superlogin'])) {
    if (empty($_POST['superusername']) || empty($_POST['passwordsuper'])) {

    } else {
// Define $username and $password
        $superusername = $_POST['superusername'];
        $passwordsuper = $_POST['passwordsuper'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // $connection = mysql_connect("localhost", "TechGuy", "jobvinny");
// To protect MySQL injection for Security purpose
        $superusername = stripslashes($superusername);
        $passwordsuper = stripslashes($passwordsuper);
        $superusername = mysqli_real_escape_string($connection, $superusername);
        $passwordsuper = mysqli_real_escape_string($connection, $passwordsuper);
        $passwordsuper = md5($passwordsuper); //hash password before fetching it
// Selecting Database
        //$db = mysqli_select_db("kisii_county", $connection);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query($connection, "select id,username,password from superlogin where password='$passwordsuper' AND username='$superusername'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_Supervisor'] = $superusername; // Initializing Session
            header("location: SupervisorSection.php"); // Redirecting To Other Page
        } else {
            $errorsuper = "Username or Password is invalid";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}
?>