<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	$q="DELETE FROM artists WHERE id = $id ";
	mysqli_query($conn, $q);
	header('location:artistadmin.php');
?>