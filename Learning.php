<?php
	require('DatabaseConnection.php');
	require('my_js.php');
	session_start(); // Starting Session
// Storing Session
	$Hstudent = $_SESSION['login_student'];
	if (isset($_POST['hub'])) {
		//session_start();
		$Date =  mysqli_real_escape_string($connection, $_POST['Date']);
		$learning =  mysqli_real_escape_string($connection, $_POST['learning']);
		$skills =  mysqli_real_escape_string($connection, $_POST['skills']);
		
		
		$sql = "INSERT INTO learning (Date,learn,skill)  VALUES('$Date','$learning','$skills')";
		mysqli_query($connection, $sql);
		
		echo '<script type="text/javascript">';
		echo "setTimeout(function () { swal('Hub','Saved To The Learning Hub Store','success');";
		echo '}, 100);</script>';
		mysqli_close($connection);
		// require 'LearningE.php'; // Redirecting To Home Page
	}