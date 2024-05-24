<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	$q="DELETE FROM exhibition WHERE id = $id ";
	mysqli_query($conn, $q);
	header('location:exhibitionadmin.php');
?>