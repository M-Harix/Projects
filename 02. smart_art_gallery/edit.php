<?php 
	
	require_once 'conn.php';
?>
<html>
	<head>
		<title>Smart Art Gallery</title>
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
	<h1 style="text-align:center; background-color:black; color:white; height:80px;">Exhibition</h1>
		<div class="container">
<?php
	if(isset($_GET['id']))
	{
		$id	= $_GET['id'];
		$query = "SELECT * FROM	exhibition ORDER BY id DESC";		
		$query_run = mysqli_query($conn , $query); 
		foreach($query_run as $row)
		{
?>
			<form action="code.php"  method="POST"  enctype="multipart/form-data">

				
				<input type="hidden" value="<?php echo $row['id']; ?>" name="id"  class="form-control" >

				<label>Artist</label>
				<input type="text" value="<?php echo $row['artist']; ?>" name="update_artist" class="form-control" >

				<label>Medium</label>
				<input type="text" value="<?php echo $row['medium']; ?>" name="update_medium" class="form-control">

				<label>Size</label>
				<input type="text" value="<?php echo $row['size']; ?>" name="update_size" class="form-control">

				<label>Code</label>
				<input type="text" value="<?php echo $row['code']; ?>" name="update_code" class="form-control">

				<label>Price</label>
				<input type="text" value="<?php echo $row['price']; ?>" name="update_price" class="form-control">

				<label>Picture</label>
				<input type='file' name="pic"  class="form-control">
				<input type='hidden' name="old_pic" value="<?php echo $row['pic']; ?>" class="form-control">
				
				<img src="<?php echo "Images/Exhibition Images/".$row['pic'];?>" width="100px">
				
					<button type="submit" name="ex_update" class="btn btn-primary btn-lg">Update</button>
					
					<a href="update-module.php" class="btn btn-danger btn-lg">Cancel</a>
							  
			</form>
		</div>
<?php
		}
	}

?>
	</body>
</html>