<?php
		session_start();
		require_once 'conn.php';

			$userid		=	$_SESSION['id'];
			$artistid	=	$_GET['id'];
			$fullname 	= 	$_POST['fullname'];
			$email		=	$_POST['email'];
			$address	=	$_POST['address'];
			$city		=	$_POST['city'];
			$state		=	$_POST['state'];
			$phone		=	$_POST['phone'];
			$status		=	"reject";

			$sql= "INSERT INTO orders VALUES ('NULL', '$userid', '$artistid', '$fullname', '$email','$address', '$city', '$state', '$phone', '$status')";
			$query_run= mysqli_query($conn, $sql);
			if($query_run)
			{
				header('location:home.php');
			}
		
?>