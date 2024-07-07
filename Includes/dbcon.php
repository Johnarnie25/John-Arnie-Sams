<?php
	$host = "localhost";
	$user = "u872502285_attendanceovs";
	$pass = "Attendance_123";
	$db = "u872502285_attendanceovs";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Seems like you have not configured the database. Failed To Connect to database:" . $conn->connect_error;
	}
?>