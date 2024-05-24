<?php 
	session_start();
	require_once 'conn.php';
	if(isset($_POST['add']) && isset($_FILES['pic']))
	{ 
		$id 		= $_POST['id'];
		$type 		= $_POST['type'];
		$artist 	= $_POST['artist'];
		$medium 	= $_POST['medium'];
		$size 		= $_POST['size'];
		$code 		= $_POST['code'];
		$price 		= $_POST['price'];
		$status 	= 'available';
	//	$artistid 	= $_POST['artistid'];
		
		$allowed_extension = array('gif', 'png', 'jpg', 'jpeg');
		$picture 	= $_FILES['pic']['name'];
		$file_extension = pathinfo($picture, PATHINFO_EXTENSION);
		if(!in_array($file_extension, $allowed_extension))
		{
			$_SESSION['status']="You are allowed with only jpg, jpeg, png and gif ";
			header('location:arts-admin.php');
		} 
		else
		{
			
			if(file_exists("Images/arts images/".$picture))
			{
				$_SESSION['status']="Image already exist";
				header('location:arts-admin.php');
			}
			else
			{
				$sql="INSERT INTO arts VALUES ('NULL', '$type','$artist','$medium','$size','$code','$price','$picture',
					'$status','NULL')";
				$query_run= mysqli_query($conn, $sql);
				if($query_run)
				{
					$tmp_name = $_FILES['pic']['tmp_name'];
					$folder = "Images/arts images/".$picture;
					echo $folder;
					move_uploaded_file($tmp_name,$folder);
					$_SESSION['status']="Record added sucessfully";
					header('location:arts-admin.php');
				}
				else
				{
					$_SESSION['status']="Record not added";
					header('location:arts-admin.php');
				}
			} 
		}
	}
	
	if(isset($_POST['arts_update']))
	{
		$id				= $_POST['id'];
		$update_type	= $_POST['update_type'];
		$update_artist	= $_POST['update_artist'];
		$update_medium	= $_POST['update_medium'];
		$update_size	= $_POST['update_size'];
		$update_code	= $_POST['update_code'];
		$update_price	= $_POST['update_price'];
		$update_status	= $_POST['update_status'];

		$new_pic 	= $_FILES['pic']['name'];
		$old_pic 	= $_POST['old_pic'];
		if($new_pic != '')
		{
			$update_pic= $_FILES['pic']['name'];
		}
		else
		{
			$update_pic= $old_pic;
		}
		$query = "UPDATE arts SET type= '$update_type', artist= '$update_artist', medium= '$update_medium', size= '$update_size', code= '$update_code', price= '$update_price', status= '$update_status', pic= '$update_pic' WHERE id='$id'";
		$query_run = mysqli_query($conn , $query);
		if($query_run)
		{
			if($_FILES['pic']['name'] != '')
			{
				move_uploaded_file($_FILES["pic"]["tmp_name"],"Images/arts images/".$_FILES["pic"]["name"]);
				unlink("Images/arts images/".$old_pic);
			}
			$_SESSION['status']="Record updated sucessfully.";
			header("Location: arts-admin.php");
		}
		else
		{
			$_SESSION['status']="Record not updated.";
			header("Location: arts-admin.php");
		}
	}	
?>