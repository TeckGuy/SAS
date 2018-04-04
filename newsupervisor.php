<?php
require('DatabaseConnection.php');
require('my_js.php');
$success = '';
$failed = '';
$supervisorGot = '';
if (isset($_POST['registersuper'])) {
    //get data from fields
    $nationalid = mysqli_real_escape_string($connection, $_POST['nid']);
    $Username = mysqli_real_escape_string($connection, $_POST['username']);
    $personalnumber = mysqli_real_escape_string($connection, $_POST['pnumber']);

    $password = md5($nationalid); //hash password before fetching it


    $checkSupervisor = "SELECT National_ID FROM superlogin WHERE National_ID = '$nationalid'";
    $gotSupervisor = mysqli_query($connection, $checkSupervisor);
    while ($row = mysqli_fetch_array($gotSupervisor)) {
        $supervisorGot = $row['National_ID'];
    }

    if ($nationalid == $supervisorGot) {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('$Username','Already Exists.','warning');";
        echo '}, 100);</script>';
        mysqli_close();
    } else {
        //query
        $sqlm = "INSERT INTO superlogin (username,password,National_ID,SID) VALUES ('$Username','$password','$nationalid','$personalnumber')";
        $status = mysqli_query($connection, $sqlm);
        /*
         * Notify
         * */
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('$Username','Registered Successfully','success');";
        echo '}, 100);</script>';
        mysqli_close();
    }
}