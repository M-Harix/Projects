<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
		if($_SESSION['role'] == 'admin')
		{
?>
<html>
	<head>
		<title>Smart Art Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			label{
				font-weight: 700;
			}
		</style>
	</head>
	<body>
		<div class="container">
<?php 
	if(isset($_GET['id']))
	{
		$id	= $_GET['id'];
		$query = "SELECT * FROM	arts WHERE id='$id'";		
		$query_run = mysqli_query($conn , $query); 
		foreach($query_run as $row)
		{
?>
			<form action="arts-insert.php"  method="POST"  enctype="multipart/form-data" style="margin-top:3%;">

				
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id"  class="form-control" >

				<label>Type</label>
				<select name="update_type" class="form-control">
					<option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
					<option value="calligraphy">calligraphy</option>
					<option value="miniature">miniature</option>
					<option value="landscape">landscape</option>
					<option value="figurative">figurative</option>
					<option value="abstract">abstract</option>
					<option value="realism">realism</option>
				</select>
				<label>Artist</label>
				<input type="text" value="<?php echo $row['artist']; ?>" name="update_artist" class="form-control">
				<label>Medium</label>
				<input type="text" value="<?php echo $row['medium']; ?>" name="update_medium" class="form-control">
				<label>Size</label>
				<input type="text" value="<?php echo $row['size']; ?>" name="update_size" class="form-control">
				<label>Code</label>
				<input type="text" value="<?php echo $row['code']; ?>" name="update_code" class="form-control">
				<label>Price</label>
				<input type="text" value="<?php echo $row['price']; ?>" name="update_price" class="form-control">
				<label>Status</label>
				<select name="update_status" class="form-control">
					<option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
					<option value="available">available</option>
					<option value="sold">sold</option>
				</select>
				<label>Picture</label>
				<input type='file' name="pic"  class="form-control">
				<input type='hidden' name="old_pic" value="<?php echo $row['pic']; ?>" class="form-control">
				
				<img src="<?php echo "Images/arts images/".$row['pic'];?>" width="100px">
				
					<button type="submit" name="arts_update" class="btn btn-primary btn-lg">Update</button>
					
					<a href="arts-admin.php" class="btn btn-danger btn-lg">Cancel</a>
							  
			</form>
		</div>
<?php
		}
	}

?>
	</body>
</html>
<?php 
		}
		else
		{
			header('location:login.php');
		}
	}
	else
	{
		header('location:login.php');
	}
?>