<?php

require('DatabaseConnection.php');
require('my_js.php');
$error = ''; // Variable To Store Error Message
$error3 = ''; // Variable To Store Error Message
if (isset($_POST['adminreset'])) {
    $id_no = $_POST['id_no'];
    $SID = $_POST['SID'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $id_no = stripslashes($id_no);
    $SID = stripslashes($SID);
    $pass1 = stripslashes($pass1);
    $pass2 = stripslashes($pass2);
    $id_no = mysqli_real_escape_string($connection, $_POST['id_no']);
    $SID = mysqli_real_escape_string($connection, $_POST['SID']);
    $pass1 = mysqli_real_escape_string($connection, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($connection, $_POST['pass2']);

    if ($pass1 != $pass2) {
        $error = "Password Don't Match";
	    echo '<script type="text/javascript">';
	    echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
	    echo '}, 100);</script>';
    } else {
        $query = mysqli_query($connection, "select * from login where National_ID='$id_no' AND SID='$SID'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $pass1 = md5($pass1); //hash password before storing it. 
            $query1 = mysqli_query($connection, "update login set password='$pass1' where National_ID='$id_no'");
            mysqli_query($db, $query1);
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong National_ID or SID','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
} else if (isset($_POST['studentreset'])) {
    $id_no = $_POST['id_no'];
    $reg_no = $_POST['reg_no'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $id_no = stripslashes($id_no);
    $reg_no = stripslashes($reg_no);
    $pass1 = stripslashes($pass1);
    $pass2 = stripslashes($pass2);
    $id_no = mysqli_real_escape_string($connection, $_POST['id_no']);
    $reg_no = mysqli_real_escape_string($connection, $_POST['reg_no']);
    $pass1 = mysqli_real_escape_string($connection, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($connection, $_POST['pass2']);
    if ($pass1 != $pass2) {
        $error3 = "";
	    echo '<script type="text/javascript">';
	    echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
	    echo '}, 100);</script>';
    } else {
        $query = mysqli_query($connection, "select * from registration where National_ID='$id_no' AND Registration_Number='$reg_no'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $pass1 = md5($pass1); //hash password before storing it. 
            $query1 = mysqli_query($connection, "update registration set password='$pass1' where National_ID='$id_no'");
            mysqli_query($db, $query1);
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error3 = "";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong National_ID or SID','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
} else if (isset($_POST['superreset'])) {
    $id_no = $_POST['id_no'];
    $SID = $_POST['SID'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $id_no = stripslashes($id_no);
    $SID = stripslashes($SID);
    $pass1 = stripslashes($pass1);
    $pass2 = stripslashes($pass2);
    $id_no = mysqli_real_escape_string($connection, $_POST['id_no']);
    $SID = mysqli_real_escape_string($connection, $_POST['SID']);
    $pass1 = mysqli_real_escape_string($connection, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($connection, $_POST['pass2']);
    if ($pass1 != $pass2) {
        $error = "";
	    echo '<script type="text/javascript">';
	    echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
	    echo '}, 100);</script>';
    } else {
        $query = mysqli_query($connection, "select * from superlogin where National_ID='$id_no' AND SID='$SID'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $pass1 = md5($pass1); //hash password before storing it.
            $query1 = mysqli_query($connection, "update superlogin set password='$pass1' where National_ID='$id_no'");
            mysqli_query($db, $query1);
            header("location: index.php"); // Redirecting To Other Page
        } else {
            $error = "";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong National_ID or SID','error');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}