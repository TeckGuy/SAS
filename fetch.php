<?php

//connect to database
require('DatabaseConnection.php');
	require('my_js.php');
$output = '';
$sql = "SELECT ID,Student_Name,Registration_Number,National_ID,Mobile_Number,"
    . "Course_Of_Study,Year_Of_Study,DateFrom,DateTo,University_Of_Study,"
    . "Student_Email,Address,Supervisor_Name,Section,Student_Gender "
    . "From registration WHERE Registration_Number LIKE '%" . $_POST["search"] . "%'"
    . "OR National_ID LIKE '%" . $_POST["search"] . "%' "
    . "OR Student_Name LIKE '%" . $_POST["search"] . "%'"
    . "OR University_Of_Study LIKE '%" . $_POST["search"] . "%'"
    . "OR Mobile_Number LIKE '%" . $_POST["search"] . "%' ";
$result = mysqli_query($connection, $sql);
if ($result == true) {
    if (mysqli_num_rows($result) > 0) {
        $output .= '<h3 align="center"><img src="img/BrandingLogo.png" class="kisiilogo img-responsive" width="80px" height="auto"/></h3>';
        $output .= '<h3 align="center" class="text-info text-uppercase">Student Details</h3>';
        $output .= '<div class="table-responsive">
            <table class = "table table-bordered">
            <tr>
            <td>Student_Name</td>
            <td>Registration_Number</td>
            <td>National_ID</td>
            <td>Mobile_Number</td>
            <td>Course</td>
            <td>Year</td>
            <td>From</td>
            <td>To</td>
            <td>University</td>
            <td>Student_Email</td>
            <td>Address</td>
            <td>Supervisor_Name</td>
            <td>Section</td>
            <td>Gender</td>
            <td>Completed Attachment</td>
            </tr>';

        while ($row = mysqli_fetch_array($result)) {
            $datecomp = $row['DateTo'];
            if (strtotime($datecomp) < time()) {
                $showcomplition1 = "<p class='text-center text-success'><span class=\"glyphicon glyphicon-ok\"></span></p>";
            } else {
                $showcomplition1 = "<p class='text-center text-danger'><span class=\"glyphicon glyphicon-remove\"></span></p>";
            }
            $output .= '
        <tr>
                <td class = "lwrite2">' . $row["Student_Name"] . '</td>
                <td class = "lwrite2">' . $row["Registration_Number"] . '</td>
                <td class = "lwrite2">' . $row["National_ID"] . '</td>
                <td class = "lwrite2">' . $row["Mobile_Number"] . '</td>
                <td class = "lwrite2">' . $row["Course_Of_Study"] . '</td>
                <td class = "lwrite2">' . $row["Year_Of_Study"] . '</td>
                <td class = "lwrite2">' . $row["DateFrom"] . '</td>
                <td class = "lwrite2">' . $row["DateTo"] . '</td>
                <td class = "lwrite2">' . $row["University_Of_Study"] . '</td>
                <td class = "lwrite2">' . $row["Student_Email"] . '</td>
                <td class = "lwrite2">' . $row["Address"] . '</td>
                <td class = "lwrite2">' . $row["Supervisor_Name"] . '</td>
                <td class = "lwrite2">' . $row["Section"] . '</td>
                <td class = "lwrite2">' . $row["Student_Gender"] . '</td>
                <td class = "lwrite2">' . $showcomplition1 . '</td>
                </tr>';

        }

        echo $output;
    } else {
        echo "<h1 class='text-center text-danger'>Student Not Found</h1>";
    }
} else {
    echo "<br/>";
    echo "<br/>";
    echo "<h1 class='text-center text-danger'>Sorry No Students Have Been Attached Yet</h1>";
}
?>
