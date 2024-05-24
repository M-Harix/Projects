<?php
		session_start();
		require_once 'conn.php';

		$id = $_GET['id'];
		$q1="UPDATE artists SET status= 'online' WHERE id='$id'";
		$query= mysqli_query($conn, $q1);
		header('location:requests-artists.php');
 ?>