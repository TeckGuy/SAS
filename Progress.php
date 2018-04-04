<?php

//connect to database
require('DatabaseConnection.php');
	require('my_js.php');
$output = '';
$sql = "SELECT * From _" . $_POST["search"] . " WHERE National_ID LIKE '%" . $_POST["search"] . "%' ";
//echo $sql;
$result = mysqli_query($connection, $sql);
if ($result == TRUE) {
    if (mysqli_num_rows($result) > 0) {
        $output .= '<h3 align="center"><img src="img/BrandingLogo.png" class="kisiilogo img-responsive" width="80px" height="auto"/></h3>';
        $output .= '<h3 align="center" class="text-info text-uppercase">Student Progress</h3>';
        $output .= '<div class="table-responsive">
            <table class = "table table-bordered">
            <tr>
            <td>Day</td>
            <td>Date</td>
            <td>Learning Experience</td>
            <td>Skills Aquired</td>
            </tr>';

        while ($row = mysqli_fetch_array($result)) {
            $output .= '
        <tr>
                <td class = "lwrite2">' . $row["ID"] . '</td>
                <td class = "lwrite2">' . $row["Date"] . '</td>
                <td class = "lwrite2">' . $row["learn"] . '</td>
                <td class = "lwrite2">' . $row["skill"] . '</td>
                </tr>';
        }

        echo $output;
    } else {
        echo "<h1 class='text-center text-danger'>Student Hasn't Learned Anything Yet</h1>";
    }
} else {
    echo "<h1 class='text-center text-danger'>Sorry Please Enter Complete Student National ID</h1>";
}
?>