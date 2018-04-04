<?php
	
	require('my_js.php');
/**
 * Created by PhpStorm.
 * User: Tech Guy
 * Date: 6/1/2017
 * Time: 11:30 AM
 */
//connect to the database mysql
//$con = mysqli_connect("localhost", "root", "")or die($con);
$connection = mysqli_connect("localhost", "root", "", "kisii_county") or die($connection);
//$db = mysqli_connect("localhost", "TechGuy", "jobvinny", "kisii_county")or die($db);

if($connection == null){
	
	echo '<script type="text/javascript">';
	echo "setTimeout(function () { swal('Database Connection','Connection Failed Please Start The Server','error');";
	echo '}, 100);</script>';
	
}
