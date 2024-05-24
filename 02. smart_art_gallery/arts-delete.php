<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	$q="DELETE FROM arts WHERE id = $id ";
	mysqli_query($conn, $q);
	unlink("Images/arts images/".$_GET['pic']);
	header('location:arts-admin.php');
?>