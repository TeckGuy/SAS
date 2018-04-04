<?php

require('DatabaseConnection.php');
	require('my_js.php');
session_start(); // Starting Session
// Storing Session
$user_check = $_SESSION['login_student'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select Student_Name,Registration_Number,Mobile_Number"
    . ",Course_Of_Study,Year_Of_Study,DateFrom,DateTo,"
    . "University_Of_Study,Student_Email,Address,Supervisor_Name,"
    . "Section,Student_Gender,National_ID from registration where Registration_Number='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['Registration_Number'];
$Name = $row['Student_Name'];
$mnumber = $row['Mobile_Number'];
$Scourse = $row['Course_Of_Study'];
$YOS = $row['Year_Of_Study'];
$PFrom = $row['DateFrom'];
$PTo = $row['DateTo'];
$Suni = $row['University_Of_Study'];
$Email = $row['Student_Email'];
$SAddress = $row['Address'];
$Supername = $row['Supervisor_Name'];
$Lsection = $row['Section'];
$Sgender = $row['Student_Gender'];
$Natid = $row['National_ID'];

//inserting if session is on
$confirm = '';
if (isset($_POST['hub'])) {
    $Date = mysqli_real_escape_string($connection, $_POST['Date']);
    $learning = mysqli_real_escape_string($connection, $_POST['learning']);
    $skills = mysqli_real_escape_string($connection, $_POST['skills']);
    $query5 = mysqli_query($connection, "select ID from registration where Registration_Number='$login_session'");
    $rows = mysqli_num_rows($query5);
    if ($rows == 1) {
        $sql = "INSERT INTO _$Natid (Date,learn,skill,National_ID)  VALUES('$Date','$learning','$skills','$Natid')";
        mysqli_query($connection, $sql);
        
	    echo '<script type="text/javascript">';
	    echo "setTimeout(function () { swal('$Name hub','Saved To The Learning Hub Store','success');";
	    echo '}, 100);</script>';
        $confirm = "Saved To The Learning Hub Store";
    } else {
	    echo '<script type="text/javascript">';
	    echo "setTimeout(function () { swal('$Name hub','Sorry Data Not Saved','error');";
	    echo '}, 100);</script>';
        $confirm = "Sorry Data Not Saved";
    }
}
if (!isset($login_session)) {
    header('Location: index.php'); // Redirecting To Home Page
    mysqli_close($connection); // Closing Connection
}
?>