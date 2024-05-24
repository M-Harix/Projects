<?php
		session_start();
		require_once 'conn.php';

			$artistid	=	'NULL';
			$userid 	= 	$_SESSION['id'];
			$fname		=	$_POST['inputFName'];
			$lname		=	$_POST['inputLName'];
			$dob		=	$_POST['inputDate'];
			$email		=	$_POST['inputEmail'];
			$address	=	$_POST['inputAddress'];
			$city		=	$_POST['inputCity'];
			$state		=	$_POST['inputState'];
			$postal		=	$_POST['inputPostal'];
			$phone		=	$_POST['inputPhone'];
			$des		=	$_POST['inputDescription'];
			$status		=	"offline";
 
			$allowed_extension = array('gif', 'png', 'jpg', 'jpeg');
			$img	= $_FILES['pic']['name'];
			$file_extension = pathinfo($img, PATHINFO_EXTENSION);

			$sql= "INSERT INTO artists VALUES ('NULL', '$userid', '$fname', '$lname', '$dob', '$email','$address', '$city', '$state', '$postal','$phone', '$des', '$img', '$status')";
			$query_run= mysqli_query($conn, $sql);
			if($query_run)
			{
				$tmp_name = $_FILES['pic']['tmp_name'];
				$folder = "Images/artists images/".$img;
				echo $folder;
				move_uploaded_file($tmp_name,$folder);
				header('location:home.php');
			}
			else 
			{
				header('location:index.php');
			}
		
?>