<?php
	session_start();	
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
		session_unset();
		session_destroy();
		header("location:Home.php");
	}
?>