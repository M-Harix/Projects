<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']) && isset ($_SESSION['id']))
	{
		if($_SESSION['role'] == 'admin')
		{

			header("location:dashboard.php");		
		}
		elseif($_SESSION['role'] == 'artist')
		{
			$id = $_SESSION['id'];
			$q="SELECT * FROM artists WHERE userid='$id' ";
			$qry= mysqli_query($conn, $q);
			foreach($qry as $row)
			{
				$_SESSION['artistid'] = $row['id'];
				$_SESSION['artistfname'] = $row['firstname'];
				$_SESSION['artistlname'] = $row['lastname'];
			}
				header("location:artistgallery.php");		
		}
		else
		{
			header("location:Home.php");
		}
	}
	else
	{
		header("location:Login.php");
	}
?>