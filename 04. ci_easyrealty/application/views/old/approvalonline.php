<?php
	require_once 'conn.php';
	$id=(int)$_GET['propertyid'];
	$q1="UPDATE properties SET status='online' WHERE propertyid = $id";
	mysqli_query($conn, $q1);
	header('location:approval.php');
?>