<?php

//connect to database
require('DatabaseConnection.php');
require('supersession.php');
	require('my_js.php');
$output = '';
$sql = "SELECT * FROM $assignstudent WHERE Registration_Number LIKE '%" . $_POST["search"] . "%'"
    . "OR National_ID LIKE '%" . $_POST["search"] . "%' "
    . "OR Student_Name LIKE '%" . $_POST["search"] . "%'"
    . "OR University_Of_Study LIKE '%" . $_POST["search"] . "%'"
    . "OR Mobile_Number LIKE '%" . $_POST["search"] . "%' ";
$result = mysqli_query($connection, $sql);
if ($result == true) {
    if (mysqli_num_rows($result) > 0) {
        $output .= '<h3 align="center" class="text-info text-uppercase">Allocated Student Details</h3>';
        $output .= '<div class="table-responsive">
            <table class = "table table-bordered">
            <tr>
                            <td>Student_Name</td>
                            <td>Gender</td>
                            <td>Registration_Number</td>
                            <td>National_ID</td>
                            <td>Mobile_Number</td>
                            <td>Student_Email</td>
                            <td>Course</td>
                            <td>University</td>
                            <td>Completed Attachment</td>
                        </tr>
';

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
                <td class = "lwrite2">' . $row["Student_Gender"] . '</td>
                <td class = "lwrite2">' . $row["Registration_Number"] . '</td>
                <td class = "lwrite2">' . $row["National_ID"] . '</td>
                <td class = "lwrite2">' . $row["Mobile_Number"] . '</td>
                <td class = "lwrite2">' . $row["Student_Email"] . '</td>
                <td class = "lwrite2">' . $row["Course_Of_Study"] . '</td>
                <td class = "lwrite2">' . $row["University_Of_Study"] . '</td>
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
    echo "<h1 class='text-center text-danger'>Sorry No Students Have Been A Located</h1>";
    echo "<h1 class='text-center text-danger'>To You Yet</h1>";

}
?>
