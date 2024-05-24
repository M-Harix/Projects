<?php
	session_start();
	require_once 'conn.php';
					
		$fname		=	$_POST['fname'];
		$lname		=	$_POST['lname'];
		$username	=	$_POST['username'];
		$email		=	$_POST['email'];
		$pass		=	$_POST['password'];
		$dob		=	$_POST['dob'];
		$address	=	$_POST['address'];

			$allowed_extension = array('gif', 'png', 'jpg', 'jpeg');
			$img	= $_FILES['pic']['name'];
			$file_extension = pathinfo($img, PATHINFO_EXTENSION);
		
			$sql= "INSERT INTO users VALUES ('NULL', '$fname', '$lname', '$dob', '$email', '$address', 'user', '$username', '$pass', '$img')";
			$query_run= mysqli_query($conn, $sql);
				header('location:login.php');
			
		

?>