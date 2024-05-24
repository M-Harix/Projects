<?php
	session_start();
	if (isset ($_SESSION['email']) && isset ($_SESSION['id']))
	{	
		header("location:index.php");
		$u=$_SESSION['email'];
		if($_SESSION['role'] == 'admin')
		{
			header("location:dashboard.php");
		}
		else
		{
			header("location:home.php");
		}
	}
	else
	{
		header("location:login.php");
	}
?>