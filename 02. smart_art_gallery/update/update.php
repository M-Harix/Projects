<?php
	session_start();
	require_once 'conn.php';
if(isset($_POST['ex_update']))
{
		$update_id	= $_POST['update_id'];
		$update_artist	= $_POST['update_artist'];
		$update_medium	= $_POST['update_medium'];
		$update_size	= $_POST['update_size'];
		$update_code	= $_POST['update_code'];
		$update_price	= $_POST['update_price'];
		
		$new_pic 	= $_FILES['new_pic']['name'];
		$old_pic 	= $_POST['old_pic'];
		
		if($new_pic!= '')
		{
			$update_pic= $new_pic;
		}
		else
		{
			$update_pic= $old_pic;
		}
		$query = "UPDATE exhibition SET artist= '$update_artist', medium= '$update_medium', size= '$update_size', code= '$update_code', price= '$update_price', 
		pic= '$update_pic' WHERE id='$update_id'";
		
		$query_run = mysqli_query($conn , $query);
		
		if($query_run)
		{
			if($new_pic!= '')
			{
				move_uploaded_file($tmp_name,"$Images/Exhibition Images/".$new_pic);
				unlink("Images/Exhibition Images/".$old_pic);
			}
			$_SESSION['status']="image uploaded sucessfully.";
			header("Location: exhibitionadmin.php");
		}
		else{
			$_SESSION['status']="image not uploaded.";
			header("Location: exhibitionupdate.php");
		}
}
?>