<?php
	
	require_once 'conn.php';
	$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn->connect_error) die($conn->connect_error);
	
	$id=(int)$_GET['id'];
	echo $id;
	$q="DELETE FROM course WHERE course_id = $id ";
	mysqli_query($conn, $q);

	header('location:course.php');
?>