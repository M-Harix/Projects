<?php
	require_once 'conn.php';
	$id=(int)$_GET['propertyid'];
	$q1="DELETE FROM properties WHERE propertyid = $id ";
	mysqli_query($conn, $q1);
	$q2="DELETE FROM images WHERE propertyid = $id ";
	mysqli_query($conn, $q2);
	header('location:buyadmin.php');
?>